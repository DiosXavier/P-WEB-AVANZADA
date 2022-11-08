<html>
    <head>
        <title>
            Prueba de View edit
        </title>
    </head>
    <body>
        <h1>
            <form method="post" action="{{url('clients')}}"> 
                @method('PUT') 
                @csrf

                <label>Nombre:</label>
                <input type="text" placeholder="maria" name="name" value="{{$client->name}}"><br>

                <label>Email:</label>
                <input type="email" placeholder="example@hotmail.com" name="email" value="{{$client->email}}"><br>

                <label>Phone number:</label>
                <input type="text" placeholder="612XXXXXXX" name="phone_number" value="{{$client->name}}"><br>

                <br>
                <input type="hidden" name="id" value="{{$client->id}}">
                <button type="submit">
                    Submit
                </button>
            </form>
        </h1>
    </body>
</html>