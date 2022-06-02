<?php
    include_once ("conection.php");
?>
<?php
    $conection = new Cconection();
    $sql = "SELECT id_user, names, lastnames FROM registro";
    $data_register = $conection->Select($sql);
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!--  Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
    <!--  Datatables Responsive  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <title>Listado de usuarios</title>
    <style>
    thead {
        background-color: rgb(16, 105, 179);
        color: #fff;
    }
    </style>
</head>

<body>
    <br>
    <h1 class="text-center">Lista de usuarios listados</h1>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-border table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                        </tr>
                    </thead>
                    <tbody>

                            <?php 
                            if($data_register->fetchColumn() > 0){
                                foreach ($data_register as $fila){
                                    echo "<tr>";
                                    echo "<td>".$fila['id_user']."</td>";
                                    echo "<td>".$fila['names']."</td>";
                                    echo "<td>".$fila['lastnames']."</td>";
                                    echo "</tr>";
                                    // echo "El id es ".$fila["id_user"]." El nombre es ".$fila["names"]." el apellido es ".$fila["lastnames"]."<br>";
                                }
                            }
                        ?>
                        

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

     <!--Bootstrap JS-->
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <!-- Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
    <!-- Datatables responsive -->
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#registros').DataTable({
                responsive: true
            });
        });
    </script>
</body>
</html>
