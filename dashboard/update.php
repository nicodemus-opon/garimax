<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
require '../includes/connect.php';
//http://localhost/garimax/dashboard/?title=&shortdesc=&price=&category=&specs=&imgs=img13.jpeg&imgs=img17.jpeg
$title = $_POST['title'];
$idd = $_POST['idd'];
$shortdesc = $_POST['shortdesc'];
$category = $_POST['category'];
$specs = $_POST['specs'];
$price = $_POST['price'];

if($category==="") {
    //echo "categ is empty";
    $sql = 'UPDATE `cars` SET `titlex`="' . $title . '",`descx`="' . $shortdesc . '",`pricex`="' . $price . '",`specsx`="' . $specs . '" WHERE idx="'.$idd.'"';
}else{
    //echo "categ is changed";
    $sql = 'UPDATE `cars` SET `titlex`="' . $title . '",`descx`="' . $shortdesc . '",`categoryx`="' . $category . '",`pricex`="' . $price . '",`specsx`="' . $specs . '" WHERE idx="'.$idd.'"';

}
//echo $sql;
if ($con->query($sql) === true) {
    //echo 'socsesss';
}else{
    //echo 'uh-ooooh'.$con->error;
}
//echo "<script type='text/javascript'> document.location = './'; </script>";
header("Location:cars.php");
exit();
?>