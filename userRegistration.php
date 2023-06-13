<?php

if ( isset( $_POST['submit'] ) ) {

    $shop_name = $_POST['shop_name'];
    $owner_name = $_POST['owner_name'];
    $cell_number = $_POST['phone'];
    $email = $_POST['email'];
    $shop_description = $_POST['description'];
    $business_cat = $_POST['bussiness_cat_id'];
    $upload_file = $_POST['upload_file'];

    $empmsg_sname = "";
    $empmsg_email = "";
    $empmsg_desc = "";
    $empmsg_b_cat = "";

    if ( empty( $shop_name ) ) {
        $empmsg_sname = "Please fillup shop name.";
    }

    if ( empty( $email ) ) {
        $empmsg_email = "Please provide a valid email.";
    }

    if ( empty( $shop_description ) ) {
        $empmsg_desc = "Please write details of your offer.";
    }

    if ( empty( $business_cat ) ) {
        $empmsg_b_cat = "Please select business sector.";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Business Registration</title>

    <link rel="shortcut icon" href="assets/images/favicon/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-md-6 mt-5 bg-white">
                <div class="header-content d-flex align-items-center justify-content-between mb-4">
                    <a href="index.php" class="home-icon fs-2 fw-bold"><i class="bi bi-house-fill"></i></a>
                    <h2>Business Registration Form.</h2>
                </div>
                <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post" id="reg_form" class="reg-form">
                <?php
                
                ?>
                    <div class="mb-3">
                        <label for="business_name" class="form-label">Name of your business (required)</label>
                        <input type="text" class="form-control" name="shop_name" id="business_name" value="<?php if ( isset( $_POST['submit'] ) ) {echo $shop_name;}?>">
                        <span class="text-danger"><?php if ( isset( $_POST['submit'] ) ) {echo $empmsg_sname;}?></span>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Contact Person's name (optional)</label>
                        <input type="text" class="form-control" name="owner_name" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Contact phone number (optional)</label>
                        <input type="text" class="form-control" name="phone" id="phone">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address (required)</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?php if ( isset( $_POST['submit'] ) ) {echo $email;}?>">
                        <span class="text-danger"><?php if ( isset( $_POST['submit'] ) ) {echo $empmsg_email;}?></span>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">What your business offers - Please put as much details as you like for others to see (required)</label>
                        <textarea class="form-control" name="description" id="description" rows="3"><?php if ( isset( $_POST['submit'] ) ) {echo $shop_description;}?></textarea>
                        <span class="text-danger"><?php if ( isset( $_POST['submit'] ) ) {echo $empmsg_desc;}?></span>
                    </div>
                    <div class="mb-3">
                        <label for="form-select" class="form-label">Choose your business sector from the dropdown list (required)</label>
                        <select id="form-select" name="bussiness_cat_id" class="form-select" value="<?php if ( isset( $_POST['submit'] ) ) {echo $empmsg_b_cat;}?>">
                            <option value="" selected hiddden>Select Business Sector</option>
                            <option value="">Barber</option>
                            <option value="">Construction</option>
                            <option value="">DIY</option>
                            <option value="">Dry cleaning</option>
                            <option value="">Finance</option>
                            <option value="">Food</option>
                            <option value="">Production</option>
                            <option value="">Retail</option>
                            <option value="">Trade</option>
                            <option value="">Others</option>
                        </select>
                        <span class="text-danger"><?php if ( isset( $_POST['submit'] ) ) {echo $empmsg_b_cat;}?></span>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Please upload your shop's image (optional)</label>
                        <input class="form-control" name="upload_file" type="file" id="formFile">
                    </div>
                    <div class="publishBtn text-center">
                        <button type="submit" class="btn mb-5" name="submit">Submit & Publish</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>