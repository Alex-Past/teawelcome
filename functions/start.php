<?php
    function start() {
        // Параметры подключения
        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $dbName = 'characters';

        // Установка локали
        setlocale(LC_ALL, "ru_RU.UTF-8");

        // Подключение к базе данных через MySQLi
        $conn = mysqli_connect($hostname, $username, $password, $dbName);

        // Проверка на успешное подключение
        if (!$conn) {
            die('Connection failed: ' . mysqli_connect_error());
        }

        // Установка кодировки для соединения
        mysqli_set_charset($conn, "utf8");

        // echo "Connected successfully!";
        return $conn; // Возвращаем объект подключения для дальнейшего использования
    }
?>
    