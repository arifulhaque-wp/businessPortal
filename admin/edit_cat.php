<?php

session_start();
if ( !isset( $_SESSION['adminUser'] ) ) {
    header( 'Location:index.php' );
}

require "../db.php";

$title = "Edit Sector";
include 'header.php';
?>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">All Sector</div>
                            <a class="nav-link" href="sector.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Add Sector
                            </a>
                            <div class="sb-sidenav-menu-heading">All Business</div>
                            <a class="nav-link" href="businessList.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Business Lists
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Edit Sectors</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="sector.php">Business Sector</a></li>
                            <li class="breadcrumb-item active">Edit Sector</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div class="table-title">
                                    <i class="fas fa-table me-1"></i>
                                    Edit Business Sectors
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="add-btn">
                                    <?php
                                    if ( isset( $_GET['id'] ) ) {
                                        $getid = $_GET['id'];

                                        $sql   = "SELECT * FROM business_category WHERE cat_id=$getid";
                                        $query = $conn->query( $sql );

                                        $data     = mysqli_fetch_assoc( $query );
                                        $cat_id   = $data['cat_id'];
                                        $cat_name = $data['cat_name'];
                                    }

                                    if ( isset( $_GET['cat_name'] ) ) {
                                        $new_catName = $_GET['cat_name'];
                                        $new_catId   = $_GET['cat_id'];

                                        $new_sql = "UPDATE business_category SET cat_name='$new_catName' WHERE cat_id=$new_catId";

                                        if ( $conn->query( $new_sql ) == TRUE ) {
                                            echo "<span class='text-success'>Update Success</div>";
                                        } else {
                                            echo "<span class='text-danger'>Not Update</div>";
                                        }
                                    }

                                    ?>
                                    <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="GET" id="edit_form" class="row">
                                        <div class="col-auto">
                                            <input type="text" class="form-control" name="cat_id" value="<?php echo $cat_id; ?>" hidden>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" class="form-control" id="edit_sector" name="cat_name" value="<?php if ( isset( $_GET['cat_name'] ) ) {echo $new_catName;} else {echo $cat_name;}?>">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" name="update" class="btn btn-success mb-3">Update Sector</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

<?php include 'footer.php';?>