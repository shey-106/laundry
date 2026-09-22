<html>
    <head>
        <title>
            Sistem Informasi Laundry
        </title>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
        <script type="text/javascript" src="assets/js/jquery.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    </head>
    <body style="background : #641515">
        <br><br><br><br>
        <center>
            <h2 style ="color: #ffffff">SISTEM INFORMASI LAUNDRY <br></h2>
        </center>

        <br><br>
        <div class="container">
            <div class="col-md-4 col-md-offset-4">
                <?php
                    if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == "logout") {
                        echo "<div class='alert alert-danger'>Login gagal! Username atau Password Salah/div>";
                    }elseif ($_GET['pesan'] == "logout") {
                        echo "<div class='alert alert-info'>Anda Berhasil Logout</div>";
                    }elseif ($_GET['pesan'] == "belum login") {
                        echo "<div class='alert alert-danger'>Anda Harus Login untuk mengakses Halaman Admin</div>";
                    }
                    }
                    
                ?>
                <form action="login.php" method="post">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>password</label>
                                <input type="text" name="password" class="form-control">
                            </div>
                            <input type="submit" class="btn
                            btn-primary" value="Log in">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>