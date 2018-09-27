<?php

           header('Content-type:text/html; charset=utf-8');

           $con = mysqli_connect("localhost","root","123456","cyxy");

           mysqli_query($con, "set names utf8");

           $id = $_GET['id'];

           $del = $con->query("delete from cycommerce where uid = '$id'");

           if ($del) {
                echo "<script> alert('删除成功咯') </script>";
            } else {
                echo "<script> alert('删除失败咯') </script>";
            }
            header('refresh:0.1;url=./admin.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  
<div id="Layer1" style="position:absolute; left:0px; top:0px; width:100%; height:100%">
<img src="images/bjcar.jpg" width="100%" height="100%"/>
</div>

</body>
</html>          
