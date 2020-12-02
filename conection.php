<?php
$con = new mysqli('localhost:3306', 'root', '', 'sistemarpg');
if ($con->connect_error) {
    die('Não foi possível conectar: ' . $con->connect_error);
}
?>