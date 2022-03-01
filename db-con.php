<?php ob_start();

$connection = mysqli_connect('localhost', 'root', '', 'csedu_db');
mysqli_query($connection, "set charset utf8");
