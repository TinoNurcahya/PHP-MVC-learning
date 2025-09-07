<?php
if (!session_id()) session_start();

require_once '../app/init.php';

$app = new App;


/*
=====> Mengecek apakah session sudah berjalan.
Meng-include file app/init.php, yang =====> biasanya akan meng-include semua class core (App.php, Controller.php, dsb).
Meng-include file app/init.php, yang =====> Membuat instance App (router utama).
*/