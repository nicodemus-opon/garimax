<?php
session_start();

?>

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
                        if ($_SESSION['ver'] == $_GET['q']) {
                            require '../includes/connect.php';
                            $sql = "insert into users values ('" . $_SESSION['nm'] . "','" . $_SESSION['nm'] . "','" . $_SESSION['ps'] . "','admin');";
                            //echo $sql;
                            if ($con->query($sql) === true) {
                                echo '<div class="alert alert-success" role="alert">
  Successfully Registered
</div>';
                                echo '<a href="login.php" class="btn btn-block btn-neutral btn-round btn-lg">Log In</a>';
                                session_destroy();
                                //header("Location:login.php");
                            } else {
                                echo '<div class="alert alert-primary" role="alert">
  UH-OH Could not register you
</div>';
                            }
                        } else {
                            echo '<div class="alert alert-primary" role="alert">
  UH-OH wrong verification code
</div>';
                        }
                        echo '';

                    } else {
                        if (!empty($_POST)) {
                            $six = mt_rand(100000, 999999);
                            //echo $six;
                            $_SESSION['ver']=$six;
                            $namex = $_POST['emailx'];
                            $passx = $_POST['passx'];
                            $confirm = substr($_POST['emailx'], -13);
                            //print $confirm;
                            if ($confirm == 'garimax.co.ke') {
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
                                $mail->addAddress($namex);

                                $mail->isHTML(true);                                  // Set email format to HTML

                                $mail->Subject = 'Verify your email address';
                                $mail->Body = '<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head>  <title></title>  <!--[if !mso]><!-- -->  <meta http-equiv="X-UA-Compatible" content="IE=edge">  <!--<![endif]--><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><style type="text/css">  #outlook a { padding: 0; }  .ReadMsgBody { width: 100%; }  .ExternalClass { width: 100%; }  .ExternalClass * { line-height:100%; }  body { margin: 0; padding: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }  table, td { border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; }  img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; }  p { display: block; margin: 13px 0; }</style><!--[if !mso]><!--><style type="text/css">  @media only screen and (max-width:480px) {    @-ms-viewport { width:320px; }    @viewport { width:320px; }  }</style><!--<![endif]--><!--[if mso]><xml>  <o:OfficeDocumentSettings>    <o:AllowPNG/>    <o:PixelsPerInch>96</o:PixelsPerInch>  </o:OfficeDocumentSettings></xml><![endif]--><!--[if lte mso 11]><style type="text/css">  .outlook-group-fix {    width:100% !important;  }</style><![endif]--><!--[if !mso]><!-->    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet" type="text/css">    <style type="text/css">        @import url(https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700);    </style>  <!--<![endif]--><style type="text/css">  @media only screen and (min-width:480px) {    .mj-column-per-100 { width:100%!important; }  }</style></head><body style="background: #FFFFFF;">    <div class="mj-container" style="background-color:#FFFFFF;"><!--[if mso | IE]>      <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="600" align="center" style="width:600px;">        <tr>          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">      <![endif]--><div style="margin:0px auto;max-width:600px;"><table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:9px 0px 9px 0px;"><!--[if mso | IE]>      <table role="presentation" border="0" cellpadding="0" cellspacing="0">        <tr>          <td style="vertical-align:top;width:600px;">      <![endif]--><div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;"><table role="presentation" cellpadding="0" cellspacing="0" style="vertical-align:top;" width="100%" border="0"><tbody><tr><td style="word-wrap:break-word;font-size:0px;padding:0px 0px 0px 0px;" align="center"><table role="presentation" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0px;" align="center" border="0"><tbody><tr><td style="width:600px;"><img alt="" title="" height="auto" src="https://garimax.co.ke/assets/img/favicon.png" style="border:none;border-radius:0px;display:block;font-size:13px;outline:none;text-decoration:none;width:100%;height:auto;" width="600"></td></tr></tbody></table></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:15px 15px 15px 15px;" align="left"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:11px;line-height:1.5;text-align:left;"><p><span style="font-size:20px;">Please validate your email with this verification code </span></p></div></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:15px 15px 15px 15px;" align="left"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:11px;line-height:1.5;text-align:left;"><p><span style="font-size:24px;"><strong>' . $_SESSION['ver'] . '</strong></span></p></div></td></tr></tbody></table></div><!--[if mso | IE]>      </td></tr></table>      <![endif]--></td></tr></tbody></table></div><!--[if mso | IE]>      </td></tr></table>      <![endif]--></div></body></html>';
                                $mail->AltBody = 'verify email with this code (' . $_SESSION['ver'] . ')';
                                $_SESSION['nm'] = $namex;
                                $_SESSION['ps'] = $passx;
                                if (!$mail->send()) {
                                    echo 'Message could not be sent.';
                                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                                } else {
                                    echo 'Message has been sent';
                                }
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
                                    <input type="text" class="form-control" name="q" placeholder="enter verification code">
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
