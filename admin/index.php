<html>
    <head>
        <title>HALAMAN ADMIN</title>
    </head>
    <body>
        <?php
            include 'header.php' ;
            require '../koneksi.php';
        ?>
        <div class="container">
    <div class="alert alert-info text-center">
        <h4 style="margin-bottom: 0px"><b>Selamat Datang !</b>
        di Sistem Informasi Laundry</h4>
    </div>

<div class="panel">
    <div class="panel-heading">
        <h4 class="Dashboard">
        </h4>
    </div>
       <div class="panel-body">
    <div class="row">

        <div class="col-md-3">
            <div class="panel panel-primary">
                
                <div class="panel-heading">
                    <i class="glyphicon glyphicon-user"></i>
                    <span class="rigth">
                        <?php  
                            /** @var mysqli $koneksi */
                            $data_pelanggan = mysqli_query($koneksi, "select * from pelanggan"); 
                            $jumlah_pelanggan = mysqli_num_rows($data_pelanggan); 
                             echo $jumlah_pelanggan;
                        ?>
                    </span>
                    
                    <span>
                        <h1>Jumlah Pelanggan</h1>
                    </span>
                </div>

                <div class="panel-body text-center">
                    <h1><i class="bi bi-people"></i></h1>
                </div>

                <div class="panel-body text-center">
                    <h4>PELANGGAN</h4>
                </div>

                <div class="panel-footer text-center">
                    <a href="#">
                        Lihat Detail
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

            </div>
        </div>

        <div class="col-md-3">
            <div class="panel panel-success">

                <div class="panel-heading text-center">
                    <h4>TRANSAKSI</h4>
                </div>

                <div class="panel-body text-center">
                    <h1><i class="bi bi-cash-coin"></i></h1>
                </div>

                <div class="panel-footer text-center">
                    <a href="#">
                        Lihat Detail
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

            </div>
        </div>

        <div class="col-md-3">
            <div class="panel panel-warning">

                <div class="panel-heading text-center">
                    <h4>LAPORAN</h4>
                </div>

                <div class="panel-body text-center">
                    <h1><i class="bi bi-file-earmark-bar-graph"></i></h1>
                </div>

                <div class="panel-footer text-center">
                    <a href="#">
                        Lihat Detail
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

            </div>
        </div>

        <div class="col-md-3">
            <div class="panel panel-danger">

                <div class="panel-heading text-center">
                    <h4>PENGATURAN</h4>
                </div>

                <div class="panel-body text-center">
                    <h1><i class="bi bi-gear"></i></h1>
                </div>

                <div class="panel-footer text-center">
                    <a href="#">
                        Lihat Detail
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

            </div>
        </div>

    </div>
</div>
</div>
    </body>
</html>

