
<?php
    include("../config/connectionDB.php");
    $id=$_GET['userId'];
    $sql="SELECT * FROM users WHERE id ='$id'";
    $result=$conn->query($sql);
    //num_rows nos ayuda ver los datos que tenemos dentro de la base de datos
    if($result->num_rows > 0){
    //fetch_assoc el detecta cuando ya todos los registros pasaron
    while($row = $result->fetch_assoc()){
        $f_name=$row['first_name'];
        $l_name=$row['last_name'];
        $ident=$row['number_id'];
        $addres=$row['address'];
        $mobile=$row['celphone'];
        $email=$row['email'];
        $contra=$row['password'];
    }
    }else{
        echo"Datos no encontrados";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets|User</title>
</head>
<body>
    <h1>Bienvenidos</h1>
    <center>

        <form name="editUserFrom" action="http://127.0.0.1/pets/back/src/update_user.php" method="POST">
        
            <label>Id</label><input type="hidden" name="uId" value='<?php echo $id; ?>' required readonly="yes"> <br><br> <!--"hidden" es para ocultar -->
            <label>Firstname</label>&nbsp<input type="text" name="f_name" value='<?php echo $f_name;?>' required> <br><br>
            <label>lastname</label>&nbsp<input type="text" name="l_name" value='<?php echo $l_name;?>' required> <br><br>
            <label>Ident.name</label>&nbsp<input type="text" name="id_num" value='<?php echo $ident;?>' required><br><br>
            <label>Address</label>&nbsp<input type="text" name="address" value='<?php echo $addres;?>' required><br><br>
            <label>Cellphone</label>&nbsp<input type="text" name="cel_phone" value='<?php echo $mobile ;?>' required><br><br><!-- hola-->
            <label>E-mail</label>&nbsp<input type="email" name="email" value='<?php echo  $email;?>' required><br><br> <!--disabled="true" desabilitar campos-->
            <label>Password</label>&nbsp<input type="password" name="passwd"  value='<?php echo $contra;?>' required><br><br>
            <button>Registrarse</button>
        </form>
    </center>

</body>
</html>