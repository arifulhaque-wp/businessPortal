<?php

session_start();
if ( !isset( $_SESSION['adminUser'] ) ) {
    header( 'Location:index.php' );
}

require "../db.php";

$title = "Add Business Sector";
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
                            <a class="nav-link text-white" href="sector.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Add Sector
                            </a>
                            <div class="sb-sidenav-menu-heading">All Business</div>
                            <a class="nav-link" href="businessList.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Business Lists
                            </a>
                            <div class="sb-sidenav-menu-heading">Settings</div>
                            <a class="nav-link" href="user.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                User
                            </a>
                            <a class="nav-link" href="logout.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-sign-out"></i></div>
                                Logout
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Business Sectors</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Business Sector</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div class="table-title">
                                    <i class="fas fa-table me-1"></i>
                                    All Business Sectors
                                </div>
                                <div class="add-btn">
                                    <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="POST" id="add_form" class="row">
                                        <div class="col-auto">
                                            <input type="text" class="form-control form-control-sm" id="add_sector" name="cat_name" placeholder="Type New Sector">
                                            <?php
                                            if ( isset( $_POST['save'] ) ) {

                                                $add_sector = $_POST['cat_name'];

                                                $errors = array();

                                                $sql      = "SELECT * FROM category WHERE cat_name = '$add_sector'";
                                                $result   = mysqli_query( $conn, $sql );
                                                $rowCount = mysqli_num_rows( $result );

                                                if ( $rowCount > 0 ) {
                                                    array_push( $errors, "Sector already exists in the list.." );
                                                }

                                                if ( count( $errors ) > 0 ) {
                                                    foreach ( $errors as $error ) {
                                                        echo "<span class='text-danger'>$error</span>";
                                                    }
                                                } else {

                                                    $sql         = "INSERT INTO category (cat_name) VALUES(?)";
                                                    $stmt        = mysqli_stmt_init( $conn );
                                                    $prepareStmt = mysqli_stmt_prepare( $stmt, $sql );

                                                    if ( $prepareStmt ) {
                                                        mysqli_stmt_bind_param( $stmt, "s", $add_sector );
                                                        mysqli_stmt_execute( $stmt );

                                                        echo "<span class='text-success'>Sector Added</span>";
                                                    } else {
                                                        echo "<span class='text-danger'>Something went wrong.</span>";
                                                    }
                                                }
                                            }
                                            ?>
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" name="save" class="btn btn-success btn-sm mb-3">Add Sector</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="myTable" class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SL.</th>
                                            <th>Sector Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>SL.</th>
                                            <th>Sector Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        $n   = 1;
                                        $sql = "SELECT * FROM category ORDER BY cat_name ASC";

                                        $query = $conn->query( $sql );

                                        if ( $query ) {
                                            while ( $data = mysqli_fetch_assoc( $query ) ) {

                                                $cat_id   = $data['cat_id'];
                                                $cat_name = $data['cat_name'];
                                            ?>
                                        <tr>
                                            <td><?php echo $n; ?></td>
                                            <td><?php echo $cat_name; ?></td>
                                            <td>
                                                <a href="edit_cat.php?id=<?php echo $cat_id; ?>" class="btn btn-success btn-sm">Edit</a>
                                            </td>
                                        </tr>
                                            <?php
                                        $n++;
                                            }
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
<?php include 'footer.php';?>