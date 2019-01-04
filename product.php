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
<div class="wrapper">
    <div class="page-header page-header-mini">
        <div class="page-header-image" data-parallax="true" style="background-image: url('../assets/img/pp-cov.jpg');">
        </div>
    </div>


    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-5">

                    <div id="productCarousel" class="carousel slide" data-ride="carousel" data-interval="8000">
                        <ol class="carousel-indicators">
                            <li data-target="#productCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#productCarousel" data-slide-to="1"></li>
                            <li data-target="#productCarousel" data-slide-to="2"></li>
                            <li data-target="#productCarousel" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-raised" src="../assets/img/pp-1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-raised" src="../assets/img/pp-2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-raised" src="../assets/img/pp-3.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-raised" src="../assets/img/pp-4.jpg" alt="Third slide">
                            </div>
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

                    <p class="blockquote blockquote-primary">
                        "And thank you for turning my personal jean jacket into a couture piece. Wear yours with
                        mirrored sunglasses on vacation."<br><br>
                        <small>Kanye West</small>
                    </p>

                </div>
                <div class="col-md-6 ml-auto mr-auto">
                    <h2 class="title"> Saint Laurent </h2>
                    <h5 class="category">Slim-Fit Leather Biker Jacket</h5>
                    <h2 class="main-price">$3,390</h2>

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
                                    <p>Eres' daring 'Grigri Fortune' swimsuit has the fit and coverage of a bikini in a
                                        one-piece silhouette. This fuchsia style is crafted from the label's sculpting
                                        peau douce fabric and has flattering cutouts through the torso and back. Wear
                                        yours with mirrored sunglasses on vacation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-plain">
                            <div class="card-header" role="tab" id="headingTwo">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                   aria-expanded="false" aria-controls="collapseTwo">
                                    Designer Information

                                    <i class="now-ui-icons arrows-1_minimal-down"></i>
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="card-body">
                                    <p>An infusion of West Coast cool and New York attitude, Rebecca Minkoff is
                                        synonymous with It girl style. Minkoff burst on the fashion scene with her
                                        best-selling 'Morning After Bag' and later expanded her offering with the
                                        Rebecca Minkoff Collection - a range of luxe city staples with a "downtown
                                        romantic" theme.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-plain">
                            <div class="card-header" role="tab" id="headingThree">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Details and Care

                                    <i class="now-ui-icons arrows-1_minimal-down"></i>
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="card-body">
                                    <ul>
                                        <li>Storm and midnight-blue stretch cotton-blend</li>
                                        <li>Notch lapels, functioning buttoned cuffs, two front flap pockets, single
                                            vent, internal pocket
                                        </li>
                                        <li>Two button fastening</li>
                                        <li>84% cotton, 14% nylon, 2% elastane</li>
                                        <li>Dry clean</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row pick-size">
                        <div class="col-lg-6 col-md-8 col-sm-6">
                            <label>Select color</label>
                            <select class="selectpicker" data-style="select-with-transition btn btn-block"
                                    data-size="7">
                                <option value="1">Black</option>
                                <option value="2">Gray</option>
                                <option value="3">White</option>
                            </select>
                        </div>
                        <div class="col-lg-6 col-md-8 col-sm-6">
                            <label>Select size</label>
                            <select class="selectpicker" data-style="select-with-transition btn btn-block"
                                    data-size="7">
                                <option value="1">Small</option>
                                <option value="2">Medium</option>
                                <option value="3">Large</option>
                            </select>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <button class="btn btn-primary mr-3">Add to Cart &nbsp;<i
                                    class="now-ui-icons shopping_cart-simple"></i></button>
                    </div>
                </div>
            </div>

            <div class="features-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto text-center">
                            <h2 class="title">Not convinced yet!</h2>
                            <h4 class="description">Havenly is a convenient, personal and affordable way to redecorate
                                your home room by room. Collaborate with our professional interior designers on our
                                online platform. </h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-background card-raised" data-background-color
                                 style="background-image: url('../assets/img/bg24.jpg')">
                                <div class="info">
                                    <div class="icon icon-white">
                                        <i class="now-ui-icons shopping_delivery-fast"></i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">1 Day Delivery </h4>
                                        <p>Divide details about your product or agency work into parts. Write a few
                                            lines about each one. A paragraph describing a feature will be enough.</p>
                                        <a href="#pablo" class="ml-3">Find more...</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card card-background card-raised" data-background-color
                                 style="background-image: url('../assets/img/bg28.jpg')">
                                <div class="info">
                                    <div class="icon icon-white">
                                        <i class="now-ui-icons business_badge"></i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Refund Policy</h4>
                                        <p>Divide details about your product or agency work into parts. Write a few
                                            lines about each one. Very good refund policy just for you.</p>
                                        <a href="#pablo">Find more...</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card card-background card-raised" data-background-color
                                 style="background-image: url('../assets/img/bg25.jpg')">
                                <div class="info">

                                    <div class="icon">
                                        <i class="now-ui-icons ui-2_favourite-28"></i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Popular Item</h4>
                                        <p>Share a floor plan, and we'll create a visualization of your room. A
                                            paragraph describing a feature will be enough. This is a popular item for
                                            you.</p>
                                        <a href="#pablo" class="ml-3">Find more...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>
<?php
include('includes/end.php');

?>




