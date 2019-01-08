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
        <div class="page-header-image" data-parallax="true" style="background-image: url('cars/2.jpg');">
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
                                <img class="d-block img-raised" src="cars/1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-raised" src="cars/1.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-raised" src="cars/2.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-raised" src="cars/3.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
                            <button type="button" class="btn btn-primary btn-icon btn-round btn-sm" name="button">
                                <i class="now-ui-icons arrows-1_minimal-left"></i>
                            </button>
                        </a>
                        <a class="carousel-control-next" href ="#productCarousel" role="button" data-slide="next">
                            <button type="button" class="btn btn-primary btn-icon btn-round btn-sm" name="button">
                                <i class="now-ui-icons arrows-1_minimal-right"></i>
                            </button>
                        </a>
                    </div>

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
                                    Specifications

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
                                    Additional Information

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
                    <div class="row justify-content-end">
                        <button class="btn btn-primary mr-3">Request This Car &nbsp;<i
                                    class="now-ui-icons arrows-1_minimal-right"></i></button>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<?php
include('includes/end.php');

?>




