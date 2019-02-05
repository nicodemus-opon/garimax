<?php
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 2019-01-04
 * Time: 10:27
 */ ?>
<?php
include('includes/head.php');
include('includes/navbar.php');
include('includes/connect.php');
?>
<div class="main">
    <div class="section">
        <div class="container">
            <h4 class="section-title">Browse Cars</h4>
            <!--div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="form-group input-group-lg " style="padding-top: 10px">

                            <input type="text" placeholder="Search Text..." class="form-control"
                                   autocomplete="current-password"/>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <input type="submit" class="btn btn-primary btn-block btn-round btn-lg" value="Search"
                               autocomplete=""/>
                    </div>
                    <div class="col-1h">
                    </div>
                </div>
            </div-->

            <div class="row">
                <div class="col-md-3">
                    <div class="collapse-panel">

                            <div class="card card-refine card-plain">
                                <h4 class="card-title">
                                    Refine
                                    <button class="btn btn-default btn-icon btn-primary pull-right" rel="tooltip"
                                            title="Reset Filter">
                                        <i class="ui-1_zoom-bold now-ui-icons"></i>
                                    </button>
                                </h4>


                                <!--div id="collapseOne" class="collapse show" role="tabpanel"
                                     aria-labelledby="headingOne">
                                    <div class="card-body">
                                        <span id="price-left" class="price-left pull-left"
                                              data-currency="&euro;">100</span>
                                        <span id="price-right" class="price-right pull-right"
                                              data-currency="&euro;">850</span>
                                        <div class="clearfix"></div>
                                        <div id="sliderRefine" class="slider slider-refine"></div>
                                    </div>
                                </div-->

                            <div class="card card-refine card-plain">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <h6>
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                           href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Category

                                            <i class="now-ui-icons arrows-1_minimal-down"></i>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body">
                                        <?php

                                        // Create connectionhjh
                                        //echo "Connected successfully";
                                        $sql = "select * from categories where namex is not NULL ";
                                        //echo $sql;
                                        $result = $con->query($sql);
                                        if ($result->num_rows > 0) {

                                            while ($row = $result->fetch_assoc()) {
                                                echo ' <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-sign"></span>' . $row["namex"] . '
                                                
                                            </label>
                                        </div>';
                                            }

                                        } else {
                                            echo "Error: " . $sql . "<br>" . $con->error;
                                        }

                                        ?>


                                    </div>
                                </div>
                            </div>
                            <div class="card card-refine card-plain">
                                <div class="card-header" role="tab" id="headingfour">
                                    <h6>
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                           href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                            Colour

                                            <i class="now-ui-icons arrows-1_minimal-down"></i>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapsefour" class="collapse" role="tabpanel" aria-labelledby="headingfour">
                                    <div class="card-body">

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-sign"></span>
                                                Black
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-sign"></span>
                                                Blue
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-sign"></span>
                                                Brown
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-sign"></span>
                                                Gray
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-sign"></span>
                                                Green
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-sign"></span>
                                                Purple
                                            </label>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="row">

                        <?php

                        //require_once "includes/connect.php";
                        // Create connectionhjh
                        //echo "Connected successfully";
                        if (isset($_GET['q'])) {
                            $mmi=trim($_GET['q']);
                            $yu = implode("|",explode(" ", $mmi));
                            //print($yu);
                            }else{
                            $yu = " ";
                        }
                        $sql = "SELECT * FROM cars WHERE searchx REGEXP '".$yu."'";
                        //echo $sql;
                        $result = $con->query($sql);
                        if ($result->num_rows > 0) {
                            echo '';
                            while ($row = $result->fetch_assoc()) {
                                echo '<div class="col-md-6">

                            <div class="card card-background hvr-float" style="background-image: url(\'dashboard/vehicles/' . $row["idx"] . '/' . $row["display"] . '\')">

                                <div class="card-body">
                                    <div class="card-title text-left">
                                        <h3>' . $row["titlex"] . '</h3>
                                        <h7>' . $row["descx"] . '</h7>
                                    </div>

                                    <div class="card-footer text-left">
                                        <div class="stats">
											<span>
												<i class="now-ui-icons business_money-coins"></i>' . $row["pricex"] . '
											</span>


                                        </div>

                                        <div class="stats-link pull-right">
                                            <a href="product.php?q=' . $row["idx"] . '" class="footer-link">View this car </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';

                            }
                        }else{
                            echo '<div class="col-md-12 ml-auto mr-auto">
                            <h4 class="title">Not available </h4>

                            <br>
                            <div class="card card-plain card-blog">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <img class="img " src="assets/mi.png">
                                        </div>
                                    </div>
                                    <div class="col-md-7">

                                        <h5 class="card-title">
                                            could not find any cars similar to <em> '.$_GET["q"].' </em>
                                        </h5>
                                        <h7>Feel free to: </h7>
                                        <p class="card-description">
                                        <div class="card">
                                            <ul class="list-group list-group-flush">
                                                <a class="list-group-item  footer-link stats-link text-black"
                                                   href="tel:0733626262">Call us at 0733626262 to inquire for similar cars</a>
                                                <a class="footer-link list-group-item stats-link text-black"
                                                   href="index.php#contactx">send us an email to sales@garimax.co.ke</a>
                                                <a class="footer-link list-group-item stats-link text-black"
                                                   href="browse.php">View other cars</a>
                                            </ul>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>';
                        } ?>



                        <!--div class="col-md-3 ml-auto mr-auto">
                            <button rel="tooltip" class="btn btn-primary btn-block btn-round">Load more...</button>
                        </div-->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- section -->
    <?php
    include('includes/footer.php');

    ?>

</div>


<?php
include('includes/end.php');

?>
<script>
    $(document).ready(function () {

        $("nav").removeClass("navbar-transparent ");

        $("nav").removeAttr("color-on-scroll")
        $(".ccc").removeClass("btn-neutral ");
        $(".ccc").addClass("btn-primary");
    });
</script>
<script>
    $(document).ready(function () {

        var slider2 = document.getElementById('sliderRefine');

        noUiSlider.create(slider2, {
            start: [42, 880],
            connect: true,
            range: {
                'min': [30],
                'max': [900]
            }
        });

        var limitFieldMin = document.getElementById('price-left');
        var limitFieldMax = document.getElementById('price-right');

        slider2.noUiSlider.on('update', function (values, handle) {
            if (handle) {
                limitFieldMax.innerHTML = $('#price-right').data('currency') + Math.round(values[handle]);
            } else {
                limitFieldMin.innerHTML = $('#price-left').data('currency') + Math.round(values[handle]);
            }
        });
    });
</script>