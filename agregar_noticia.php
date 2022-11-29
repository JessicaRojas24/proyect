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

}
include"cabecera.php";
    echo"<div>Menú: </div>";
    echo"<div><a href='agregar_noticia.php'>Agregar Noticia</a></div>";


?>


<form method='post'>
    Titulo: <input type="text" name='titulo' size='100'><br>
    Autor: <input type="text" name='autor' size='100'><br>
    Cuerpo: <input type='text' name='cuerpo' size='200'><br>
    Categoria: <input type="text" name='categoria' size='100'><br>
    Fecha: <input type="date" name='fecha' size='100'><br>
    Imagen: <input type="text" name='imagen' size='100'><br>
<input type='submit' value='Guardar'>
    </form>

<?php
 #$conx = mysqli_connect ('localhost', 'root', 'toor2022','notiweb');
    #$sql="SELECT id, nombre FROM Autores";
    #$result=mysqli_query($conx, $sql);
    #echo"Autor:<select name='autor'>";
    #while($r=mysqli_fetch_assoc($result))
    #{
       # echo"<option value='{$r['id']}'>{$r['id']}"
    #}


include("pie.php");
?>