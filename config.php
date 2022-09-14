<?php

/* 
Konfigurasi Website ada di config.php
Seperti pengaturan footer dan lain lain.
Ini merupakan aplikasi travelling 
yaitu aplikasi catatan perjalanan saat travel
*/

define('hostdb' , 'localhost');
define('userdb' , 'root');
define('passdb' , '');
define('namadb' , 'catatan_perjalanan');

$konek = mysqli_connect(hostdb,userdb,passdb,namadb);
$css = 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css';

