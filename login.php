<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body id="body_login">

<?php 
if (isset($_POST['user']))
{
    
$u=$_POST['user'];
$u=str_replace("'","",$u);
$u=str_replace("<","",$u);
$u=str_replace("%","",$u);
$u=str_replace("_","",$u);
$u=str_replace("#","",$u);
$p=$_POST['pass'];
$p=str_replace("'","",$p);
$p=str_replace("<","",$p);
$p=str_replace("%","",$p);
$p=str_replace("_","",$p);
$p=str_replace("#","",$p);
$servername = "localhost";
$username = "root";
$password = "toor2022";
$dbname = 'notiweb';


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios WHERE user='{$u}' and pass='{$p}'";
echo"$sql";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
    echo "Bienvenido{$row['nombre']}";
    echo "<a href='admin.php'> Continuar </a>";
    die();
    }
    else
    {
        echo "<div style='color:red;'> Usuario o Contraseña Incorrecto </div>";
    }
    
}
?>
<div id="body_login">
    <img id="img_login" src="https://s3.amazonaws.com/abn-prod/wp-content/uploads/sites/3/2022/07/cheddar_news_share.png" height="300px"><br>
    <form method='post' id="main_login">
    Nombre: <input class="btn_user" type='text' name='user'><br>
    Contraseña: <input class="btn_pass" type='password' name='pass'>
    <input class="btn_submit" type='submit' name='OK'>
</form>
</div>
</body>
</html>