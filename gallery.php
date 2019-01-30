<?php
include('includes/head.php');
include('includes/navbar.php');
$files = scandir("assets/bgs");
//print_r($files);
$rr = mt_rand(3, 6);
//echo $files[$rr];
include "includes/connect.php";
?>

<div class="container">
    <h1>Masonry + imagesLoaded, iteratively reveal items</h1>

    <div id="container"></div>
    <div id="images">
        <div class="item">
            <img src="https://picsum.photos/530/290/?random">
        </div>
        <div class="item">
            <img src="https://picsum.photos/100/290/?random">
        </div>
        <div class="item">
            <img src="https://picsum.photos/400/500/?random">
        </div>
        <div class="item">
            <img src="https://picsum.photos/300/450/?random">
        </div>
        <div class="item">
            <img src="https://picsum.photos/530/290/?random">
        </div>
        <div class="item">
            <img src="https://picsum.photos/400/250/?random">
        </div>
        <div class="item">
            <img src="https://picsum.photos/400/250/?random">
        </div>
        <div class="item">
            <img src="https://picsum.photos/530/290/?random">
        </div>
        <div class="item">
            <img src="https://picsum.photos/100/290/?random">
        </div>
        <div class="item">
            <img src="https://picsum.photos/400/500/?random">
        </div>
        <div class="item">
            <img src="https://picsum.photos/300/450/?random">
        </div>
        <div class="item">
            <img src="https://picsum.photos/530/290/?random">
        </div>
        <div class="item">
            <img src="https://picsum.photos/400/250/?random">
        </div>
        <div class="item">
            <img src="https://picsum.photos/400/250/?random">
        </div>

    </div>
    <p>
        <button id="load-images">Load images</button>



</div>





</p>

<?php
include('includes/footer.php');

?>

<?php
include('includes/end.php');

?>
<script src="//masonry.desandro.com/masonry.pkgd.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.0.4/jquery.imagesloaded.js"></script>


