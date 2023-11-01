<?php

$link = mysqli_connect ('127.0.0.1:3306', 'root', '', 'new_db');
// Проверяем соединение
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connect";
mysqli_close($link);
