<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   
    <title>Document</title>
</head>
<body class="bg-gray-200">
    <main class="container w-8/12 mx-auto bg-white mt-5 p-5 flex">
        @yield('content')
    </main>
 
</body>
</html>
