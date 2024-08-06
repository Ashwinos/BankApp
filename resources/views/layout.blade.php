<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Bank App</title>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
        @include('Home.navbar')
        @yield('content')
</body>
</html>