<?php

require_once "db.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Business Lists</title>

    <link rel="shortcut icon" href="assets/images/favicon/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <div class="container bg-white">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h2 class="text-center">All <?php ?> Business Lists</h2>
                <table class="table table-striped table-hover table-bordered mt-5">
                    <thead>
                      <tr class="table-primary">
                        <th scope="col">SL. #</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Owner Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Business Email</th>
                        <th scope="col">Business Sector</th>
                        <th scope="col">Business Link</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr class="table-primary">
                        <th scope="col">SL. #</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Owner Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Business Email</th>
                        <th scope="col">Business Sector</th>
                        <th scope="col">Business Link</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>Otto</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td><a href="#">xyz</a></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>Thornton</td>
                        <td>Thornton</td>
                        <td>@mdo</td>
                        <td><a href="#">abc</a></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                        <td>@mdo</td>
                        <td><a href="#">dvsd</a></td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>Larry the Bird</td>
                        <td>@twitter</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td><a href="#">bfsdf</a></td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>

        <div class="row">
            <div class="col text-center mt-4 mb-5">
                <a href="index.php" class="btn"><i class="bi bi-house-fill"></i> Mohammadpur Portal Home</a>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.6.4.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>