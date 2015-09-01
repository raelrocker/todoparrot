<?php

namespace todoparrot\Exceptions;

use Exception;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;


class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        HttpException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $e
     * @return void
     */
    public function report(Exception $e)
    {
        return parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        if ($e instanceof \Illuminate\Database\Eloquent\ModelNotFoundException)
        {
            return $this->renderModelNotFoundException($e);
        }
        else
        {
            return parent::render($request, $e);
        }
    }
    
    protected function renderModelNotFoundException(\Illuminate\Database\Eloquent\ModelNotFoundException $e)
    {
        if (view()->exists('errors.404'))
        {
            return response()->view('errors.404', [], 404);
        }
        else
        {
            return (new SymfonyDisplayer(config('app.debug')))->createResponse($e);
        }
    }
}
