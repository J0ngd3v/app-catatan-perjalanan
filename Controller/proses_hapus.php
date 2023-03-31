<?php
session_start();
include "../config.php";
$id = $_GET['id'];
$query = "DELETE  FROM perjalanan WHERE id_perjalanan=$id";
$hapus = mysqli_query($konek , $query);
if(mysqli_affected_rows($konek)>0){
    $_SESSION['kondisi'] = "Berhasil Hapus";
    header("Location: ../dashboard/mynote.php");
}