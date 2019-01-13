<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 ?>
<?php
include('includes/head.php');
include('includes/navbar.php');
?>


<?php
require "includes/connect.php";
$dets=array();
$totals=array();
$sql = "select DISTINCT categoryx from cars ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    //echo '';
    while ($row = $result->fetch_assoc()) {
        $sqly = "select * from cars where categoryx='".$row["categoryx"]."' LIMIT 1";
        $resultx = $con->query($sqly);
        while ($rowx = $resultx->fetch_assoc()) {
            $dirr=$rowx["idx"].'/'.$rowx["display"];
            array_push($dets,$dirr);
        }
        $sq = "SELECT COUNT(idx) FROM cars where categoryx='".$row["categoryx"]."'";
        $resul = $con->query($sq);
        while ($ro = $resul->fetch_assoc()) {
            //print_r($ro);
            $di=$ro["COUNT(idx)"];
            array_push($totals,$di);
        }


    }
}
//print_r($dets);
?>


<div class="features-8 section-image" style="background-image: url('assets/img/bgk.jpg')">

    <div class="col-md-8 ml-auto mr-auto text-center">
        <h2 class="title">Browse By Categories</h2>
        <h4 class="description"> Based on body types</h4>
    </div>

    <div class="container">
        <div class="row">
            <?php

            // Create connectionhjh
            //echo "Connected successfully";
            $sql = "select DISTINCT categoryx from cars ";
            //echo $sql;
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
                echo '';
                $gg=0;
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-4">
                <div class="card  bg-transparent">
                    <div class="card-image">
                    <a href="browse.php?q='.$row["categoryx"].'">
                        <img src="dashboard/vehicles/'.$dets[$gg].'" class="rounded" alt="">
                        </a>
                    </div>
                    <div class="info text-center">
                    <h5>
                        <a href="browse.php?q='.$row["categoryx"].'" class="info-title text-white">' . $row["categoryx"] .' ('.$totals[$gg].')'. '</a>
                       </h5>
                    </div>
                </div>
            </div>';
                    $gg+=1;
                }
            } ?>




        </div>
    </div>
</div>

<?php
include('includes/end.php');

?>
