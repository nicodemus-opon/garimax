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
                <a class="navbar-brand" href="#pablo">View Cars</a>
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
                        <h4 class="card-title">Cars Table
                        </h4>
                    </div>
                    <div class="card-body">

                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Specs</th>
                                <th class="disabled-sorting text-right">Actions</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Specs</th>
                                <th class="disabled-sorting text-right">Actions</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM cars";
                            //print($sql);
                            $result = $con->query($sql);
                            while ($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $row['titlex']; ?></td>
                                    <td><?php echo $row['descx']; ?></td>
                                    <td><?php echo $row['categoryx']; ?></td>
                                    <td><?php echo $row['pricex']; ?></td>
                                    <td><?php echo $row['specsx']; ?></td>
                                    <td class="text-right">
                                        <!--div class="btn-group" role="group" -->
                                        <a href=<?php echo "'cars-update.php?id=" . $row['idx'] . "'"; ?> class="btn
                                           btn-round btn-primary btn-icon btn-sm "><i
                                                class="now-ui-icons design-2_ruler-pencil"></i></a>
                                        <a onclick="return confirm('Are you sure you want to delete <?php echo $row['titlex'] ; ?>');"
                                           href=<?php echo "'cars-delete.php?id=" . $row['idx'] . "'"; ?> class="btn
                                           btn-round btn-danger btn-icon btn-sm "><i
                                                class="now-ui-icons ui-1_simple-remove"></i></a>

                                        <!--/div-->
                                    </td>
                                </tr>
                            <?php } ?>

                            </tbody>
                        </table>
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
<script>
    $(document).ready(function () {
        $('#datatable').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            }

        });

        var table = $('#datatable').DataTable();

        // Edit record
        table.on('click', '.edit', function () {
            $tr = $(this).closest('tr');
            if ($($tr).hasClass('child')) {
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        // Delete a record
        table.on('click', '.remove', function (e) {
            $tr = $(this).closest('tr');
            if ($($tr).hasClass('child')) {
                $tr = $tr.prev('.parent');
            }
            table.row($tr).remove().draw();
            e.preventDefault();
        });

        //Like record
        table.on('click', '.like', function () {
            alert('You clicked on Like button');
        });
    });
</script>


