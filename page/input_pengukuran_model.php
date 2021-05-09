<?php

var_dump($_POST);

echo ("<script>alert('Yes')</script>");

if(isset($_POST['add_pengukuran'])) {
    add_pengukuran();
}

function add_pengukuran() {
    echo ("<script>alert('Yes')</script>");

    $con=mysqli_connect ("localhost", 'root', '','demo');
    if (!$con) {
        die('Not connected : ' . mysqli_connect_error());
    }
    $kode = $_POST['kode'];
    $tanggal =$_POST['tanggal'];
    $waktu = $_POST['waktu'];
    $tim = $_POST['tim'];
    $daya = $_POST['daya'];
    $alamat = $_POST['alamat'];
    $indukN = $_POST['indukN'];
    $jurusanA = $_POST['jurusanA'];
    $jurusanAR = $_POST['jurusanAR'];
    $jurusanAS = $_POST['jurusanAS'];
    $jurusanAT = $_POST['jurusanAT'];
    $jurusanAN = $_POST['jurusanAN'];
    $jurusanB = $_POST['jurusanB'];
    $jurusanBR = $_POST['jurusanBR'];
    $jurusanBS = $_POST['jurusanBS'];
    $jurusanBT = $_POST['jurusanBT'];
    $jurusanBN = $_POST['jurusanBN'];
    $jurusanC = $_POST['jurusanC'];
    $jurusanCR = $_POST['jurusanCR'];
    $jurusanCS = $_POST['jurusanCS'];
    $jurusanCT = $_POST['jurusanCT'];
    $jurusanCN = $_POST['jurusanCN'];
    $teganganRS = $_POST['teganganRS'];
    $teganganRT = $_POST['teganganRT'];
    $teganganST = $_POST['teganganST'];
    $teganganRN = $_POST['teganganRN'];
    $teganganSN = $_POST['teganganSN'];
    $teganganTN = $_POST['teganganTN'];

    // Inserts new row with place data.
    $query = sprintf("INSERT INTO pengukuran " .
        " (id, kode, tanggal, waktu, tim, daya_gardu,alamat, indukN, 
        jurusanA, jurusanAR, jurusanAS, jurusanAT, jurusanAN,
        jurusanB, jurusanBR, jurusanBS, jurusanBT, jurusanBN,
        jurusanC, jurusanCR, jurusanCS, jurusanCT, jurusanCN,
        teganganRS, teganganRT, teganganST, teganganRN, teganganSN, teganganTN)" .
        " VALUES (NULL, '%s', '%s', '%s', '%s', '%s', '%s' , '%s', 
        '%s', '%s', '%s', '%s', '%s',
        '%s', '%s', '%s', '%s', '%s',
        '%s', '%s', '%s', '%s', '%s',
        '%s', '%s', '%s', '%s', '%s', '%s');",
        mysqli_real_escape_string($con,$kode),
        mysqli_real_escape_string($con,$tanggal),
        mysqli_real_escape_string($con,$waktu),
        mysqli_real_escape_string($con,$tim),
        mysqli_real_escape_string($con,$daya),
        mysqli_real_escape_string($con,$alamat),
        mysqli_real_escape_string($con,$indukN),
        mysqli_real_escape_string($con,$jurusanA),
        mysqli_real_escape_string($con,$jurusanAR),
        mysqli_real_escape_string($con,$jurusanAS),
        mysqli_real_escape_string($con,$jurusanAT),
        mysqli_real_escape_string($con,$jurusanAN),
        mysqli_real_escape_string($con,$jurusanB),
        mysqli_real_escape_string($con,$jurusanBR),
        mysqli_real_escape_string($con,$jurusanBS),
        mysqli_real_escape_string($con,$jurusanBT),
        mysqli_real_escape_string($con,$jurusanBN),
        mysqli_real_escape_string($con,$jurusanC),
        mysqli_real_escape_string($con,$jurusanCR),
        mysqli_real_escape_string($con,$jurusanCS),
        mysqli_real_escape_string($con,$jurusanCT),
        mysqli_real_escape_string($con,$jurusanCN),
        mysqli_real_escape_string($con,$teganganRS),
        mysqli_real_escape_string($con,$teganganRT),
        mysqli_real_escape_string($con,$teganganST),
        mysqli_real_escape_string($con,$teganganRN),
        mysqli_real_escape_string($con,$teganganSN),
        mysqli_real_escape_string($con,$teganganTN)
    );


    $result = mysqli_query($con,$query);
    echo"Inserted Successfully";
    if (!$result) {
        die('Invalid query: ' . mysqli_error($con));
    }
}

?>