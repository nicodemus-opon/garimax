<?php
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 2019-01-13
 * Time: 13:07
 */ ?>
<?php
include('include/head.php');
include('include/sidebar.php');
include_once('../includes/connect.php');


?>
<link href="dist/styles.imageuploader.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/editor/styles/simditor.css"/>

<div class="main-panel">
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
                <a class="navbar-brand" href="#pablo">Update</a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navigation">


                <form>
                    <div class="input-group no-border">
                        <input type="text" value="" class="form-control" placeholder="Search...">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="now-ui-icons ui-1_zoom-bold"></i>
                            </div>
                        </div>
                    </div>
                </form>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#pablo">
                            <i class="now-ui-icons media-2_sound-wave"></i>
                            <p>
                                <span class="d-lg-none d-md-block">Stats</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="now-ui-icons location_world"></i>
                            <p>
                                <span class="d-lg-none d-md-block">Some Actions</span>
                            </p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#pablo">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>
                                <span class="d-lg-none d-md-block">Account</span>
                            </p>
                        </a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>
    <!-- End Navbar -->


    <div class="panel-header panel-header-sm">

    </div>


    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update Car Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <div class="input-group form-control-lg">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="now-ui-icons text_align-left"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control"
                                               placeholder="Title (required)" name="title">
                                    </div>
                                    <div class="input-group form-control-lg">
                                        <!--label>Short Description</label-->
                                        <textarea class="form-control" name="shortdesc"
                                                  placeholder="Short Description (required)"></textarea>
                                        <!--input type="text" placeholder="Short Description (required)"
                                               class="form-control" name="lastname"/-->
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label>Price (Ksh)</label>
                                    <input type="text" name="price" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label>Category (Body Type)</label>
                                    <select name="category" class="selectpicker" data-size="7"
                                            data-style="btn btn-primary btn-round"
                                            title="Category">
                                        <?php
                                        require_once "../includes/connect.php";
                                        // Create connectionhjh
                                        //echo "Connected successfully";
                                        $sql = "select * from categories where namex is not NULL ";
                                        //echo $sql;
                                        $result = $con->query($sql);
                                        if ($result->num_rows > 0) {
                                            echo '<div class="list-group">';
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<option value="' . $row["namex"] . '">' . $row["namex"] . '</option>';
                                            }
                                            echo '</div>';
                                        } else {
                                            echo "Error: " . $sql . "<br>" . $con->error;
                                        }
                                        $con->close();
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                            <textarea id="editor" class="form-control"
                                      name="specs"
                                      placeholder="Specifications"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <button type="submit" class="btn btn-round btn-primary btn-block">Update
                                </button>
                            </div>
                        </div>
                    </div><!-- end content-->
                </div><!--  end card  -->
            </div> <!-- end col-md-12 -->
        </div> <!-- end row -->

    </div>


</div>

</div>

<?php
include('include/end.php');

?>

<script type="text/javascript" src="assets/editor/scripts/module.js"></script>
<script type="text/javascript" src="assets/editor/scripts/uploader.js"></script>
<script type="text/javascript" src="assets/editor/scripts/hotkeys.js"></script>
<script type="text/javascript" src="assets/editor/scripts/simditor.js"></script>
<script src="filer/bootstrap-prettyfile.js"></script>
<script type="text/javascript" src="filer/jpreview.js"></script>
<script>
    var editor = new Simditor({
        textarea: $('#editor')
    });
</script>

