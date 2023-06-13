<?php

session_start();
if ( !isset( $_SESSION['adminUser'] ) ) {
    header( 'Location:index.php' );
}

require "../db.php";

$title = "All Business Lists";
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
                            <a class="nav-link text-white" href="businessList.php">
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
                        <h1 class="mt-4">Business Lists</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Business Lists</li>
                        </ol>
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
                                            <th>Owner Name</th>
                                            <th>Phone</th>
                                            <th>Business Email</th>
                                            <th>Business info</th>
                                            <th>Business Sector</th>
                                            <th>Business URL</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Business Name</th>
                                            <th>Owner Name</th>
                                            <th>Phone</th>
                                            <th>Business Email</th>
                                            <th>Business Info</th>
                                            <th>Business Sector</th>
                                            <th>Business URL</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>123456789</td>
                                            <td>business@gmail.com</td>
                                            <td>2011/04/25</td>
                                            <td>Barber</td>
                                            <td><a href="#">$320,800</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
<?php
include 'footer.php';
?>
