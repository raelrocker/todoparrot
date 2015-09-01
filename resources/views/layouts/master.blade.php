<!doctype html> 
<html lang="en"> 
    <head>
        <meta charset="UTF-8"> 
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        
        <title>Welcome to TODOParrot</title>
    </head>
<body>
   <div class="container">

       <div class="col-md-9">
           @yield('content')
       </div>

       <div class="col-md-3">
           @section('advertisement')
           <p>
               Jamz and Sun Lotion Special $29!
           </p>
           @show
           {{--  
               equivalente a 
               @endsection
               @yield('advertisement')
           --}}
       </div>
   </div>
</body>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</html>