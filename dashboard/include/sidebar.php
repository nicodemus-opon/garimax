<div class="sidebar" data-color="orange">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->

    <div class="logo">
        <a href="../" class="simple-text logo-mini">
            GM
        </a>

        <a href="../" class="simple-text logo-normal">
            Garimax Motors
        </a>


    </div>

    <div class="sidebar-wrapper">

        <div class="user">
            <div class="photo">
                <img src="../assets/img/favicon.png"/>
            </div>
            <div class="info">
                <a href="./" class="collapsedb">
                    <span>

                        <?php

                        echo $_SESSION["namex"];

                        ?>

                    </span>
                </a>
                <div class="clearfix"></div>

            </div>
        </div>

        <ul class="nav">

            <?php
            if (strpos($_SERVER['REQUEST_URI'], "index.php") !== false) {
                echo'<li class="active">';
            }else{
                echo '<li class="">';
            }
            ?>

                <a href="index.php">
                    <i class="now-ui-icons design_app"></i>
                    <p>Publish</p>
                </a>

            </li>
            <?php
            if (strpos($_SERVER['REQUEST_URI'], "cars") !== false) {
                echo'<li class="active">';
            }else{
                echo '<li class="">';
            }
            ?>
                <a href="cars.php">
                    <i class="now-ui-icons shopping_delivery-fast"></i>
                    <p>Cars</p>
                </a>

            </li>
            <li class="">
                <a href="#">
                    <i class="now-ui-icons files_single-copy-04"></i>
                    <p>Categories</p>
                </a>

            </li>
            <li class="">
                <a href="#">
                    <i class="now-ui-icons ui-1_bell-53"></i>
                    <p>Notifications</p>
                </a>

            </li>
            <li class="">
                <a href="#">
                    <i class="now-ui-icons ui-2_settings-90"></i>
                    <p>Settings</p>
                </a>

            </li>

        </ul>
    </div>
</div>

