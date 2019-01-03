<?php
include('includes/head.php');
include('includes/navbar.php');
?>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->


<div class="wrapper">
    <div class="page-header header-filter">
        <div class="page-header-image" style="background-image: url('assets/img/bgk.jpg');"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <img src="assets/img/favicon.png" alt="Circle Image" style="height:180px;width:180px;" class="rounded-circle">
                    <h1 class="title"> You should be here!</h1>
                    <h4 class="description">5,000 capacity venue, holding some of the latest technology lighting with a
                        24 colour laser system Amnesia is one of the islands most legendary clubs.</h4>
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
                                                <option class="text-primary" value="1">Category</option>
                                                <option class="text-primary" value="2">Foobar</option>
                                                <option class="text-primary" value="3">Is great</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-2" style="padding-top: 20px">
                                        <div class="form-group">

                                            <select class="selectpickere form-control form-control-lg text-primarys "
                                                    data-style="select-with-transition btn-primary btn-round"
                                                    title="Select Price Range" data-size="7">
                                                <option class="text-primary" value="1">Category</option>
                                                <option class="text-primary" value="2">Foobar</option>
                                                <option class="text-primary" value="3">Is great</option>
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
<div class="main">
    <div class="section">
        <div class="container">
            <h2 class="section-title">Find what you need</h2>
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
                            <button rel="tooltip" class="btn btn-primary btn-round">Load more...</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- section -->


    <div class="section">
        <div class="container">
            <h2 class="section-title">Latest Offers</h2>
            <div class="row">
                <div class="col-md-4">

                    <div class="card card-product card-plain">
                        <div class="card-image">
                            <img class="img rounded" src="assets/img/saint-laurent1.jpg"/>
                        </div>

                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#pablo">Saint Laurent</a>
                            </h4>
                            <p class="card-description">The structured shoulders and sleek detailing ensure a sharp
                                silhouette. Team it with a silk pocket square and leather loafers.</p>
                            <div class="card-footer">
                                <div class="price-container">
                                    <span class="price price-old"> &euro;1,430</span>
                                    <span class="price price-new"> &euro;743</span>
                                </div>
                                <div class="stats stats-right">
                                    <button type="button" rel="tooltip" title="" class="btn btn-icon btn-neutral"
                                            data-original-title="Saved to Wishlist">
                                        <i class="now-ui-icons ui-2_favourite-28"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">

                    <div class="card card-product card-plain">
                        <div class="card-image">
                            <img class="img rounded" src="assets/img/saint-laurent.jpg"/>
                        </div>

                        <div class="card-body">
                            <h4 class="card-title">
                                <h4 class="card-title">Saint Laurent</h4>
                            </h4>
                            <p class="card-description">The structured shoulders and sleek detailing ensure a sharp
                                silhouette. Team it with a silk pocket square and leather loafers.</p>
                            <div class="card-footer">
                                <div class="price-container">
                                    <span class="price price-old"> &euro;1,430</span>
                                    <span class="price price-new">&euro;743</span>
                                </div>
                                <div class="stats stats-right">
                                    <button type="button" rel="tooltip" title="" class="btn btn-icon btn-neutral"
                                            data-original-title="Saved to Wishlist">
                                        <i class="now-ui-icons ui-2_favourite-28"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="card card-product card-plain">
                        <div class="card-image">
                            <img class="img rounded" src="assets/img/gucci.jpg"/>
                        </div>

                        <div class="card-body">
                            <h4 class="card-title">
                                <h4 class="card-title">Gucci</h4>
                            </h4>
                            <p class="card-description">The smooth woven-wool is water resistant to ensure you stay
                                pristine after a long-haul flight. Cut in a trim yet comfortable regular fit.</p>
                            <div class="card-footer">
                                <div class="price-container">
                                    <span class="price price-old"> &euro;2,430</span>
                                    <span class="price price-new">&euro;890</span>
                                </div>
                                <div class="stats stats-right">
                                    <button type="button" rel="tooltip" title=""
                                            class="btn btn-icon btn-neutral btn-default"
                                            data-original-title="Add to Wishlist">
                                        <i class="now-ui-icons ui-2_favourite-28"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div><!-- section -->


    <div class="contactus-1 section-image" style="background-image: url('assets/img/contact1.jpg')">

        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h2 class="title">Get in Touch</h2>
                    <h4 class="description">You need more information? Check what other persons are saying about our product. They are very happy with their purchase.</h4>
                    <div class="info info-horizontal">
                        <div class="icon icon-primary">
                            <i class="now-ui-icons location_pin"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Find us at the office</h4>
                            <p class="description"> Bld Mihail Kogalniceanu, nr. 8,<br>
                                7652 Bucharest,<br>
                                Romania
                            </p>
                        </div>
                    </div>
                    <div class="info info-horizontal">
                        <div class="icon icon-primary">
                            <i class="now-ui-icons tech_mobile"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Give us a ring</h4>
                            <p class="description"> Michael Jordan<br>
                                +40 762 321 762<br>
                                Mon - Fri, 8:00-22:00
                            </p>
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
                                                <span class="input-group-text"><i class="now-ui-icons users_circle-08"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="First Name..." aria-label="First Name..." autocomplete="given-name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-2">
                                        <div class="form-group">
                                            <label>Last name</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="now-ui-icons text_caps-small"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Last Name..." aria-label="Last Name..." autocomplete="family-name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="now-ui-icons ui-1_email-85"></i></span>
                                        </div>
                                        <input type="email" class="form-control" placeholder="Email Here..." autocomplete="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Your message</label>
                                    <textarea name="message" class="form-control" id="message" rows="6"></textarea>
                                </div>

                                <div class="row">

                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-round btn-block pull-right">Send Message</button>
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


</div>


<?php
include('includes/end.php');

?>

