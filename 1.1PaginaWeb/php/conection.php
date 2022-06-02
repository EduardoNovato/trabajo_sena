<?php

class Cconection{

    function ConectionDB(){
        $host="localhost";
        $dbname="PRUEBA";
        $username="sa";
        $pass="123456";
        $port=1433;

        $conn = null;

        try{
            $conn = new PDO ("sqlsrv:Server=$host,$port;Database=$dbname", $username, $pass);
            //echo "Conectado...";
            echo "<br>";
        }
        catch(PDOException $exp){
            echo "no se conecto: $dbname, eroro: $exp";
            
        }
        return $conn;
    }
    function Insert($sql){
        $conection = $this->ConectionDB();
        $data = $conection->query($sql);
        return $conection->lastInsertId();
    }
    function Select($sql){
        $conection = $this->ConectionDB();
        $result = $conection->query($sql);
        return $result;

        //if($result->fetchColumn() > 0){


            //foreach ($conection->query($sql) as $fila){
                
                // echo "El id es ".$fila["id_user"]." El nombre es ".$fila["names"]." el apellido es ".$fila["lastnames"]."<br>";
             //}
            //while($fila = $result->fetch_assoc()){
                //  echo "El id es ".$fila["id_user"]." El nombre es ".$fila["names"]." el apellido es ".$fila["lastnames"]."<br>";
            //}
            
        //}
        //else{
        //    echo "La consulta no genera registros";
       // }
    }
    
}
// select, insert y delete
?>