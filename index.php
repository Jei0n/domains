<?php
$serverName = "localhost";
$userName = "root";
$password = "root";
$dbName = "demo";

$link = new mysqli($serverName,$userName,$password,$dbName);
if($link->connect_error)
    die ("Ошибка подключения" . $link->connect_error);
$sql = "DELETE FROM person WHERE first_name='Ron'";
if($link->query($sql))
{
    echo "Запись успешно обновлена";
}else{
    echo "ОШИБКА: не удалось выполнить %sql. " . $link->error;
}
$link->close();
