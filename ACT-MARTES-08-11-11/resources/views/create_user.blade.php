<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="http://127.0.0.1:8000/users/" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="text" name="lastname" placeholder="lastname">
        <input type="submit" value="guardar">
    </form>
</body>
</html>