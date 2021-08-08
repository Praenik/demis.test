<?php
session_start();

include_once 'db_connect.php';
$db_table = 'feedback';
$address_site = "http://demis";

$name = $_POST['name'];
$address = $_POST['address'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];

$telephoneRegexp = '/\+7 \(\d{3}\) \d{3}(-)\d{2}(-)\d{2}/i';
$emailRegexp = '/.+@.+\..+/i';

if (isset($_POST['send_form']) && !empty($_POST['send_form']))
    if (strlen($name) >= 0)
        if (strlen($address) >= 0)
            if (strlen($telephone) >= 0 && preg_match($telephoneRegexp, $telephone))
                if (strlen($email) >= 0 && preg_match($emailRegexp, $email)) {
                    $data = array('name' => $name, 'address' => $address, 'telephone' => $telephone, 'email' => $email);
                    $query = $db->prepare("INSERT INTO $db_table (name, address, telephone, email) VALUES (:name, :address, :telephone, :email)");
                    $query->execute($data);
                    header("HTTP/1.1 301 Moved Permanently");
                    header("Location: ".$address_site);
                }
                else echo 'Вы ввели не правильный E-mail.';
            else echo 'Вы ввели не правильный телефон.';
        else echo 'Вы не ввели адрес.';
    else echo 'Вы не ввели имя.';
else echo 'Вы пререшли на эту страницу, не заполнив форму.';