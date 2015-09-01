@extends('layouts.master')

@section('content')
    <h1>Welcome to TODOParrot!</h1>
@endsection

@section('advertisement')
    @parent
    <p>
        Buy the TODOParrot Productivity guide for $10!
    </p>
    <a href="http://www.wjgilmore.com" class="btn btn-success">W.J. Gilmore, LLC</a>
@endsection