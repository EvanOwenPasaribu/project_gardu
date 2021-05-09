<?php

if(isset($_POST['add_user'])) {
    add_user();
}

function add_user() {
    $con=mysqli_connect ("localhost", 'root', '','demo');
    if (!$con) {
        die('Not connected : ' . mysqli_connect_error());
    }
    $nama = $_POST['nama'];
    $email =$_POST['email'];
    $nomor = $_POST['nomor_hp'];
    $jenisKelamin = $_POST['jenis_kelamin'];
    $alamat =$_POST['alamat'];
    $password =$_POST['password'];

    // Inserts new row with place data.
    $query = sprintf("INSERT INTO users " .
        " (id, nama, email, nomor_hp, jenis_kelamin, alamat, password) " .
        " VALUES (NULL, '%s', '%s', '%s', '%s', '%s', '%s');",
        mysqli_real_escape_string($con,$nama),
        mysqli_real_escape_string($con,$email),
        mysqli_real_escape_string($con,$nomor),
        mysqli_real_escape_string($con,$jenisKelamin),
        mysqli_real_escape_string($con,$alamat),
        mysqli_real_escape_string($con,$password));


    $result = mysqli_query($con,$query);

    if (!$result) {
        die('Invalid query: ' . mysqli_error($con));
    }else {
        echo "Inserted Successfully";
    }
}

?>