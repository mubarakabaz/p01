<html>

<head>
    <?php
    // header("refresh: 5");
    include('assets/desain.php');
    ?>
</head>

<body>
    <div class="container col-lg-4">
        <br>
        <h3 class="text-center text-primary"><STRONG>SiPakonik</STRONG></h3>
        <P class="text-center">Menggunakan <Strong>PH Sensor</Strong>, <strong>TDS Turbidity</strong> Sensor, dan <strong>Suhu</strong> DS18B20.</P>
        <br>

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

    <div class="container col-lg-3">
        <br>
        <h4 class="mb-3" style="text-align:center;">Silakan Login</h4>
        <form method="POST" action="config/loginProses.php">
            <div class="form-group">
                <label><b>Username </b></label>
                <input type="text" class="form-control" name="username" placeholder="Masukan Username..">
            </div>
            <div class="form-group">
                <label><b>Password</b></label>
                <input type="password" class="form-control" name="password" placeholder="Masukan Password..">
            </div>
            <button class="btn btn-primary">Login</button>
        </form>
    </div>
</body>

</html>