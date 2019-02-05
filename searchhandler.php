<?php
$c=$_POST["catx"];
$s=$_POST["searchx"];
$p=$_POST["pricex"];
$ty="Location:browse.php?q=".$c." ".$s." ".$p." ";
header($ty)
?>