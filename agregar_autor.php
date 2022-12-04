<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheddar News</title>
    <link rel="shortcut icon" href="noticias/C-Logo.png">
    <link rel="stylesheet" href="panel_style.css">
    <script src="https://kit.fontawesome.com/c49750f9a4.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="form">
    <div>
        <a href="baja_autor.php"><button class="return" type='submit'><i class="fa-sharp fa-solid fa-arrow-left"></i></button></a>
    </div>
        <div class="title">Agregar autores</div>
        <div class="subtitle">Por favor ingrese un nombre de autor y correo</div>
        <form method='post'>
            <div class="input-container ic1">
                <input id="nombre" class="input" type="text" name='nombre' <?php if(isset($A))?> placeholder=" " />
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