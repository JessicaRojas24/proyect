<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="noticia_style.css">
    <script src="https://kit.fontawesome.com/c49750f9a4.js" crossorigin="anonymous"></script>
    
</head>

<body>


    <?php
if(isset($_POST['titulo']))
{
    $A=$_POST['titulo'];
    $B=$_POST['autor'];
    $C=$_POST['cuerpo'];
    $D=$_POST['categoria'];
    $E=$_POST['fecha'];
    $F=$_POST['imagen'];


    $conx = mysqli_connect ('localhost', 'root', 'toor2022','notiweb');
    $sql="INSERT INTO noticias (titulo, autor, cuerpo, categoria, fecha, imagen)
        VALUE ('{$A}','{$B}','{$C}','{$D}','{$E}','{$F}')";
        $result=mysqli_query($conx, $sql);
    echo "<meta http-equiv='refresh' content='1; url=baja_noticia.php'>";

}
/*include"cabecera.php";
    echo"<div>Menú: </div>";
    echo"<div><a href='agregar_noticia.php'>Agregar Noticia</a></div>";
*/

?>


    <!--<form method='post'>
        Titulo: <input type="text" name='titulo' size='100'><br>
        Autor: <input type="text" name='autor' size='100'><br>
        Cuerpo: <input type='text' name='cuerpo' size='200'><br>
        Categoria: <input type="text" name='categoria' size='100'><br>
        Fecha: <input type="date" name='fecha' size='100'><br>
        Imagen: <input type="text" name='imagen' size='100'><br>
        <input type='submit' value='Guardar'>
    </form>-->
    <div class="form">
        <div class="title">
            <div>Agregar noticia</div>
            <div>
                <a href="baja_noticia.php"><button class="return" type='submit'><i
                            class="fa-sharp fa-solid fa-arrow-left"></i></button></a>
            </div>
        </div>
        <div class="subtitle">Por favor ingrese los datos de la noticia</div>
        <form method='post'>
            <div class="input-container ic1">
                <input id="titulo" class="input" type="text" name='titulo' <?php if(isset($A))?> placeholder=" " />
                <div class="cut"></div>
                <label for="titulo" class="placeholder">Titulo</label>
            </div>
            <div class="input-container ic2">
                <input id="autor" class="input" type="text" name='autor' <?php if(isset($B))?> placeholder=" " />
                <div class="cut cut-short"></div>
                <label for="autor" class="placeholder">Autor</>
            </div>
            <div class="input-container ic3">
                <input id="cuerpo" class="input" type="text" name='cuerpo' <?php if(isset($C))?> placeholder=" " />
                <div class="cut cut-short"></div>
                <label for="cuerpo" class="placeholder">Cuerpo</>
            </div>
            <div class="input-container ic4">
                <input id="categoria" class="input" type="text" name='categoria' <?php if(isset($D))?> placeholder=" "
                />
                <div class="cut cut-short"></div>
                <label for="categoria" class="placeholder">Categoria</>
            </div>
            <div class="input-container ic5">
                <input id="fecha" class="input" type="date" name='fecha' <?php if(isset($E))?> placeholder=" " />
                <div class="cut cut-short"></div>
                <label for="fecha" class="placeholder">Fecha</>
            </div>
            <div class="input-container ic6">
                <input id="imagen" class="input" type="text" name='imagen' <?php if(isset($F))?> placeholder=" " />
                <div class="cut cut-short"></div>
                <label for="imagen" class="placeholder">Imagen</>
            </div>


            <div class="input-container ic7">
                <input id="imagen" class="input"type="POST" name="imagen" enctype="multipart/formdata">
                <input type="file" name="imagen" />
                <div class="cut cut-short"></div>
                <label for="imagen" class="placeholder">Imagen</>
            </div>


            <input class="submit" type='submit' name='OK' value='Enviar'>

        </form>

        <?php

/*include("pie.php");*/
?>
</body>

</html>