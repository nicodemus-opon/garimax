<?php
session_start();
?>
<!--div>
    require 'mailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.garimax.co.ke';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'admin@garimax.co.ke';                 // SMTP username
    $mail->Password = 'Garimax11060';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    $mail->setFrom('admin@garimax.co.ke', 'Garimax Admin');
    $mail->addAddress('nicodemusopon@gmail.com');

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Verify your email address';
    $mail->Body = 'Please verify your email address  <b><br><a href="/hui"> Click Here to verify</a></b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
    echo 'Message has been sent';
    }

</div-->
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
    <div class="full-page login-page section-image" filter-color="black" data-image="assets/img/"
         style="background-image: url('../assets/img/bgk.jpg');">
        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
        <div class="page-header-image" data-parallax="true"
             style="background-image: url('../assets/img/bgk.jpg');"></div>
        <div class="content">
            <div class="container">
                <div class="col-md-4 ml-auto mr-auto">
                    <?php
                    if (!empty($_GET)) {
                        //verify code
                        echo '';

                    } else {
                        if (!empty($_POST)) {
                            $six_digit_random_number = mt_rand(100000, 999999);
                            $namex = $_POST['emailx'];
                            $passx = $_POST['passx'];
                            $confirm = substr($_POST['emailx'], -13);
                            //print $confirm;
                            if ($confirm == 'garimax.co.ke') {
                                echo '
                        <form class="form" method="get" action="verify.php">
                        <div class="card card-login card-plain">
                            <div class="card-header ">
                                <div class="logo-containerx text-center">
                                    <!--img src="../assets/img/favicon.png" alt=""-->
                                    <img src="../assets/img/favicon.png" alt="Circle Image" style="height:180px;width:180px;" class="rounded-circle">
                                </div>

                            </div>

                            <div class="card-body ">

                                <p class="text-white">Enter Verification sent to <b>' . $namex . ' </b></p>
                                <div class="input-group no-border form-control-lg">
                                <span class="input-group-prepend">
                                  <div class="input-group-text">
                                    <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                  </div>
                                </span>
                                    <input type="text" class="form-control" placeholder="enter verification code">
                                </div>

                                <input type="submit" id="message" value="Verify Key" class="btn btn-neutral btn-round btn-lg btn-block mb-3">



                            </div>


                            <div class="card-footer ">

                            </div>

                        </div>


                    </form>
                        ';
                            } else {
                                echo '<form class="form" method="" action="">
                        <div class="card card-login card-plain">
                            <div class="card-header ">
                                <div class="logo-containerx text-center">
                                    <!--img src="../assets/img/favicon.png" alt=""-->
                                    <img src="../assets/img/favicon.png" alt="Circle Image" style="height:180px;width:180px;" class="rounded-circle">
                                </div>

                            </div>

                            <div class="card-body ">

                                <p class="text-white">This email  <b>' . $namex . ' </b> is not a valid @garimax.co.ke email</p>
                                

                                <a  href="register.php"  class="btn btn-neutral btn-round btn-lg btn-block mb-3"> Return To Register</a>



                            </div>


                            <div class="card-footer ">

                            </div>

                        </div>


                    </form>';
                            }


                        }
                    }

                    ?>

                </div>
            </div>
        </div>

    </div>


</div>


<?php
include('include/end.php');

?>
