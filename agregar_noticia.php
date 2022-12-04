<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheddar News</title>
    <link rel="shortcut icon" href="noticias/C-Logo.png">
    <link rel="stylesheet" href="noticia_style.css">
    <script src="https://kit.fontawesome.com/c49750f9a4.js" crossorigin="anonymous"></script>
    <script type="application/javascript">
        function cargar() {
            document.getElementById('imagen').onchange = function() {
                console.log(this.value);
                document.getElementById('archivo').innerHTML = this.value;
            }
        }
    </script>

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
    $F = $_FILES['imagen']['name'];
    $tamanoArchivo = $_FILES['imagen']['size'];
    $tipoArchivo = $_FILES['imagen']['type'];
    $conx = mysqli_connect ('localhost', 'root', 'toor2022','notiweb');

    $imagenSubida = fopen($_FILES['imagen']['tmp_name'], 'r');
    $binariosImagen = fread($imagenSubida, $tamanoArchivo);
    $binariosImagen = mysqli_escape_string($conx, $binariosImagen);    
    $sql="INSERT INTO noticias (titulo, autor, cuerpo, categoria, fecha, imagen, tipo)
        VALUE ('{$A}','{$B}','{$C}','{$D}','{$E}','{$binariosImagen}','{$tipoArchivo}')";
    $result=mysqli_query($conx, $sql);
    echo "<meta http-equiv='refresh' content='1; url=baja_noticia.php'>";

}
?>
    <div class="form">
        <div class="title">
            <div>Agregar noticia</div>
            <div>
                <a href="baja_noticia.php"><button class="return" type='submit'><i
                            class="fa-sharp fa-solid fa-arrow-left"></i></button></a>
            </div>
        </div>
        <div class="subtitle">Por favor ingrese los datos de la noticia</div>
        <form method='post' enctype="multipart/form-data">
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

            <div class="file-container">
                <div class="custom-input-file">
                    <input type="file" id="imagen" name="imagen" class="input-file" value="archivo" onclick="cargar()">
                    <label id="archivo" for="archivo" class="placeholder">Subir archivo...</>
                </div>
            </div>

            <input class="submit" type='submit' name='OK' value='Enviar'>

        </form>
    </div>
</body>

</html>