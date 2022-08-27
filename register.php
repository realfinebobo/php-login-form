<?php include('header.php'); ?>

<body>
    <video autoplay muted loop id="myVideo">
        <source src="bg-video.mp4" type="video/mp4">
    </video>
    <div class="content">
        <div class="form-container">
<h2 class="h2">Create an account</h2>
<form action="backend.php" method="post">
<!-- entering first name and last name -->
<div class="form-group mb-3">
    <div class="input-group mb-2">
        <input type="text" class="form-control" placeholder="Enter Your First Name">
        <span class="input-group-text"><i class="bi bi-person-badge-fill"></i></span>
    </div>

    <div class="input-group">
        <input type="text" class="form-control" placeholder="Enter Your Last Name">
        <span class="input-group-text"><i class="bi bi-person-badge-fill"></i></span>
    </div>
</div>
<!-- entering first name and last name end-->
<!-- email address  -->
<div class="form-group mb-3">
    <div class="input-group">
        <input type="email" class="form-control" placeholder="Enter your valid email">
        <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
    </div>
</div>
<!-- email address end -->
<!-- create password -->
<div class="row form-group mb-3">
    <div class="col">
        <input type="password" class="form-control" placeholder="Create password">
    </div>
    <div class="col">
        <input type="password" class="form-control" placeholder="Confirm Password">
    </div>
</div>
<div>
    <input type="submit" name="register" value="Create Account" class="btn btn-primary w-100">
</div>
</form>
<?php include('footer.php'); ?>