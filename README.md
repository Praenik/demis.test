# Тестовое задание для Demis Group
Задание расположено по адресу `prae.knaaru.ru`

Для запуска необходимо скопировать файл `db_connect.php.example` в `db_connect.php` и вписать свои настройки подключения:
```
$db_host = "localhost";
$db_user = "root";
$db_password = "root";
$db_base = "dbname";
$db = new PDO("mysql:host=$db_host;dbname=$db_base;charset=UTF8", $db_user, $db_password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
```
