<?php
if (isset($_SESSION['namex']) && !empty($_SESSION['namex'])) {
    require '../includes/connect.php';
//http://localhost/garimax/dashboard/?title=&shortdesc=&price=&category=&specs=&imgs=img13.jpeg&imgs=img17.jpeg
    $ti = $_GET['id'];


    $sql = 'DELETE FROM `cars` WHERE idx="' . $ti . '"';


    if ($con->query($sql) === true) {

    } else {

    }
    $pp = "vehicles/" . $ti . "/*";
//echo $pp;
    $files = glob($pp);
    foreach ($files as $file) {
        if (is_file($file))
            unlink($file);
    }

    header("Location:cars.php");
    exit();
} else {
    echo "<script type='text/javascript'> document.location = 'logout.php'; </script>";
}


?>