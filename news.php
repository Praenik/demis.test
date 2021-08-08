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
        <div class="news">
            <?php
            include_once 'php/db_connect.php';
            $db_table = 'news';
            $news = $db->query("SELECT * FROM $db_table LIMIT 3");
            foreach ($news as $new):
            ?>
            <div class="news_item">
                <img src="http://placehold.it/350x150" alt="" class="news_logo">
                <h3 class="news_title"><?=$new['title'];?></h3>
                <p class="news_desc"><?=$new['description'];?></p>
                <a href="#" class="news_full">читать</a>
            </div>
            <? endforeach; ?>
        </div>
    </div>

</body>
</html>