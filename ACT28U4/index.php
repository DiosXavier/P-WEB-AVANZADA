<?php 
    include "app/config.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Prueba
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-center text-center">
            <h1>
                INICIO DE SESION:
            </h1>
            <form  class="form" method="POST" action="auth">
            <div class="col-med-3">
                <fieldset>
                    <legend>
                        Acceso al panel
                    </legend>
                    <label >
                        Correo Electronico
                    </label>
                    <input type="email" v-model="email" name="email" value="jeju_19@alu.uabcs.mx"><br>
                    <br>
                    <label>
                        Password
                    </label>
                    <input type="password" v-model="password" name="password" value="O338lXPk!5k8I6"><br>
                    <br>
                    <input type="hidden" name="global_token" value="<?=  $_SESSION['global_token']?>">
                    <button type="submit" name="accion" value="access">
                        Acceder
                    </button>
                </fieldset>
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>

<!---
jeju_19@alu.uabcs.mx
O338lXPk!5k8I6
--->