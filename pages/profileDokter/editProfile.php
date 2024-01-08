<?php
include("../../config/koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idDokter = $_POST['idDokter'];
    $nama = $_POST["nama"];
    $no_hp = $_POST["no_hp"];
    $password = md5($_POST["password"]);
    $newPassword = md5($_POST["newPassword"]);
    $alamat = $_POST['alamat'];

    $dataDokter = mysqli_query($mysqli, "SELECT * FROM dokter WHERE id = '$idDokter'");
    $getDataDokter = mysqli_fetch_assoc($dataDokter);

    if ($password != $getDataDokter['password']) {
        echo '<script>alert("Password tidak sesuai");window.location.href="../../profileDokter.php"</script>';
    }
    else {
        $query = "UPDATE dokter SET 
        nama = '$nama', 
        no_hp = '$no_hp',
        password = '$newPassword',
        alamat = '$alamat'
        WHERE id = '$idDokter'";

    if (mysqli_query($mysqli, $query)) {
        echo '<script>';
        echo 'alert("Data dokter berhasil diubah!, silahkan Login kembali");';
        echo 'window.location.href = "../../login.php";';
        echo '</script>';
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
    }
    }
}

mysqli_close($mysqli);
?>