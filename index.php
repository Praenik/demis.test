<? session_start(); ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <title>Тестовое задание. Demis Group</title>
</head>

<body>

    <? include_once 'templates/nav.php'; ?>
    <div class="page">
        <form action="php/feedback_form.php" method="post" class="feedback_form">
            <h1 class="feedback_title">Обратная связь</h1>
            <input class="feedback_input" type="text" name="name" id="name" placeholder="ФИО" autocomplete="none" required>
            <input class="feedback_input" type="text" name="address" id="address" placeholder="Адресс" autocomplete="none" required>
            <input class="feedback_input" type="tel" name="telephone" id="telephone" placeholder="Телефон" autocomplete="none" required>
            <input class="feedback_input" type="email" name="email" id="email" placeholder="E-mail" autocomplete="none" required>
            <p class="feedback_input_error" id="email_error"></p>
            <button class="feedback_btn" type="submit" name="send_form" value="send">Отправить</button>
        </form>
    </div>

    <div class="feedback_table">
        <?php
        include_once 'php/db_connect.php';
        $db_table = 'feedback';
        $messages = $db->query("SELECT name, address, telephone, email FROM $db_table");
        foreach ($messages as $message):
        ?>
        <div class="feedback_row">
            <div class="feedback_cell" id="cell_name"><?=$message['name']?></div>
            <div class="feedback_cell" id="cell_address"><?=$message['address']?></div>
            <div class="feedback_cell" id="cell_telephone"><?=$message['telephone']?></div>
            <div class="feedback_cell" id="cell_email"><?=$message['email']?></div>
        </div>
        <? endforeach; ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>