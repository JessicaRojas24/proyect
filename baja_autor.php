<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheddar News</title>
    <link rel="shortcut icon" href="noticias/C-Logo.png">
<link rel="stylesheet" href="tabla_autores.css">
<script src="https://kit.fontawesome.com/c49750f9a4.js" crossorigin="anonymous"></script>

<head>
  <script>
    function confirmar(){
    if(confirm("¿Esta seguro que desea eliminar el autor?"))
    {
        return true;
    }
        else
        return false;
    
}
    </script>
</head>
<body>
    
</body>
</html>
<?php
if(isset($_GET['id']))
{
$x=intval($_GET['id']);
$con=mysqli_connect('localhost','root','toor2022','notiweb');
$sql="delete from autores where ID={$x}";
$result = mysqli_query($con, $sql);
echo"<div>Se borró el registro</div>";
}

  
?>

<div class="table-title">
        <div>
            <h3>Tabla de Autores</h3>
        </div>
        <div>
            <a href='agregar_autor.php'><button class="submit" type='submit'><i class="fa-sharp fa-solid fa-plus"></i>
                    Agregar Autor</button></a>
        </div>
        <div>
            <a href='admin.php'><button class="submit" type='submit'><i class="fa-sharp fa-solid fa-arrow-left"></i>
                    Regresar</button></a>
        </div>
    </div>
    </div>
    <table class="table-fill">
        <thead>
            <tr>
                <th class="text-left">Autor</th>
                <th class="text-left">Correo</th>
                <th class="text-left">Borrar</th>
            </tr>
        </thead>
        <tbody class="table-hover">
            <tr>
                <?php

                $con = mysqli_connect('localhost', 'root', 'toor2022', 'notiweb');
                $sql = "select ID,Nombre,Correo from autores";
                $result = mysqli_query($con, $sql);

                while ($r = mysqli_fetch_assoc($result)) {
                ?>
            <tr>
                <?php echo "<td>{$r['Nombre']}  </td> "; 
                    echo "<td>{$r['Correo']}  </td> "
                ?>
                <td class='text-center'>
                    <div class='interior'>
                        <?php echo "
                                    <a href='?id={$r['ID']}' onClick='return confirmar()'><i class='fa-sharp fa-solid fa-trash'></i></a></div>"; ?>
                    </div>
                </td>
            </tr>
            <?php
                }
                ?>
            </tr>
        </tbody>
    </table>