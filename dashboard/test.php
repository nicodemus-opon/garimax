<?php
include('include/head.php');
?>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="filer/jpreview.css">
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script-->
    <script src="filer/bootstrap-prettyfile.js"></script>
    <script type="text/javascript" src="filer/jpreview.js"></script>
    <div class="container" style="margin-top:150px;">

        <form role="form">
            <div class="form-group" style="margin:50px auto;">
                <label for="exampleInputFile">File input</label>
                <input type="file" name="imgs" class="demo" multiple data-jpreview-container="#demo-1-container">
            </div>
            <div id="demo-1-container" class="jpreview-container"></div>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>


<?php
include('include/end.php');
?>
<script>
    $('input[type="file"]').prettyFile();
    $('.demo').jPreview();
</script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>
