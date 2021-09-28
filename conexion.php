<?php
$mysqli = new mysqli("sql212.epizy.com", "epiz_29892583", "rkITs5jxg9Z97fs", "epiz_29892583_empresa");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}