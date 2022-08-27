<?php include('header.php');

?>


<body>
    <video autoplay muted loop id="myVideo">
        <source src="bg-video.mp4" type="video/mp4">
    </video>
    <div class="content">
        <div class="form-container">
<h2 class="h2">Delighted to have you back !</h2>
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="email" class="mb-2">Enter your registered Email</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="password" class="mb-2">Enter your password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-eye-fill"></i></span>
                        <input type="password" class="form-control" placeholder="Enter Password">
                    </div>
                </div>
                <div>
                    <input type="submit" name="login" value="Login" class="btn btn-primary w-100">
                </div>
            </form>
            

            <?php include('footer.php');?>