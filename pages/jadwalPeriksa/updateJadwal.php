<?php
include '../../config/koneksi.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $status = $_POST["status"];

    // Modify the query to include 'status' only
    $query = "UPDATE jadwal_periksa SET status = '$status' WHERE id = '$id'";

    if (mysqli_query($mysqli, $query)) {
        echo '<script>';
        echo 'alert("Jadwal berhasil diubah!");';
        echo 'window.location.href = "../../jadwalPeriksa.php";';
        echo '</script>';
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
    }
}

mysqli_close($mysqli);
?>
