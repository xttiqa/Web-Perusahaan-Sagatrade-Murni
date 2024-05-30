<?php
$mysqli = new mysqli("127.0.0.1", "root", "", "db_sagatrade", "3306");
if ($mysqli->connect_error) {
    die("Connection Failed" . $mysqli->connect_error);
}
?>