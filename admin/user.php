<?php

session_start();
if ( !isset( $_SESSION['adminUser'] ) ) {
    header( 'Location:index.php' );
}

require "../db.php";

$title = "Admin User";
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
                            <div class="sb-sidenav-menu-heading">Settings</div>
                            <a class="nav-link text-white" href="user.php">
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
                        <h1 class="mt-4">Admin User Lists</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Admin User Lists</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-users"></i>
                                Admin User Lists
                            </div>
                            <div class="card-body">
                                <table id="myTable" class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>User Name</th>
                                            <th>User Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>User Name</th>
                                            <th>User Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>business@gmail.com</td>
                                            <td>
                                                <a href="#" class="btn btn-success btn-sm">Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
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