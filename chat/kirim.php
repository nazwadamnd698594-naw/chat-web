<?php
session_start();
require "kdb.php";

if (isset($_SESSION['id_users']) && isset($_POST['pesan'])) {
    $id_user = $_SESSION['id_users'];
    $nama = $_SESSION['nama'];
    $pesan = trim($_POST['pesan']);

    if ($pesan !== '') {
        $sql = "INSERT INTO pesan (id_user, nama, isi, waktu) VALUES ('$id_user', '$nama', '$pesan', NOW())";
        mysqli_query($kdb, $sql);
    }
}
?>
