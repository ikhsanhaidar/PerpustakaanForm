<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
</head>
<body>
    <form action="bukti.php" method="post">
        <center>
    <h1>Perpustakaan Universitas Prabu Siliwangi</h1>
    <h3>pendaftaran Anggora secara Online </h3>
    <h5><i>Jl. Antapani Antara cinta tapi teu wani no.20 <br></i></h5>
    <hr color="red">
        </center><p><pre>

            Nama Lengkap    :     <input type="text" name="nama" size="35" maxlength="30"><br>
            Program Studi   :     <select name="programstudi" >
                <!-- foreach -->
            <?php
                $prodi = ["Teknik Informatika", "Sistem Informasi", "Manajemen", "Akuntansi", "Teknik Sipil"];
                foreach($prodi as $program) {
                    echo "<option value='$program'>$program</option>";
                }
                ?>
            </select><br>
            NIM             :     <input type="text" name="nim" size="20" maxlength="10"><br>
            TTL             :     <input type="text" name="tempatlahir" size="20" maxlength="20"> <select size="1" name="tanggallahir">

                <?php
                for($i=1;$i<=31;$i++)
                {
                    echo"<option value=$i>$i</option>";
                }
                ?>
                </select> <select size="1" name="bulanlahir">
                    <option>Januari
                    <option>Februari
                    <option>Maret
                    <option>April
                    <option>Mei
                    <option>Juni
                    <option>July
                    <option>Agustus
                    <option>September
                    <option>Oktober
                    <option>November
                    <option>Desember
            </select> <input type="text" name="tahunlahir" size="10" maxlength="4" value="2009"><br>
            Jenis Kelamin   :    <input type="radio" name="jk" value="1">Laki-laki<input type="radio" name="jk" value="p">Perempuan<br>
            Alamat          :    <textarea name ="alamat" rows=3 cols=35 wrap="on"></textarea><br>
            No. Telp.       :    <input type="text" name="telp" size="15" maxlength="15"><br><pre?>
                <input type="submit" value="KIRIM"> <input type="reset" value="BERSIH">

 
</pre>
</form>
<hr color="red">
<marquee direction="right">
    <i>--Pendaftaran Anggota Perpustakaan secara Online--</i>
</marquee>
</body>
</html>