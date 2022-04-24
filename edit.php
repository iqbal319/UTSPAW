<?php 

require "function.php";
$id = $_POST["id"];
$nama = $_POST["nama"];
$email = $_POST["email"];
$alamat = $_POST["alamat"];
stmt("UPDATE tbl_iqbal SET 
        nama_iqbal = '$nama',
        email_iqbal = '$email',
        alamat_iqbal = '$alamat'
        WHERE id_iqbal = $id;");


if(rowCount() > 0){
    echo "<script>
    alert('Data berhasil di edit');
    document.location.href = 'index.php';
    </script>";
}else{
    error();
}

