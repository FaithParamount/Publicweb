<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>this is public event @yield('tittle','开始')</title>
    <link rel="stylesheet" href="/Laravel/public/css/welcome.css">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
    <nav class="navber navbar-dark bg-dark navbar-expand-lg">
        <div>
            <a class="navber_brand" href="/">welcome</a>
            <ul class="nav-item justify-content-end">
                <li class="nav-item"><a href="/help" class="nav-link">帮助</a></li>
                <li class="nav-item"><a href="#" class="nav-link">登录</a></li>
            </ul>
        </div>
    <div id="content" name="content">       
        @yield('content')    
    </div>
</body>
</html>