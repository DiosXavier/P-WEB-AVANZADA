<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        @if(Auth::User())
            {{Auth::User()->name}}
        @endif
    </h1>
    
    <form action="{{url('login')}}" method="post">
        @csrf
        <label>
            Email
        </label>
        <input type="email" name="email" placeholder="ejemplo@gmail.com"><br>
        <br>
        <label>
            Password
        </label>
        <input type="password" name="password" placeholder="********"><br>
        <br>

        <input type="submit" value="guardar">
    </form>
</body>
</html>