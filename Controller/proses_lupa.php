<?php
include "../config.php";
if(isset($_POST['lupa'])){
    $akun = $_POST['akun'];
    header("location: https://wa.me/+6281225599141?text=Saya Lupa password dengan nik $akun , tolong di reset password saya. Terima Kasih");

}
