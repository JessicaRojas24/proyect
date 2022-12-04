<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheddar News</title>
    <link rel="shortcut icon" href="noticias/C-Logo.png">
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/c49750f9a4.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include('cabecera.php');
    ?>
    <div id="body_main">
        <?php
        $con = mysqli_connect('localhost', 'root', 'toor2022', 'notiweb');
        $myid = intval($_GET['id']);
        $sql = "select * from noticias Where id={$myid}";
        $result = mysqli_query($con, $sql);
        while ($r = mysqli_fetch_assoc($result)) {

            $myid = intval($_GET['id']);
            $sql = "select * from noticias Where id={$myid}";
        ?>
        <div>  
                <a href="baja_noticia.php" ><button class="return" type='submit'><i class="fa-sharp fa-solid fa-arrow-left"></i></button></a>
            </div>
        <div id="main_new">
            <div> <img class="image" height='400' src="noticias/<?php echo $r['Imagen'] ?>"></div>
                <h2 class="title">
                    <?php echo $r['Titulo'] ?>
                </h2>
                <div>
                    <?php echo $r['Nombre'] ?>
                </div>
                <p class="text">
                    <?php echo $r['Cuerpo'] ?>
                </p>
        </div>

        <?php
        }
        ?>
    </div>
    <?php include('pie.php'); ?>
</body>

</html>