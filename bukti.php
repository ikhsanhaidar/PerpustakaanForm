<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 60%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h3, h5 {
            text-align: center;
        }
        h1 {
            color: #333;
        }
        h3 {
            color: #555;
        }
        h5 {
            color: #777;
        }
        hr {
            border: 1px solid red;
        }
        .content {
            font-size: 18px;
            line-height: 1.6;
            margin-top: 20px;
        }
        .content p {
            margin: 5px 0;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-style: italic;
            color: #555;
        }
        .btn {
            margin-top: 20px;
            text-align: center;
        }
        .btn a {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border-radius: 5px;
        }
        .btn a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container">
        <center>
            <h1>Perpustakaan Universitas Prabu Siliwangi</h1>
            <h3>Pendaftaran Anggota Secara Online</h3>
            <h5><i>Jl. Antapani Antara cinta tapi teu wani no.20</i></h5>
            <hr>
        </center>

        <div class="content">
            <h2>**** BUKTI PENDAFTARAN ****</h2>
            <?php
            $nama = $_POST['nama'];
            $prodi = $_POST['programstudi'];
            $nim = $_POST['nim'];
            $tempat = $_POST['tempatlahir'];
            $tgl = $_POST['tanggallahir'];
            $bln = $_POST['bulanlahir'];
            $thn = $_POST['tahunlahir'];
            $jenis = $_POST['jk'];
            $alamat = $_POST['alamat'];
            $telp = $_POST['telp'];

            // Format Jenis Kelamin
            if ($jenis == '1') {
                $jk = 'Laki-laki';
            } else {
                $jk = 'Perempuan';
            }

            // Menampilkan data yang diinput
            echo "<p><strong>Tanggal Cetak</strong> : " . date("D - d/m/y") . "</p>";
            echo "<p><strong>Nama Lengkap</strong>  : $nama</p>";
            echo "<p><strong>NIM</strong>           : $nim</p>";
            echo "<p><strong>Program Studi</strong> : $prodi</p>";
            echo "<p><strong>TTL</strong>           : $tempat - $tgl/$bln/$thn</p>";
            echo "<p><strong>Jenis Kelamin</strong> : $jk</p>";
            echo "<p><strong>Alamat</strong>        : $alamat</p>";
            echo "<p><strong>No. Telpon</strong>    : $telp</p>";
            ?>
        </div>

        <div class="btn">
            <a href="latihan2.php"><<< Input Lagi</a>
        </div>

        <hr>
        <div class="footer">
            <marquee direction="right">
                --Pendaftaran Anggota Perpustakaan secara Online--
            </marquee>
        </div>
    </div>

</body>
</html>
