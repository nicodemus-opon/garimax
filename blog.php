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
?>
    <div class="mainn">
        <div class="sectionn">
            <div class="blogs-3 ">

                <div class="container">
                    <div class="row">

                        <div class="col-md-10 ml-auto mr-auto">
                            <h2 class="title">Our Blogposts</h2>

                            <br>
                            <div class="card card-plain card-blog">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card-image">
                                            <img class="img img-raised rounded"
                                                 src="assets/img/examples/card-blog10.jpg">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h3 class="card-title">
                                            <a href="#pablo">Rover raised $65 million for pet sitting</a>
                                        </h3>
                                        <p class="card-description">
                                            Finding temporary housing for your dog should be as easy as renting an
                                            Airbnb. That’s the idea behind Rover, which raised $65 million to expand its
                                            pet sitting and dog-walking businesses.. <a href="#pablo"> Read More </a>
                                        </p>

                                        <div class="author">
                                            <img src="assets/img/olivia.jpg" alt="..." class="avatar img-raised">
                                            <span>Katie Roof</span>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="card card-plain card-blog">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card-image">
                                            <a href="#pablo">
                                                <img class="img img-raised rounded"
                                                     src="assets/img/examples/card-blog11.jpg">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h3 class="card-title">
                                            <a href="#pablo">MateLabs mixes machine learning with IFTTT</a>
                                        </h3>
                                        <p class="card-description">
                                            If you’ve ever wanted to train a machine learning model and integrate it
                                            with IFTTT, you now can with a new offering from MateLabs. MateVerse, a
                                            platform where novices can spin out machine... <a href="#pablo"> Read
                                                More </a>
                                        </p>
                                        <div class="author">
                                            <img src="assets/img/james.jpg" alt="..." class="avatar img-raised">
                                            <span>John Mannes</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-plain card-blog">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card-image">
                                            <a href="#pablo">
                                                <img class="img img-raised rounded"
                                                     src="assets/img/examples/card-blog12.jpg">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h3 class="card-title">
                                            <a href="#pablo">US venture investment ticks up in Q2 2017</a>
                                        </h3>
                                        <p class="card-description">
                                            Venture investment in U.S. startups rose sequentially in the second quarter
                                            of 2017, boosted by large, late-stage financings and a few outsized
                                            early-stage rounds in tech and healthcare.. <a href="#pablo"> Read More </a>
                                        </p>
                                        <div class="author">
                                            <img src="assets/img/michael.jpg" alt="..." class="avatar img-raised">
                                            <span>Devin Coldewey</span>
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
include('includes/footer.php');

?>

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
