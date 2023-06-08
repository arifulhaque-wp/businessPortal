<?php

 session_start();
 if ( !isset( $_SESSION['adminUser'] ) ) {
  header( 'Location:index.php' );
 }

 require "../db.php";

 $title="Admin Dashboard";
 include('header.php');
?>

        <div id="layoutSidenav">
            <?php include('sidebar.php'); ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">All Business Sector</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="sector.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">All Business List</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="businessList.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Business Owner Lists
                            </div>
                            <div class="card-body">
                                <table id="myTable" class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Business Name</th>
                                            <th>Business Email</th>
                                            <th>Business Sector</th>
                                            <th>Business URL</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Business Name</th>
                                            <th>Business Email</th>
                                            <th>Business Sector</th>
                                            <th>Business URL</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Selim Kabar</td>
                                            <td>test@gmail.com</td>
                                            <td>Food</td>
                                            <td><a href="#">Selim Kabab</a></td>
                                        </tr>
                                        <tr>
                                            <td>Prince Restaurant</td>
                                            <td>abc@gmail.com</td>
                                            <td>Food</td>
                                            <td><a href="#">Prince Restaurant</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                
<?php
include('footer.php');
?>
