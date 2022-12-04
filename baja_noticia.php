<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheddar News</title>
    <link rel="shortcut icon" href="noticias/C-Logo.png">
<link rel="stylesheet" href="tablas.css">
<script src="https://kit.fontawesome.com/c49750f9a4.js" crossorigin="anonymous"></script>

<head>
    <script>
        function confirmar() {
            document.getElementById("open-modal");
            if (confirm("¿Esta seguro que desea eliminar?")) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>

<body>
    <?php
    if (isset($_GET['id'])) {
        $x = intval($_GET['id']);
        $con = mysqli_connect('localhost', 'root', 'toor2022', 'notiweb');
        $sql = "delete from noticias where ID={$x}";
        $result = mysqli_query($con, $sql);
        echo "<div>Se borró el registro</div>";
    }

    ?>
    <div class="table-title">
        <div>
            <h3>Tabla de noticias</h3>
        </div>
        <div>
            <a href='agregar_noticia.php'><button class="submit" type='submit'><i class="fa-sharp fa-solid fa-plus"></i>
                    Agregar Noticia</button></a>
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
                <th class="text-left">Titulo</th>
                <th class="text-left">Borrar</th>
            </tr>
        </thead>
        <tbody class="table-hover">
            <tr>
                <?php

                $con = mysqli_connect('localhost', 'root', 'toor2022', 'notiweb');
                $sql = "select ID,Titulo from noticias";
                $result = mysqli_query($con, $sql);

                while ($r = mysqli_fetch_assoc($result)) {
                ?>
            <tr>
                <?php echo "<td>{$r['Titulo']}  </td> "; ?>
                <td class='text-center'>
                    <div class='interior'>
                        <?php echo "
                                    <a href='?id={$r['ID']}' onClick='return confirmar()'><i class='fa-sharp fa-solid fa-trash'></i></a>"; ?>
                    </div>
                </td>
            </tr>
            <?php
                }
                ?>
            </tr>
        </tbody>
    </table>
    <!--fin de tabla-->

    <!--inicio de popup window-->
    <div class="interior">
        <a class="btn" id="puchame" href="#open-modal">👋 Basic CSS-Only Modal</a>
    </div>
    <div id="open-modal" class="modal-window">
        <div>
            <a href="#" title="Close" class="modal-close">Close</a>
            <h1>¿Eliminar?</h1>
            <div>¿Estas seguro que desea eliminar este registro?</div>
            <br>
            <div class="botones_de_confirmacion">
                <div>
                    <button onClick='return confirmar(true)'>
                        <?php echo "{$r['ID']}"; ?>
                    </button>
                </div>
                <div>
                    <button onClick='return confirmar(false)'></button>
                </div>
            </div>
        </div>
    </div>
    </div>



</body>

</html>