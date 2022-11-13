<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GodVandal</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
        include('cabecera.php');
        $con=mysqli_connect('localhost','root','toor2022','notiweb');
        $sql = "SELECT Titulo,Imagen,Nombre,noticias.id FROM noticias INNER JOIN autores ON noticias.autor=autores.id order by fecha desc LIMIT 0,10";
        $result = mysqli_query($con, $sql);
        while($r = mysqli_fetch_assoc($result))
        {
            echo "<div> <a href='vernoticia.php?id={$r['id']}'> LEER NOTICIA </a></div>";
    ?>

            <div class="container"> 
                <div>
                    <div> <img class="img_news" height='180' src="noticias/<?php echo $r['Imagen']?>"></div>
                </div>
                <div>
                    <div> <?php echo $r['Titulo'] ?> </div>
                    <div> <?php echo $r['Nombre'] ?></div>
                </div>

            </div>
                
            <?php
        }
                include('pie.php');
            ?>
</body>
</html>
