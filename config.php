<?php


define('hostdb' , 'localhost');
define('userdb' , 'root');
define('passdb' , '');
define('namadb' , 'catatan_perjalanan');

$konek = mysqli_connect(hostdb,userdb,passdb,namadb);
$css = 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css';
$sweetcss = ' https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css';
$sweetjs = 'https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js';

