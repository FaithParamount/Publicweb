<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>this is public event @yield('tittle','开始')</title>
    
    <link rel="stylesheet" href=" {{mix('css/app.css')}} ">
    <!-- 
        <link rel="stylesheet" href=""> 
    -->
</head>
<body>
      @include('layouts._head')
    <div id="content" name="content">       
        @yield('content')    
        @include('layouts._footer')
    </div>
</body>
</html>