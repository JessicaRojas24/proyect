<!DOCTYPE html>
<html lang="en">
<head>
  <script>
    function confirmar(){
    if(confirm("¿Esta seguro que desea eliminar?"))
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
$sql="delete from noticias where ID={$x}";
$result = mysqli_query($con, $sql);
echo"<div>Se borró el registro</div>";
}

$con=mysqli_connect('localhost','root','toor2022','notiweb');
$sql="select ID,Titulo from noticias";
$result = mysqli_query($con, $sql);

while($r = mysqli_fetch_assoc($result))
{
    

        
         echo "<div>{$r['Titulo']}  <a href='?id={$r['ID']}' onClick='return confirmar()'><img src='noticias/eliminar.png' height='24px'></a></div>";
              
    
}


                
?>