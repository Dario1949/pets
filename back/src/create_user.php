<?php
//hacemos el llamdo a la configaracion del backend que tiene conexcion con la base de datos
include("../config/connectionDB.php");

//Get data 
$fname = $_POST['f_name'];
$lname = $_POST['l_name'];
$idnum = $_POST['id_num'];
$address = $_POST['address'];
$celPhone = $_POST['cel_phone'];
$email = $_POST['email'];
$pass = md5($_POST['passwd']);

//insertamos los datos a la base de datos 
$sql = "INSERT INTO users(first_name,last_name,number_id,address,celphone,email,password)
VALUES('$fname','$lname','$idnum','$address','$celPhone','$email','$pass')";


if($conn->query($sql)=== true){
    //echo ".:: USER HAS BEEN CREATED SUCCESFULLY ::.";
    echo"<script>alert('El usuario ha sido creado con éxito')</script>";
    header("refresh:0; url=http://127.0.0.1/pets/front/src/login.html");
}else{
    //echo "ERROR".$conn->error."<br>".$sql;
    echo"<script>alert('EL USUARIO NO FUE CREADO CON ÉXITO)</script>";
    header("refresh:0; url=http://127.0.0.1/pets/front/src/create_user.html");
}

?>