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
        $myid=intval($_GET['id']);
        $sql="select * from noticias Where id={$myid}";
        $result = mysqli_query($con, $sql);
        while($r = mysqli_fetch_assoc($result))
        {
           
            $myid=intval($_GET['id']);
            $sql="select * from noticias Where id={$myid}";
    ?>

                <div>
                    <div> <img class="image" height='400' src="noticias/<?php echo $r['Imagen']?>"></div>
                </div>
                <div>
                    <h2 class="title" > <?php echo $r['Titulo'] ?> </h2>
                    <div> <?php echo $r['Nombre'] ?></div>
                    <p class="text"> <?php echo $r['Cuerpo'] ?></p>

                </div>

            </div>
                
            <?php
        }
                include('pie.php');
            ?>
</body>
</html>



    