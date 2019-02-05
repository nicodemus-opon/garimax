<?php
include('includes/head.php');
include('includes/navbar.php');
?>

<?php

if (isset($_POST["phone"])) {
    $phonex = $_POST["phone"];
    $idx = $_POST["idx"];
    $urlx = $_POST["urlx"];
    $emailx = $_POST["email"];
    $disx=$_POST["disx"];
    $msgg = 'A client of phone number: ' . $phonex . ' and email: ' . $emailx . ' is requesting for ' . $idx . ' at ' . $urlx;
    if ($msgg !== '') {
        require 'dashboard/mailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'mail.garimax.co.ke';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'admin@garimax.co.ke';                 // SMTP username
        $mail->Password = 'Garimax11060';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        $mail->setFrom('admin@garimax.co.ke', 'Garimax Admin');
        $mail->addAddress("sales@garimax.co.ke");

        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Vehicle request';
        $mail->Body = '<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head>  <title></title>  <!--[if !mso]><!-- -->  <meta http-equiv="X-UA-Compatible" content="IE=edge">  <!--<![endif]--><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><style type="text/css">  #outlook a { padding: 0; }  .ReadMsgBody { width: 100%; }  .ExternalClass { width: 100%; }  .ExternalClass * { line-height:100%; } 
 body { margin: 0; padding: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }  table, td { border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; }  img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; }  p { display: block; margin: 13px 0; }</style><!--[if !mso]><!-->
<style type="text/css">  @media only screen and (max-width:480px) {    @-ms-viewport { width:320px; }    @viewport { width:320px; }  }</style>
<!--<![endif]--><!--[if mso]><xml>  <o:OfficeDocumentSettings>    <o:AllowPNG/>    <o:PixelsPerInch>96</o:PixelsPerInch>  </o:OfficeDocumentSettings></xml><![endif]--><!--[if lte mso 11]><style type="text/css">  .outlook-group-fix {    width:100% !important;  }</style><![endif]--><!--[if !mso]><!-->    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet" type="text/css">    <style type="text/css">        @import url(https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700);   
 </style>  <!--<![endif]--><style type="text/css">  @media only screen and (min-width:480px) {    .mj-column-per-100 { width:100%!important; }  }</style></head><body style="background: #FFFFFF;">    <div class="mj-container" style="background-color:#FFFFFF;"><!--[if mso | IE]>      <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="600" align="center" style="width:600px;">        <tr>          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">      <![endif]--><div style="margin:0px auto;max-width:600px;">
 <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:9px 0px 9px 0px;"><!--[if mso | IE]>      <table role="presentation" border="0" cellpadding="0" cellspacing="0">        <tr>          <td style="vertical-align:top;width:600px;">      <![endif]--><div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;"><table role="presentation" cellpadding="0" cellspacing="0" style="vertical-align:top;" width="100%" border="0"><tbody><tr><td style="word-wrap:break-word;font-size:0px;padding:0px 0px 0px 0px;" align="center"><table role="presentation" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0px;" align="center" border="0"><tbody><tr><td style="width:600px;"><img alt="" title="" height="auto" src="' . $disx . '" style="border:none;border-radius:0px;display:block;font-size:13px;outline:none;text-decoration:none;width:100%;height:auto;" width="600"></td></tr></tbody></table></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:15px 15px 15px 15px;" align="left"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:11px;line-height:1.5;text-align:left;"><p><span style="font-size:20px;">'.$msgg.' 
</span></p></div></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:15px 15px 15px 15px;" align="left"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:11px;line-height:1.5;text-align:left;"><p><span style="font-size:24px;"><strong>Title :' . $idx . '</strong></span></p></div></td></tr></tbody></table></div><!--[if mso | IE]>      </td></tr></table>      <![endif]--></td></tr></tbody></table></div><!--[if mso | IE]>      </td></tr></table>      <![endif]--></div></body></html>';
        $mail->AltBody = $msgg;

        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }


}

?>
<div class="blogs-1" id="blogs-1">

    <div class="container">
        <div class="row">

            <div class="col-md-10 ml-auto mr-auto">
                <h2 class="title">Request Received</h2>

                <br>
                <div class="card card-plain card-blog">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="card-image">
                                <img class="img " src="assets/ok.png">
                            </div>
                        </div>
                        <div class="col-md-7">

                            <h5 class="card-title">
                               Your request for <em> <?php echo $idx; ?> </em> has been received and we will get back at you
                            </h5>
                            <h7>Feel free to: </h7>
                            <p class="card-description">
                            <div class="card">
                                <ul class="list-group list-group-flush">
                                    <a class="list-group-item  footer-link stats-link text-black"
                                       href="tel:0733626262">Call us at 0733626262</a>
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