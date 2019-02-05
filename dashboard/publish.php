<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
require '../includes/connect.php';
//http://localhost/garimax/dashboard/?title=&shortdesc=&price=&category=&specs=&imgs=img13.jpeg&imgs=img17.jpeg
$title = $_POST['title'];
$shortdesc = $_POST['shortdesc'];
$category = $_POST['category'];
$specs = $_POST['specs'];
$price = $_POST['price'];
$display = $_POST['display'];

$files = array_filter($_FILES['upload']['name']); //something like that to be used before processing files.
//echo json_encode($_FILES);
// Count # of uploaded files in array
$total = count($_FILES['upload']['name']);
//echo $total;

/*
if ($_FILES['upload']) {
    echo 'awk';
    $file_ary = reArrayFiles($_FILES['ufile']);

    foreach ($file_ary as $file) {
        print 'File Name: ' . $file['name'];
        print 'File Type: ' . $file['type'];
        print 'File Size: ' . $file['size'];
    }
}else{
    echo 'psss';
}*/
$gy= mt_rand(000000, 999999);
$folder=$category."$gy";
//echo $folder;
// Loop through each file
for ($i = 0; $i < $total; $i++) {
    $dir = "vehicles/".$folder."/";
    //echo $dir;
    mkdir ($dir, 0755, true);
    $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

    if ($tmpFilePath != "") {
        //Setup our new file path
        $newFilePath = $dir."" . $_FILES['upload']['name'][$i];

        //Upload the file into the temp dir
        if (move_uploaded_file($tmpFilePath, $newFilePath)) {

            //Handle other code here

        }
    }
}
$id=$folder;
$ftt=$id . " " . $title . " " . $shortdesc ." " . $category ." " . $price ." " . $specs ." " .$display." ";
$sql = "insert into cars values ('" . $id . "','" . $title . "','" . $shortdesc ."','" . $category ."','" . $price ."','" . $specs ."','" .$display."','".$ftt."');";
//echo $sql;
if ($con->query($sql) === true) {
    //echo 'socsesss';
}else{
    //echo 'uh-ooooh';
}
header("Location:cars.php");
exit();
?>

