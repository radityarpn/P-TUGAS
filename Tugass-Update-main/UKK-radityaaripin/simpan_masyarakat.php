<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into masyarakat set
    nik = '$_POST[NIK]',
    nama = '$_POST[NAMA_LENGKAP]',
    username = '$_POST[USERNAME]',
    password = '$_POST[PASSWORD]',
    telp = '$_POST[NOMOR_TELPON]'");
    
    echo "data telah tedaftar";
}
{
    ?>
    <script type="text/javascript">
        alert ('Daftar Berhasil, Silahkan Login');
        window.location="login.php"
    </script>
<?php
}
?>