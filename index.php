<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheddar News</title>
    <link rel="shortcut icon" href="noticias/C-Logo.png">
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
            <h1 class="title" > <?php echo $r['Titulo'] ?> </h1>
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
                $sql = "SELECT Titulo,Imagen,Nombre,fecha,noticias.id FROM noticias INNER JOIN autores ON noticias.autor=autores.id WHERE noticias.id >1 order by fecha desc LIMIT 0,11";
                $result = mysqli_query($con, $sql);
                while($r = mysqli_fetch_assoc($result))
                {
            ?>

                <div class="container">
                    <div>
                        <div> <img class="img_news" height='180' src="noticias/<?php echo $r['Imagen']?>"></div>
                    </div>
                    <div>
                        <div class="titulo_noticia"> <?php echo $r['Titulo'] ?> </div>
                        <div class="noticia"> <?php echo $r['Nombre'] ?></div>
                        <div class="fecha"> <?php echo $r['fecha'] ?></div>
                        <br>
                        <div> <?php echo "<a href='vernoticia.php?id={$r['id']}'> <button class='btn_Leer'>LEER NOTICIA </button></a>" ?></div>
                    </div>
                </div>   
            <?php
                }
            ?>
            </div>
            <div id="anuncios">
                <div class="title_anuncios">Anuncios</div>
                <img class="img_news" src="https://as01.epimg.net/meristation/imagenes/2020/06/04/noticias/1591281373_841145_1591281661_noticia_normal.jpg" height="150px">
                <img class="img_news" src="https://e00-marca.uecdn.es/assets/multimedia/imagenes/2019/11/15/15738391629775.jpg" height="150px">
                <img class="img_news" src="https://www.oberlo.com/media/1624032423-anuncios-publicitarios-ejemplos-de-publicidad-recordatoria.png?fit=max&fm=jpg&w=1440" height="150px">
                <img class="img_news" src="https://www.sonoradecrear.com/wp-content/uploads/2022/02/proposito-de-los-anuncios-publicitarios.webp" height="175px">
                <img class="img_news" src="https://www.antevenio.com/wp-content/uploads/2020/10/desafiolegion.png" height="150px">
                <img class="img_news" src="https://blogdesuperheroes.es/wp-content/plugins/BdSGallery/BdSGaleria/65321.jpg" height="150px">
                <img class="img_news" src="https://cdn.marketingandweb.es/wp-content/uploads/ejemplo-anuncio-publicitario-snickers.jpg" height="150px" width="260px">
                <img class="img_news" src="https://quizizz.com/media/resource/gs/quizizz-media/quizzes/c2997833-61e0-4c05-bb77-955299282285" height="150px">
                <img class="img_news" src="https://www.lavozdelafrontera.com.mx/local/nyb6hz-deben-de-retirar-los-anuncios-publicitarios-a-favor-de-amlo/ALTERNATES/LANDSCAPE_1140/Deben%20de%20retirar%20los%20anuncios%20publicitarios%20a%20favor%20de%20AMLO" height="150px" width="260px">
                <img class="img_news" src="https://sites.google.com/site/anuncospub/_/rsrc/1529361062209/portada/Collage%20Publicidad%20fotos.jpg?height=224&width=400" height="150px">
                <img class="img_news" src="https://quizizz.com/media/resource/gs/quizizz-media/quizzes/c2997833-61e0-4c05-bb77-955299282285" height="150px">
            </div>
        </div>

    <!--fin de div principal-->    
    </div>
    <?php
        include('pie.php');
    ?>
</body>
</html>
