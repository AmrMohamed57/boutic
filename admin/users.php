<?php
include "includes/sidebar.php";
include "includes/header.php";
?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Users</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>

        <?php

            if(!isset($_GET['action'])){

            include "design/user/view.php";
                
            // }elseif($_GET['action'] == 'add'){

            // include "design/user/add.php";

            }elseif($_GET['action'] == 'edit'){

            include "design/user/edit.php";

            }

        ?>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

           
<?php
include "includes/footer.php";
?>
    