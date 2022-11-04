<html>
    <head>
        <title>
            Prueba de View Create
        </title>
    </head>
    <body>
        <h1>
            <form method="post" action="http://127.0.0.1:8000/clients/">
                @csrf 

                <label>Nombre:</label>
                <input type="text" placeholder="maria" name="name"><br>

                <label>Email:</label>
                <input type="email" placeholder="example@hotmail.com" name="email"><br>

                <label>Phone number:</label>
                <input type="text" placeholder="612XXXXXXX" name="phone_number"><br>

                <br>

                <button type="submit">
                    Submit
                </button>
            </form>
        </h1>
    </body>
</html>