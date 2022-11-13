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
    ?>
    <div id="body_main">
        <?php
            $con=mysqli_connect('localhost','root','toor2022','notiweb');
            $sql="select * from noticias Where id=1";
            $result = mysqli_query($con, $sql);
            while($r = mysqli_fetch_assoc($result))
            {
                $sql="select * from noticias Where id=1";
        ?>
        <div id="main_new">
            <div> <img class="img_news" height='400' src="noticias/<?php echo $r['Imagen']?>"></div>
            <h2 class="title" > <?php echo $r['Titulo'] ?> </h2>
            <div> <?php echo $r['Nombre'] ?></div>
            <p class="text"> <?php echo $r['Cuerpo'] ?></p>

        </div>
        <?php
            }
        ?>
        <!--columnas de noticias y anuncios-->
        <div class="main_colums">
            <div id="news">
            <?php
                #include('cabecera.php');
                $con=mysqli_connect('localhost','root','toor2022','notiweb');
                $sql = "SELECT Titulo,Imagen,Nombre,noticias.id FROM noticias INNER JOIN autores ON noticias.autor=autores.id WHERE noticias.id >1 order by fecha desc LIMIT 0,10";
                $result = mysqli_query($con, $sql);
                while($r = mysqli_fetch_assoc($result))
                {
            ?>

                <div class="container">
                    <div>
                        <div> <img class="img_news" height='180' src="noticias/<?php echo $r['Imagen']?>"></div>
                    </div>
                    <div>
                        <div> <?php echo $r['Titulo'] ?> </div>
                        <div> <?php echo $r['Nombre'] ?></div>
                        <br>
                        <div> <?php echo "<a href='vernoticia.php?id={$r['id']}'> <button class='btn_Leer'>LEER NOTICIA </button></a>" ?></div>
                    </div>
                </div>   
            <?php
                }
            ?>
            </div>
            <div id="anuncios">
                <img class="img_news" src="https://lh3.googleusercontent.com/nupo3HWMIUeuul9r2IBSfpBo568bL-STG9nA71dUuW97DnhAXFgm2WWjczhTFqRHQZRf5VA-_PmxIZaIAXhOUrzfr5unPjFuW9za=w0" height="150px">
            </div>
        </div>

    <!--fin de div principal-->    
    </div>
    <?php
        include('pie.php');
    ?>
</body>
</html>
