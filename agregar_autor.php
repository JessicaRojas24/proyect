<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cheddar news</title>
    <link rel="stylesheet" href="panel_style.css">
</head>
<body>
<a href="admin.php"><button class="return" type='submit'><img src="https://static.vecteezy.com/system/resources/previews/014/441/303/non_2x/media-skip-backward-icon-3d-design-for-application-and-website-presentation-png.png" height="30px"></button></a>
<div class="form">
    <div class="title">Agregar autores</div>
    <div class="subtitle">Por favor ingrese un nombre de autor y correo</div>
    <form method='post'>
        <div class="input-container ic1">
        <input id="nombre" class="input" type="text"  name='nombre' <?php if(isset($A))?> placeholder=" " />
        <div class="cut"></div>
        <label for="Nombre" class="placeholder">Nombre</label>
        </div>
        <div class="input-container ic2">
        <input id="correo" class="input" type="text" name='correo' <?php if(isset($B))?> placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="correo" class="placeholder">Correo</>
        </div>
        <input class="submit" type='submit' name='OK' value='Enviar'>
    </form>
    <?php
        /*include 'cabecera.php';*/
        if(isset($_POST['nombre']))
        {
            $A=$_POST['nombre'];
            $B=$_POST['correo'];
            
            $conx = mysqli_connect('localhost', 'root', 'toor2022', 'notiweb');
            if (mysqli_connect_errno())
            {
                die ("Failed to connect to MySQL: " . mysqli_connect_error());
            }
            $sql="INSERT INTO autores (Nombre, Correo) 
                VALUES ('{$A}','{$B}')";
                $result=mysqli_query($conx, $sql);
            echo "<div class='subtitle'>El registro se agrego correctamente</div>";
        }
    ?>
</div>

</body>
</html>