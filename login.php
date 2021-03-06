<html>

<head>
    <?php
    // header("refresh: 5");
    include('desain.php');
    ?>

    <style>
         body{
             background-image: url('assets/background.jpg');
             background-position: center;
             z-index: 9999;
         }
    </style>
</head>

<body>
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

        <?php
        if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<div class='alert alert-sm alert-danger'>" . "Login gagal! username dan password salah!" . "</div>";
        } else if ($_GET['pesan'] == "logout") {
            echo "<div class='alert alert-primary'>" . "Anda telah berhasil logout" . "</div>";
        } else if ($_GET['pesan'] == "belum_login") {
            echo "<div class='alert alert-warning'>" . "Anda harus login untuk mengakses halaman admin" . "</div>";
        }
        }
        ?>
    </div>
    
    <?php include('bootstrapScript.php'); ?>
    
</body>

</html>