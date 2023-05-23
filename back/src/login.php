<?php
    //llamamos a la base de datos 
    //Get DataBase connection
    include("../config/connectionDB.php");  
    //obtenemos los datos 
    $email = $_POST['email'];
    $passwd = md5($_POST['password']);
    //creamos la consulta Query
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$passwd'"; 
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        //echo"el usuario existe ";
        header("location:http://127.0.0.1/pets/front/src/home.html");
    }else{
        //echo"el usuario no existe o datos incorrectos";
        //echo $conn->error;
        echo"<script>alert('Usuario no existe o datos son incorrectos'  )</script>";
        header("refresh:0; url=http://127.0.0.1/pets/front/src/login.html");
    }
?>