<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <title>Document</title>
</head>
<body  class="bg-gray-200">
    <nav  class="p-6 bg-white flex justify-between mb-6">
        <ul>
            <li><a href="" class='p-3'>Home</a></li>
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