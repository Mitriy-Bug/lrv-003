<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Профиль</title>
</head>
<body>
    <h1>Ваш профиль</h1>
    <p><strong>Имя:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>ID:</strong> {{ $id }}</p>
</body>
</html>