<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
include('includes/head.php');
include('includes/navbar.php');
$files = scandir("assets/bgs");
//print_r($files);
$rr = mt_rand(3, 6);
//echo $files[$rr];
include "includes/connect.php";
$dets = array();
$totals = array();
$sql = "select DISTINCT categoryx from cars ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    //echo '';
    while ($row = $result->fetch_assoc()) {
        $sqly = "select * from cars where categoryx='" . $row["categoryx"] . "' LIMIT 1";
        $resultx = $con->query($sqly);
        while ($rowx = $resultx->fetch_assoc()) {
            $dirr = $rowx["idx"] . '/' . $rowx["display"];
            array_push($dets, $dirr);
        }
        $sq = "SELECT COUNT(idx) FROM cars where categoryx='" . $row["categoryx"] . "'";
        $resul = $con->query($sq);
        while ($ro = $resul->fetch_assoc()) {
            //print_r($ro);
            $di = $ro["COUNT(idx)"];
            array_push($totals, $di);
        }

    }
}
?>
<meta property="og:image" content="assets/img/favicon.png">
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="wrapper">
    <div class="page-header header-filter">
        <div class="page-header-image" data-parallax="true" tadoe="assets/img/bg3.jpg"
             style="background-image: url('<?php echo "assets/bgs/" . $files[$rr]; ?>');"></div>
        <div class="container">
            <div class="row" style="padding-top: 20px">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <img src="assets/img/favicon.png" alt="Circle Image" style="height:180px;width:180px;"
                         class="rounded-circle">
                    <h3 class="title"> Garimax Motors <br> Find the appropriate car for you</h3>
                    <h5 class="description">Explore the vast model range of new and used cars by
                        widely known manufacturers on our website.
                    </h5>
                </div>
                <div class="col-md-10 ml-auto mr-auto">
                    <div class="card card-raised card-form-horizontal card-plain" data-background-color>
                        <div class="card-body">
                            <form method="" action="">
                                <div class="row">
                                    <div class="col-md-2" style="padding-top: 20px">
                                        <div class="form-group">
                                            <select class="selectpickers form-control form-control-lg text-primarys"
                                                    data-style="select-with-transition btn-primary btn-round"
                                                    title="Select Category" data-size="7">
                                                <option class="text-primary" value="1">Category (Body Type)</option>
                                                <option class="text-primary" value="2">Saloons</option>
                                                <option class="text-primary" value="3">Wagons</option>
                                                <option class="text-primary" value="3">Vans</option>
                                                <option class="text-primary" value="3">Pick Ups</option>
                                                <option class="text-primary" value="3">4x4</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-2" style="padding-top: 20px">
                                        <div class="form-group">

                                            <select class="selectpickere form-control form-control-lg text-primarys "
                                                    data-style="select-with-transition btn-primary btn-round"
                                                    title="Select Price Range" data-size="7">
                                                <option class="text-primary" value="1">Price Range(KSH 1000)</option>
                                                <option class="text-primary" value="2">100-500</option>
                                                <option class="text-primary" value="3">500-1000</option>
                                                <option class="text-primary" value="3">1000-1500</option>
                                                <option class="text-primary" value="3">1500-2000</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-8" style="padding-top: 20px">
                                        <div class="form-group input-group-lg ">
                                            <!--div class="input-group-prepend ">
                                                <div class="input-group-text"><i class="now-ui-icons ui-1_zoom-bold"></i></div>
                                            </div-->
                                            <input type="text" placeholder="Search cars..." class="form-control"
                                                   autocomplete="current-password"/>
                                        </div>
                                    </div>
                                    <!--div class="col-md-1">
                                        <button type="button" class="btn btn-primary btn-round btn-block">

                                                <i class="now-ui-icons ui-1_zoom-bold"></i>

                                        </button>
                                    </div-->
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
<div class="main" style="">

    <div class="section" style="">
        <div class="container">
            <h2 class="section-title ">Latest Offers</h2>
            <div class="row">
                <?php

                // Create connectionhjh
                //echo "Connected successfully";
                $sql = "select * from cars where idx is not NULL LIMIT 16";
                //echo $sql;
                $result = $con->query($sql);
                if ($result->num_rows > 0) {
                    echo '';
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="col-md-4 hvr-float">
<div data-aos="fade-up" " >
    <div class="card card-product card-plainx ">
        <!--div class="card-image"-->
         <a href="product.php?q=' . $row["idx"] . '">
            <img class="img rounded card-img-top " src="dashboard/vehicles/' . $row["idx"] . '/' . $row["display"] . '"/>
            </a>
        <!--/div-->

        <div class="card-body hvr-floatn">
            <h4 class="card-title">
                <a href="product.php?q=' . $row["idx"] . '">' . $row["titlex"] . '</a>
            </h4>
            <p class="card-description">' . $row["descx"] . '
            </p>
            ' . $row["specsx"] . '
            <div class="card-footer">
                <div class="price-container">

                    <span class="price price-new"> KSH. ' . $row["pricex"] . ' </span>
                </div>
                <div class="stats stats-right">
                    <a href="product.php?q=' . $row["idx"] . '" rel="tooltip" title="" class="btn  btn-icon btn-primary "
                            data-original-title="View This Car"> 
                        <i class="now-ui-icons arrows-1_minimal-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>';
                    }
                    echo '';
                } else {
                    //echo "Error: " . $sql . "<br>" . $con->error;
                    echo '';
                }
                $con->close();

                ?>


            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"><div data-aos="zoom-in-up"><h5>
                        <a href="browse.php"
                                             class="btn-block btn btn-round btn-primary btn-outline-primary"> view all
                            cars</a>
                    </h5></div></div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div><!-- section -->
    <div>
        <div class="container">

            <div class="row justify-content-centerw">
                <div class="col-md-5">
                    <div class="title ">
                        <h3>Manufacturer</h3>
                    </div>
                    <!--h7-->
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                    <!--/h7-->
                </div>
                <?php
                include "includes/connect.php";
                $sql = "select * from cars ORDER BY RAND() LIMIT 6;";
                $result = $con->query($sql);
                $arrmgs = [];
                $arrprice = [];
                $arrtxts = [];
                $arrlinks = [];
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $full = 'dashboard/vehicles/' . $row["idx"] . '/' . $row["display"];
                        $txts = $row["titlex"];
                        array_push($arrmgs, $full);
                        array_push($arrtxts, $txts);
                        array_push($arrprice, $row["pricex"]);
                        array_push($arrlinks, $row["idx"]);
                    }
                }
                ?>
                <div class="col-lg-7 col-md-12">
                    <div class="title ">
                        <h3>Recommended for You</h3>
                    </div>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="100">
                        <ol class="carousel-indicators">
                            <!--li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li-->
                            <?php
                            $s = 0;
                            foreach ($arrtxts as $f) {
                                //echo $fi;
                                if ($y === 0) {
                                    echo '<li data-target="#carouselExampleIndicators" data-slide-to="' . $s . '" class="active"></li>';
                                } else {
                                    echo '<li data-target="#carouselExampleIndicators" data-slide-to="' . $s . '"></li>';
                                }
                                $s += 1;
                            }
                            ?>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <?php
                            $y = 0;
                            foreach ($arrtxts as $fi) {
                                if ($y === 0) {
                                    echo '<div class="carousel-item active card-background">
                                <img class="d-block" src="' . $arrmgs[$y] . '" alt="First slide">
                                <div class="carousel-caption  footer-link stats-link d-md-block">
                                <a href="product.php?q=' . $arrlinks[$y] . '" class="text-white">
                                    <h4>' . $arrtxts[$y] . '</h4>
                                    <span> <i class="now-ui-icons business_money-coins"></i>' . ' ' . $arrprice[$y] . '</span>
                                    </a>
                                    
                                </div>
                            </div>';
                                } else {
                                    echo '<div class="carousel-item card-background">
                                <img class="d-block" src="' . $arrmgs[$y] . '" alt="First slide">
                                <div class="carousel-caption d-md-block">
                                    <a href="product.php?q=' . $arrlinks[$y] . '" class="text-white">
                                    <h4>' . $arrtxts[$y] . '</h4>
                                    <span> <i class="now-ui-icons business_money-coins"></i>' . ' ' . $arrprice[$y] . '</span>
                                    </a>
                                </div>
                            </div>';
                                }
                                $y += 1;
                            }
                            ?>


                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                           data-slide="prev">
                            <i class="now-ui-icons arrows-1_minimal-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                           data-slide="next">
                            <i class="now-ui-icons arrows-1_minimal-right"></i>
                        </a>
                    </div>

                </div>

            </div>
        </div>
        <p></p>
        <p></p>
    </div>

    <div class="contactus-1 section-image" id="contactx"
         style="background-image: url('assets/img/bgk.jpg')">

        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h2 class="title">Get in Touch</h2>
                    <h4 class="description">You need more information?</h4>
                    <div data-aos="fade-up">
                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                                <i class="now-ui-icons location_pin"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Find us at </h4>
                                <p class="description"> Fortis Industrial park,<br>
                                    Warehouse 41 Chaddy road,Off Mombasa rd at Gateway mall<br>
                                    Syiokimau
                                </p>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up">
                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                                <i class="now-ui-icons tech_mobile"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Give us a ring</h4>
                                <p class="description"> Fred Dembah<br>
                                    0733626262<br>
                                    Mon - Fri, 8:00-22:00
                                </p>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up">
                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                                <i class="now-ui-icons ui-1_send"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Send us an Email</h4>
                                <p class="description"> info@garimax.co.ke<br>
                                    sales@garimax.co.ke<br>
                                    admin@garimax.co.ke
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 ml-auto mr-auto">

                    <div class="card card-contact card-raised">
                        <form role="form" id="contact-form1" method="post">
                            <div class="card-header text-center">
                                <h4 class="card-title">Contact Us</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 pr-2">
                                        <label>First name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                            class="now-ui-icons users_circle-08"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="First Name..."
                                                   aria-label="First Name..." autocomplete="given-name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-2">
                                        <div class="form-group">
                                            <label>Last name</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                                class="now-ui-icons text_caps-small"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Last Name..."
                                                       aria-label="Last Name..." autocomplete="family-name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                        class="now-ui-icons ui-1_email-85"></i></span>
                                        </div>
                                        <input type="email" class="form-control" placeholder="Email Here..."
                                               autocomplete="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Your message</label>
                                    <textarea name="message" class="form-control" id="message" rows="6"></textarea>
                                </div>

                                <div class="row">

                                    <div class="col-md-12">
                                        <button type="submit"
                                                class="btn btn-primary btn-round btn-block pull-right">
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> <!-- end-main-raised -->
<?php
include('includes/footer.php');

?>

<?php
include('includes/end.php');

?>


