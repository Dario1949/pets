<?php
//Developer: Dario Fierro  
//MSQL engine Credentiales 
$host ="127.0.0.1";
// root nombre de usuario por defecto de mysq
$username = "root";
$password = "";
//nombre de la base de datos a la que se va a conectar 
$dbname = "pets1";
$port = "3306";
//create connection -->SQL

$conn = new mysqli($host,$username,$password,$dbname,$port);

//check connetion
if($conn->connect_error){
 echo "conexion fallida ".$conn->connect_error;

}else{
    echo"conexcion satisfactoria";
}


?>