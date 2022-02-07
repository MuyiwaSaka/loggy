<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="">Home</a></li>
            @guest
                <li><a href="">Become A Partner</a></li>    
            @endguest
            
            @auth
                <li><a href="">Dashboard</a></li>    
            @endauth            
            <li><a href="">Send A Package</a></li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>