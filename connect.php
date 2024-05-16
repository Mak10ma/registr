<?php
$connect = mysqli_connect('sas', 'root', '','sas');
if (!$connect) {
    die('Error connect to DB!!!');
}