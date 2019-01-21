<?php
require '../includes/connect.php';
//http://localhost/garimax/dashboard/?title=&shortdesc=&price=&category=&specs=&imgs=img13.jpeg&imgs=img17.jpeg
$ti = $_GET['id'];


//echo "categ is empty";
$sql = 'DELETE FROM `cars` WHERE idx="'.$ti.'"';

//echo $sql;
if ($con->query($sql) === true) {
    //echo 'socsesss';
} else {
    //echo 'uh-ooooh'.$con->error;
}
header("Location:cars.php");
exit();
?>