<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <form method="post" action="http://127.0.0.1:8000/users/">
        @csrf
        <input type ="text" placeholder="name" name="name">
        <input type ="text" placeholder="lastname" lastname="lastname">

        <button>Guardar</buytton>

</form>
</body>
</html>