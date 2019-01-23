<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TodoList</title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('inc.navbar')
    <div class="container mt-2">
        @include('inc.messages')
        @yield('content')
        <footer class="py-3">
            <p class="text-center">Copyright &copy; 2017 TodoList</p>
        </footer>
    </div>
</body>
</html>