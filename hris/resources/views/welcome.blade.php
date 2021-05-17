<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HRIS</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div id="app">
        <h2>Welcome Page</h2>
        <h4>Login</h4>
        <main-component/>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
