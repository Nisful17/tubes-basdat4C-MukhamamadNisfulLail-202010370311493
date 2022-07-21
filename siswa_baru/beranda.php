<?php
    include 'koneksi.php';


?>
<!DOCTYPE php>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Siswa Baru Online | Administrator</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    </head>

    <body>
        <!-- bagian header -->
        <header>
            <h1><a href="beranda.php"> Admin Pendaftaran Siswa Baru</a></h1>
            <ul>
                <li><a href="beranda.php">Beranda</a></li>
                <li><a href="data-peserta.php">Data Peserta</a></li>
                <li><a href="logout.php">Keluar</a></li>
            </ul>
        </header>

        <!-- bagian content -->
        <section class="content">
            <h2>Beranda</h2>
            <div class="box">
                <h3><?php echo $_SESSION['nama']?>, Selamat Datang di PSB Online</h3>
            </div>
        </section>
    </body>
</html>
    