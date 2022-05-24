<?php

include('lib/dbconnect.php');

$id_gambar = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$pesan = $_POST['message'];

$proses = mysqli_query($koneksi, "INSERT INTO `tb_komentar` (id_gambar, nama,  email, sub, komentar) VALUES ('" . $id_gambar . "','" . $name . "', '" . $email . "', '" . $subject . "', '" . $pesan . "')") or die(mysqli_error($koneksi));

if ($proses) {
    echo "<script>alert ('Thank You')</script>";
} else {
    echo "<script>alert ('Sorry :(')</script>";
}

echo "<script>window.location.href='post-details.php?id=" . $id_gambar . "'</script>";
