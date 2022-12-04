<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheddar News</title>
    <link rel="shortcut icon" href="noticias/C-Logo.png">
    <link rel="stylesheet" href="login_style.css">
    <script src="https://kit.fontawesome.com/c49750f9a4.js" crossorigin="anonymous"></script>
    <script>
        function()
        {

        }
    </script>
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
//echo"$sql";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
    //echo "Bienvenido{$row['nombre']}";
    //echo "<a href='admin.php'> Continuar </a>";
    echo "<meta http-equiv='refresh' content='1; url=admin.php'>";
    die();
    }
    else
    {
        echo "<script> 
        alert('Usuario o Contraseña Incorrecto.');
    </script>";
        #echo "<div style='color:red;'> Usuario o Contraseña Incorrecto </div>";
    }
    
}
?>
    <div class="form">
    <div class="title_form">
            <a href="index.php"><button class="return" type='submit'><i class="fa-sharp fa-solid fa-arrow-left"></i></button></a>
        </div>
      <div class="title">Welcome</div>
      <div class="subtitle" id="login_Error_Message" style="visibility: hidden;">Usuario o Contraseña Incorrecto</div>
      <form method="post">
        <div class="input-container ic1">
            <input id="username" class="input" type="text"  name='user' placeholder=" " />
            <div class="cut"></div>
            <label for="username" class="placeholder">Username</label>
        </div>
        <div class="input-container ic2">
            <input id="password" class="input" type="password" name='pass' placeholder=" " />
            <div class="cut cut-short"></div>
            <label for="password" class="placeholder">Password</>
        </div>
        <input class="submit" type='submit' name='OK'>
      </form>
    </div>
    
</body>
</html>