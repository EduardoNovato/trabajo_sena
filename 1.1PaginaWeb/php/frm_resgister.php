<?php

include_once("conection.php");
$con = new Cconection();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optica e Imagen</title>
    <link rel="icon" href="/img/vision.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <a href="./principal.php"><img src="/img/iq.png"></a>
    <div class="container-fluid">
        <form action="./registros.php" method="POST" class="container">
            <div class="row">
                <div class="card-img mb-4">
                   <center><img src="/img/registered.png" alt="Logo web"> </center>
                </div>
                <div class="col-6">
                    <label for="validationCustom01" class="form-label">Nombres</label>
                    <input type="text" name="names" class="form-control" aria-label="First name" maxlength="20" required="">
                </div>
                <div class="col-6">
                    <label for="validationCustom02 " class="form-label">Apellidos</label>
                    <input type="text" name="lastnames" class="form-control" aria-label="Last name" required="">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Correo</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="example@hotmail.com" required="">
                </div>
                <div class=" col-md-6">
                    <label for="inputPassword4" class="form-label">Contraseña</label>
                    <input type="password" name="pass" class="form-control" id="inputPassword4" placeholder="*******" pattern=".{8,}" required="">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Telefono</label>
                    <input type="number" name="phone_number" class="form-control" id="inputAddress" placeholder="" required="">
                </div>
                <div class="col-6">
                    <label for="inputAddress2" class="form-label">documento</label>
                    <input type="number" name="document" class="form-control" id="inputAddress2" placeholder="" required="">
                </div>
                <div class="col">
                    <label for="inputCity" class="form-label">Ciudad</label>
                    <input type="text" name="city" class="form-control" id="inputCity" required="">
                </div>
                <div class="col-6">
                    <label for="inputAddress2" class="form-label">Dirección</label>
                    <input type="text" name="addres" class="form-control" id="inputAddress2" placeholder="" required="">
                </div>
                <div class="col-12 m-2">
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                </div>
            </div>
        </form>
        
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>