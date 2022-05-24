<?php

include('lib/dbconnect.php');

$nama = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$pesan = $_POST['message'];

$proses = mysqli_query($koneksi, "INSERT INTO `contact` (nama,  email, sub, pesan) VALUES ('" . $nama . "', '" . $email . "', '" . $subject . "', '" . $pesan . "')") or die(mysqli_error($koneksi));

if ($proses) {
    echo "<script>alert ('Thank You')</script>";
} else {
    echo "<script>alert ('Sorry :(')</script>";
}

echo "<script>window.location.href='contact.php'</script>"; 