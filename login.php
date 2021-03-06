<html>

<head>
    <?php
    // header("refresh: 5");
    include('desain.php');
    ?>
</head>

<body id="login-page">

    <div class="container login">
    <div class="container col-sm">
        <div class="logo text-center">
            <img src="assets/Logo_LAZULA.png" alt="lazula">
        </div>

        <br>
        <form method="POST" action="loginProses.php">
            <div class="form-group">
                <label><b>Username </b></label>
                <input type="text" class="form-control" name="username" placeholder="Masukan Username..">
            </div>
            <div class="form-group">
                <label><b>Password</b></label>
                <input type="password" class="form-control" name="password" placeholder="Masukan Password..">
            </div>
            
            <button class="btn btn-outline-success btn-block">Login</button>
            
            
        </form>

        
    </div>

    
    
    <?php include('bootstrapScript.php'); ?>
    
</body>

</html>