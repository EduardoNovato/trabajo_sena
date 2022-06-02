<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optica e Imagen</title>
    <link rel="icon" href="/img/vision.ico">
    <link rel="stylesheet" href="/1.1PaginaWeb/CSS/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <form>
        <a href="./principal.php"><img src="/img/iq.png"></a>
        <br>
        <br>
        <div class="form-group col-md-5"> <!-- Full Name -->
            <label for="full_name_id" class="control-label"><b>Nombre completo</b></label>
            <input type="text" class="form-control" id="full_name_id" name="full_name" placeholder="Escriba su Nombre">
        </div> 
        <div class="form-group col-md-5"> <!-- Telefono -->
            <label for="full_name_id" class="control-label"><b>Telefono</b></label>
            <input type="number" class="form-control" id="full_name_id" name="full_name" placeholder="Escriba su Telefono">
        </div>    
    
       <div class="form-group col-md-5"> <!-- Examen -->
            <label class="control-label"><b>Cuándo fue la última vez que asistio a un examen visual</b></label>
            <select class="form-control" id="usado">
                <option value="Sí">Hace 1 año</option>
                <option value="No">Hace 2 años</option>
                <option value="AZ">Hace 3 años</option>
                <option value="AR">Hace 4 años o más</option>
            </select>                    
        </div>                 
                                
        <div class="form-group col-md-5"> <!-- Edad -->
            <label class="control-label"><b>Edad</b></label>
            <select class="form-control" id="usado">
                <option value="Sí">5 a 10 años</option>
                <option value="No">10 a 20 años</option>
                <option value="No">20 a 30 años</option>
                <option value="No">30 a 40 años</option>
                <option value="No">40 a 50 años</option>
                <option value="No">50 a 60 años</option>
                <option value="No">70 a 80 años</option>
                <option value="No">80 a 100 años</option>
            </select>                    
        </div>   
    
        <div class="form-group col-md-5"> <!-- Enfermedad -->
            <label class="control-label"><b>Que enfermedad visual padece</b></label>
            <select class="form-control" id="usado">
                <option value="CO">Conjuntivitis</option>
                <option value="AS">Astigmatismo</option>
                <option value="CA">Cataratas</option>
                <option value="HI">Hipermetropía</option>
                <option value="DM">Degeneración macular seniL</option>
                <option value="MI">Miopía</option>
                <option value="ES">Estrabismo</option>
                <option value="GL">Glaucoma</option>
                <option value="GL">Desconozco mi problema visual</option>
            </select>                    
        </div>                                
                                
        <div class="form-group col-md-5"> <!-- Lentes -->
            <label class="control-label"><b>Ha usado lentes de conctacto</b></label>
            <select class="form-control" id="usado">
                <option value="Sí">Sí</option>
                <option value="No">No</option>
            </select>                    
        </div>          
         
        <div class="form-group"> <!-- Submit Button -->
            <input type="button"class="btn btn-dark me-2" value="Enviar Formulario">
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