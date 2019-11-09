<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>this is public event @yield('tittle','开始')</title>
    
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <!-- 
        <link rel="stylesheet" href=""> 
    -->
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                  <a class="navbar-brand" href="/">Weibo App</a>
                  <ul class="navbar-nav justify-content-end">
                    <li class="nav-item"><a class="nav-link" href="/help">帮助</a></li>
                    <li class="nav-item" ><a class="nav-link" href="#">登录</a></li>
                  </ul>
                </div>
              </nav>
    <div id="content" name="content">       
        @yield('content')    
    </div>
</body>
</html>