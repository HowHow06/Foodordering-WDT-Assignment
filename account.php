<?php
include_once('_cus.function.php');
checksession();
if (isset($_GET['logout'])) {
    logout();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Restaurant | Account Setting</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./fontawesome-free-5.14.0-web/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/account.css">
    <link rel="stylesheet" href="./style/account.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#hamburger" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="dashboard.php"><img src="img/res_logo.png" height=35>My Restaurant</a>
        <div>
            <div class="nav-nav">
                <li class="navbar-nav"><a href="account.php" class="nav-link"><?php echo $_SESSION['cus_row']['cus_name'] ?></a></li>
            </div>
            <div class="cart-btn" type="button" data-toggle="collapse" data-target="#cart">
                <span class="nav-icon"><i class="fas fa-cart-plus"></i></span>
                <div class="cart-items"><span>0</span></div>
            </div>
        </div>
    </div>
</nav>
<div class="collapse" id="hamburger">
    <div class="bg-white p-2">
        <ul class="navbar-nav">
            <li class="nav-item home"><a href="dashboard.php" class="nav-link">Home</a></li>
            <li class="nav-item help"><a href="#" class="nav-link">Help</a></li>
            <li class="nav-item order"><a href="#" class="nav-link">My Order</a></li>
            <li class="nav-item account"><a href="account.php" class="nav-link">Account Setting</a></li>
            <li class="nav-item logout"><a href="?logout=1" class="nav-link">Logout</a></li>
            <hr>
            <li class="nav-item tel"><a href="tel:0388699498" class="nav-link">Contact Us</a></li>
            <li class="nav-item term"><a href="term.php" class="nav-link">Terms and Condition</a></li>
        </ul>
    </div>
</div>
<div class="collapse" id="cart">
    <div class="p-4 row">
        <div class="jumbotron">
            <h4>Shopping Cart</h4>
            <button class="btn btn-secondary-outline" type="button" onclick="location.href='cart.php';">More Details</button>
            <hr>
            <div class="panel-body row padding">
                <fieldset>
                    <img src="./img/noodle/蒜香虾油意面.jpg" style="max-height: 130px;">
                    <h4>Curry Beef Udon</h4>
                    <h6>MYR 10.50</h6>
                    <input type="number">
                </fieldset>
                <fieldset>
                    <img src="./img/noodle/蒜香虾油意面.jpg" style="max-height: 130px;">
                    <h4>Curry Beef Udon</h4>
                    <h6>MYR 10.50</h6>
                    <input type="number">
                </fieldset>
                <fieldset>
                    <img src="./img/noodle/蒜香虾油意面.jpg" style="max-height: 130px;">
                    <h4>Curry Beef Udon</h4>
                    <h6>MYR 10.50</h6>
                    <input type="number">
                </fieldset>
            </div>
        </div> 
    </div>
</div>

<div class="main-content">
<div class="container-fluid">
<!-- User info -->
<div class="row">
<div class="col-12 m-auto order-1">
<div class="card bg-secondary">
<div class="card-header bg-white border-0">
<div class="row align-items-center">
<div class="col-8">
<h3 class="mb-0">My Profile</h3>
</div>
<div class="col-4 text-right">
<a href="#!" class="btn btn-sm btn-primary">Save Changes</a>
</div>
</div>
</div>
<div class="card-body">
<form>
<h6 class="heading-small text-muted mb-4">User information</h6>
<div class="pl-lg-4">
<div class="row">
<div class="col-lg-6">
<div class="form-group focused">
<label class="form-control-label" for="input-username">Username</label>
<input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="lucky.jesse">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label" for="input-email">Email address</label>
<input type="email" id="input-email" class="form-control form-control-alternative" placeholder="abc@example.com">
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="form-group focused">
<label class="form-control-label" for="input-first-name">Nickname</label>
<input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Nickname" value="Lucky">
</div>
</div>
<div class="col-lg-6">
<div class="form-group focused">
<label class="form-control-label" for="input-last-name">Contact number</label>
<input type="number" id="input-last-name" class="form-control form-control-alternative" placeholder="+0168432912" value="+0168432912">
</div>
</div>
</div>
</div>
<hr class="my-4">
<!-- Password -->
<h6 class="heading-small text-muted mb-4">Password Setting</h6>
<div class="row">
<div class="col-lg-4">
<div class="form-group focused">
<label class="form-control-label" for="input-city">Current Password</label>
<input type="password" id="input-city" class="form-control form-control-alternative">
</div>
</div>
<div class="col-lg-4">
<div class="form-group focused">
<label class="form-control-label" for="input-country">New Password</label>
<input type="password" id="input-country" class="form-control form-control-alternative">
</div>
</div>
<div class="col-lg-4">
<div class="form-group">
<label class="form-control-label" for="input-country">Confirm Password</label>
<input type="password" id="input-postal-code" class="form-control form-control-alternative">
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

</body>
</html>