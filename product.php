<?php
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 2019-01-04
 * Time: 14:48
 */ ?>
<?php
include('includes/head.php');
include('includes/navbar.php');
?>

<?php
$ids = $_GET["q"];

include "includes/connect.php";

$sql = "SELECT * FROM cars WHERE idx='" . $ids . "'";

$result = $con->query($sql);
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $titlex = $row["titlex"];
        $descx = $row["descx"];
        $categoryx = $row["categoryx"];
        $pricex = $row["pricex"];
        $specsx = $row["specsx"];
        $display = $row["display"];

    }
}
$fulldir = $ids . '/' . $display;
$d = 'dashboard/vehicles/' . $ids;
//echo $d;
$files = scandir($d);
//print_r($files);
$urlr = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"
?>
<meta property="og:image" content="https://garimax/co.ke/dashboard/vehicles/<?php
echo $fulldir;
?>">
<div class="wrapper">
    <div class="page-header page-header-mini">
        <div class="page-header-image" data-parallax="true" style="background-image: url('dashboard/vehicles/<?php
        echo $fulldir;
        ?>');">
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div data-aos="fade-up">
                        <div id="productCarousel" class="carousel slide" data-ride="carousel" data-interval="100">
                            <ol class="carousel-indicators">
                                <?php
                                $s = 0;
                                foreach ($files as $f) {
                                    //echo $fi;
                                    if ($y === 2) {
                                        echo '<li data-target="#productCarousel" data-slide-to="' . $s . '" class="active"></li>';
                                    } else {
                                        echo '<li data-target="#productCarousel" data-slide-to="' . $s . '"></li>';
                                    }
                                    $s += 1;
                                }
                                ?>
                                <!--li data-target="#productCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#productCarousel" data-slide-to="1"></li>
                                <li data-target="#productCarousel" data-slide-to="2"></li>
                                <li data-target="#productCarousel" data-slide-to="3"></li-->
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <?php
                                $y = 0;
                                foreach ($files as $fi) {
                                    //echo $fi;
                                    if ($y < 2) {
                                        $y += 1;
                                        continue;
                                    }
                                    if ($y === 4) {
                                        echo '<div class="carousel-item active">
                                <img class="d-block img-raised" src="dashboard/vehicles/' . $ids . '/' . $fi . '" alt="First slide">
                            </div>';
                                    } else {
                                        echo '<div class="carousel-item ">
                                <img class="d-block img-raised" src="dashboard/vehicles/' . $ids . '/' . $fi . '" alt="First slide">
                            </div>';
                                    }
                                    $y += 1;
                                }
                                ?>


                            </div>
                            <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
                                <button type="button" class="btn btn-primary btn-icon btn-round btn-sm" name="button">
                                    <i class="now-ui-icons arrows-1_minimal-left"></i>
                                </button>
                            </a>
                            <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
                                <button type="button" class="btn btn-primary btn-icon btn-round btn-sm" name="button">
                                    <i class="now-ui-icons arrows-1_minimal-right"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 ml-auto mr-auto">

                    <h2 class="title"> <?php
                        echo $titlex;
                        ?> </h2>

                    <h5 class="category"><?php
                        echo $categoryx;
                        ?></h5>
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <h3 class="main-price">KSH. <?php
                            echo $pricex;
                            ?></h3>
                    </div>
                    <div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
                        <div class="card card-plain">
                            <div class="card-header" role="tab" id="headingOne">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                   aria-expanded="true" aria-controls="collapseOne">
                                    Description
                                    <i class="now-ui-icons arrows-1_minimal-down"></i>
                                </a>
                            </div>

                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                <div class="card-body">
                                    <p><?php
                                        echo $descx;
                                        ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-plain">
                            <div class="card-header" role="tab" id="headingTwo">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                   aria-expanded="false" aria-controls="collapseTwo">
                                    Specifications

                                    <i class="now-ui-icons arrows-1_minimal-down"></i>
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="card-body">
                                    <p><?php
                                        echo $specsx;
                                        ?></p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row justify-content-end">
                        <button class="btn btn-primary btn-simple mr-3" data-toggle="modal" data-target="#myModal">Share
                            Link for this Car &nbsp;<i
                                    class="now-ui-icons ui-1_send"></i></button>
                        <button class="btn btn-primary mr-3">Request This Car &nbsp;<i
                                    class="now-ui-icons arrows-1_minimal-right"></i></button>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <p>
        <h5 class="title">You Might Also Like</h5>
        </p>
        <div class="row">
            <?php
            $sql = "SELECT * FROM cars where idx <>'" . $ids . "' ORDER BY RAND() LIMIT 6;";
            //echo $sql;
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
                echo '';
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-4 hvr-float">
                <div class="card card-blog ">
                    <div class="card-image">
                    <a href="product.php?q=' . $row["idx"] . '">
                        <img class="img rounded" src="dashboard/vehicles/' . $row["idx"] . '/' . $row["display"] . '">
                       </a>
                    </div>
                    <div class="card-body">
                        <h6 class="category text-warning">
                            <i class="now-ui-icons business_bulb-63"></i>
                            Recommended
                        </h6>
                        <h5 class="card-title">
                            <a href="product.php?q=' . $row["idx"] . '">' . $row["titlex"] . '</a>
                        </h5>
                        <p class="card-description">
                            ' . $row["descx"] . '
                        </p>
                    </div>
                </div>
            </div>';

                }
            }
            ?>


        </div>
    </div>


</div>
<div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;"
     aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content ">
            <div class="modal-header justify-content-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                </button>
                <h4 class="title title-up">Share Link</h4>
            </div>
            <div class="modal-body">
                <p><input class="form-control" type="text"
                          placeholder="<?php echo $urlr;
                          ?>" readonly>
                </p>

                <div class="row">
                    <div class="col-4">
                        <div class="card card-profile card-plain">
                            <div class="card-avatar">
                                <a href="whatsapp://send?<?php echo $urlr;
                                ?>" data-action="share/whatsapp/share">

                                    <img class="img img-raised" src="assets/socicons/whatsapp.png">
                                    <h6 class="card-title">WhatsApp</h6>
                                </a>
                            </div>


                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card card-profile card-plain">
                            <div class="card-avatar">
                                <a href="http://www.facebook.com/sharer.php?s=100&p[title]=YOUR_TITLE&p[summary]=YOUR_SUMMARY&p[url]=YOUR_URL&p[images][0]=YOUR_IMAGE_TO_SHARE_OBJECT">
                                    <img class="img img-raised" src="assets/socicons/facebook.png">
                                    <h6 class="card-title">Facebook</h6>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card card-profile card-plain">
                            <div class="card-avatar">
                                <a href="#pablo">
                                    <img class="img img-raised" src="assets/socicons/telegram.png">
                                    <h6 class="card-title">Messaging</h6>
                                </a>
                            </div>


                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
<?php
include('includes/footer.php');

?>
<?php
include('includes/end.php');

?>




