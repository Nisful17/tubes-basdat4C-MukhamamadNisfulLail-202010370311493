<?php
    include "koneksi.php";

    if(isset($_GET['id'])){
    mysqli_query($conn,"delete  from tb_pendaftaran where id_pendaftaran='$_GET[id]'");
    
    echo "Data berhasil dihapus";
    echo "<meta http-equiv=refresh content=2;URL='data-peserta.php'>";

    }
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
            <h2>Data Peserta</h2>
            <div class="box">
              <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id Pendaftaran</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($conn,"select * from tb_pendaftaran");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[id_pendaftaran]</td>
            <td>$tampil[nm_peserta]</td>
            <td>$tampil[jk]</td>
           
            <td><a href='?id=$tampil[id_pendaftaran]'> Hapus </a></td>
            
        <tr>";
        $no++;
    }
    ?>
                </tbody>
              </table>
            </div>
        </section>
    </body>
</html>
    