<?php
include('include/head.php');

?>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <a class="navbar-brand" href="login.php">Garimax Login</a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navigation">

        </div>
    </div>
</nav>
<!-- End Navbar -->


<div class="wrapper wrapper-full-page ">
    <div class="full-page login-page section-image" filter-color="black" data-image="assets/img/" style="background-image: url('../assets/img/bgk.jpg');">
        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
        <div class="page-header-image" data-parallax="true" style="background-image: url('../assets/img/bgk.jpg');"></div>
        <div class="content">
            <div class="container">
                <div class="col-md-4 ml-auto mr-auto">
                    <form class="form" method="" action="">


                        <div class="card card-login card-plain">

                            <div class="card-header ">
                                <div class="logo-containerx text-center">
                                    <!--img src="../assets/img/favicon.png" alt=""-->
                                    <img src="../assets/img/favicon.png" alt="Circle Image" style="height:180px;width:180px;" class="rounded-circle">
                                </div>
                            </div>

                            <div class="card-body ">


                                <div class="input-group no-border form-control-lg">
                                <span class="input-group-prepend">
                                  <div class="input-group-text">
                                    <i class="now-ui-icons users_circle-08"></i>
                                  </div>
                                </span>
                                    <input type="email" class="form-control" placeholder="email">
                                </div>

                                <div class="input-group no-border form-control-lg">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="now-ui-icons text_caps-small"></i>
                                        </div>
                                    </div>
                                    <input type="password" placeholder="password" class="form-control">
                                </div>


                            </div>


                            <div class="card-footer ">
                                <a href="register.php" class="btn btn-neutral btn-round btn-lg btn-block mb-3">Get Started</a>
                                <div class="pull-left">
                                    <h6><a href="register.php" class="link footer-link">Create Account</a></h6>
                                </div>

                                <div class="pull-right">
                                    <h6><a href="#pablo" class="link footer-link">Need Help?</a></h6>
                                </div>
                            </div>

                        </div>


                    </form>
                </div>
            </div>
        </div>

    </div>


</div>


<?php
include('include/end.php');

?>

