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
?>
<div class="main">
    <div class="section">
        <div class="container">
            <h2 class="section-title">Find what you need</h2>
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <input type="submit"  class="btn btn-primary btn-block"
                               autocomplete="current-password"/>
                    </div>
                    <div class="col-9">
                        <div class="form-group input-group-lg ">
                            <!--div class="input-group-prepend ">
                                                <div class="input-group-text"><i class="now-ui-icons ui-1_zoom-bold"></i></div>
                                            </div-->
                            <input type="text" placeholder="Search cars..." class="form-control"
                                   autocomplete="current-password"/>
                        </div>
                    </div>
                    <div class="col-1h">

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="collapse-panel">
                        <div class="card-body">
                            <div class="card card-refine card-plain">
                                <h4 class="card-title">
                                    Refine
                                    <button class="btn btn-default btn-icon btn-neutral pull-right" rel="tooltip"
                                            title="Reset Filter">
                                        <i class="arrows-1_refresh-69 now-ui-icons"></i>
                                    </button>
                                </h4>
                                <div class="card-header" role="tab" id="headingOne">
                                    <h6 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                           aria-expanded="true" aria-controls="collapseOne">
                                            Price Range

                                            <i class="now-ui-icons arrows-1_minimal-down"></i>
                                        </a>
                                    </h6>
                                </div>

                                <div id="collapseOne" class="collapse show" role="tabpanel"
                                     aria-labelledby="headingOne">
                                    <div class="card-body">
                                        <span id="price-left" class="price-left pull-left"
                                              data-currency="&euro;">100</span>
                                        <span id="price-right" class="price-right pull-right"
                                              data-currency="&euro;">850</span>
                                        <div class="clearfix"></div>
                                        <div id="sliderRefine" class="slider slider-refine"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-refine card-plain">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <h6>
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                           href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Clothing

                                            <i class="now-ui-icons arrows-1_minimal-down"></i>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body">

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <span class="form-check-sign"></span>
                                                Casual Shirts
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-sign"></span>
                                                Formal Shirts
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <span class="form-check-sign"></span>
                                                Jeans
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-sign"></span>
                                                Polos
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <span class="form-check-sign"></span>
                                                Pijamas
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-sign"></span>
                                                Shorts
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-sign"></span>
                                                Blazers
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-refine card-plain">
                                <div class="card-header" role="tab" id="headingThree">
                                    <h6>
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                           href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Designer

                                            <i class="now-ui-icons arrows-1_minimal-down"></i>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-sign"></span>
                                                All
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-sign"></span>
                                                Polo Ralph Lauren
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-sign"></span>
                                                Wooyoungmi
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-sign"></span>
                                                Alexander McQueen
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-sign"></span>
                                                Tom Ford
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-sign"></span>
                                                AMI
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-sign"></span>
                                                Berena
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-sign"></span>
                                                Thom Sweeney
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-sign"></span>
                                                Calvin Klein
                                            </label>
                                        </div>


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
                        <div class="col-lg-4 col-md-6">
                            <div class="card card-product card-plain">
                                <div class="card-image">
                                    <a href="#">
                                        <img src="assets/img/polo.jpg" alt="..."/>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="#">
                                        <h4 class="card-title">Polo Ralph Lauren</h4>
                                    </a>
                                    <p class="card-description">
                                        Impeccably tailored in Italy from lightweight navy wool.
                                    </p>
                                    <div class="card-footer">
                                        <div class="price-container">
                                            <span class="price"> &euro; 300</span>
                                        </div>

                                        <button class="btn btn-danger btn-neutral btn-icon btn-round pull-right"
                                                rel="tooltip" title="Remove from wishlist" data-placement="left">
                                            <i class="now-ui-icons ui-2_favourite-28"></i>
                                        </button>
                                    </div>
                                </div>
                            </div> <!-- end card -->
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="card card-product card-plain">
                                <div class="card-image">
                                    <a href="#">
                                        <img src="assets/img/tom-ford.jpg" alt="..."/>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="#">
                                        <h4 class="card-title">Tom Ford</h4>
                                    </a>
                                    <p class="card-description">
                                        Immaculate tailoring is TOM FORD's forte.
                                    </p>
                                    <div class="card-footer">
                                        <div class="price-container">
                                            <span class="price"> &euro; 879</span>
                                        </div>

                                        <button class="btn btn-neutral btn-icon btn-round pull-right" rel="tooltip"
                                                title="Add to wishlist" data-placement="left">
                                            <i class="now-ui-icons ui-2_favourite-28"></i>
                                        </button>
                                    </div>
                                </div>
                            </div> <!-- end card -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card card-product card-plain">
                                <div class="card-image">
                                    <a href="#">
                                        <img src="assets/img/wooyoungmi.jpg" alt="..."/>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="#">
                                        <h4 class="card-title">Wooyoungmi</h4>
                                    </a>
                                    <p class="card-description">
                                        Dark-grey slub wool, pintucked notch lapels.
                                    </p>
                                    <div class="card-footer">
                                        <div class="price-container">
                                            <span class="price">&euro; 555</span>
                                        </div>

                                        <button class="btn btn-neutral btn-icon btn-round pull-right" rel="tooltip"
                                                title="Add to wishlist" data-placement="left">
                                            <i class="now-ui-icons ui-2_favourite-28"></i>
                                        </button>
                                    </div>
                                </div>
                            </div> <!-- end card -->
                        </div>


                        <div class="col-lg-4 col-md-6">
                            <div class="card card-product card-plain">
                                <div class="card-image">
                                    <a href="#">
                                        <img src="assets/img/sweeney.jpg" alt="..."/>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="#">
                                        <h4 class="card-title">Thom Sweeney</h4>
                                    </a>
                                    <p class="card-description">
                                        It's made from lightweight grey wool woven.
                                    </p>
                                    <div class="card-footer">
                                        <div class="price-container">
                                            <span class="price"> &euro; 680</span>
                                        </div>

                                        <button class="btn btn-neutral btn-icon btn-round pull-right" rel="tooltip"
                                                title="Add to wishlist" data-placement="left">
                                            <i class="now-ui-icons ui-2_favourite-28"></i>
                                        </button>
                                    </div>
                                </div>
                            </div> <!-- end card -->
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="card card-product card-plain">
                                <div class="card-image">
                                    <a href="#">
                                        <img src="assets/img/kingsman.jpg" alt="..."/>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="#">
                                        <h4 class="card-title">Kingsman</h4>
                                    </a>
                                    <p class="card-description">
                                        Crafted from khaki cotton and fully canvassed.
                                    </p>
                                    <div class="card-footer">
                                        <div class="price-container">
                                            <span class="price"> &euro; 725</span>
                                        </div>

                                        <button class="btn btn-neutral btn-icon btn-round pull-right" rel="tooltip"
                                                title="Remove from wishlist" data-placement="left">
                                            <i class="now-ui-icons ui-2_favourite-28"></i>
                                        </button>
                                    </div>
                                </div>
                            </div> <!-- end card -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card card-product card-plain">
                                <div class="card-image">
                                    <a href="#">
                                        <img src="assets/img/boglioli.jpg" alt="..."/>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="#">
                                        <h4 class="card-title">Boglioli</h4>
                                    </a>
                                    <p class="card-description">
                                        Masterfully crafted in Northern Italy.
                                    </p>
                                    <div class="card-footer">
                                        <div class="price-container">
                                            <span class="price">&euro; 699</span>
                                        </div>

                                        <button class="btn btn-neutral btn-icon btn-round pull-right" rel="tooltip"
                                                title="Add to wishlist" data-placement="left">
                                            <i class="now-ui-icons ui-2_favourite-28"></i>
                                        </button>
                                    </div>
                                </div>
                            </div> <!-- end card -->
                        </div>
                        <div class="col-md-3 ml-auto mr-auto">
                            <button rel="tooltip" class="btn btn-primary btn-block btn-round">Load more...</button>
                        </div>
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