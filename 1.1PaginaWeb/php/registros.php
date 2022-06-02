<?php

include_once("conection.php");
if (!empty($_POST)) {
    //  $serverName = "ISAACGRAMAJO\SQLEXPRESS"; //serverName\instanceName
    // Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
    // La conexión se intentará utilizando la autenticación Windows.
    //$connectionInfo = array( "Database"=>"Registro");
    $Nom = $_POST['names'];
    $Ape = $_POST['lastnames'];
    $Dir = $_POST['addres'];
    $Cor = $_POST['email'];
    $Tel = $_POST['phone_number'];
    $Doc = $_POST['document'];
    $City = $_POST['city'];
    $Pass = $_POST['pass'];

    $insertar = "INSERT into registro(names,lastnames,email,pass,phone_number,city,addres,document)values('$Nom','$Ape','$Cor','$Pass','$Tel','$City','$Dir','$Doc')";
    echo $insertar;
    echo "<br/>";
    //Te faltaba esta lineaX
    $conction = new Cconection();
    //Cconection::Insert();
    $result = $conction->Insert($insertar);
    //Para mas seguridad usa el valor retornado por sqlsrv_execute

    if ($result != false) {
        echo "Agregado correctamente";
        header("location: frm_resgister.php");
    } else {
        echo "No Agregado";
    }
}
else{
    echo "No deben haber datos en blancos";
}



