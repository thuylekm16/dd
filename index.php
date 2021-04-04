<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
require_once('database/mysql.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Diễn đàn</title>
    <link href="/template/css/global/style.css" rel="stylesheet" type="text/css">
    <link href="/template/css/global/header.css" rel="stylesheet" type="text/css">
    <link href="/template/css/global/footer.css" rel="stylesheet" type="text/css">
    <link href="/template/css/page/index.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php require_once('components/header.php')?>
<div class="body">
    <div class="list-post">
        <div class="list-header">
            <div class="topic">Topic</div>
            <div class="date">Date</div>
            <div class="reply">Reply</div>
            <div class="view">View</div>
        </div>
        <ul>
            <li class="">
                <div class="topic"><a href="#">Coconut Cod</a><p>by chutchut</p></div>
                <div class="date">Nov,12, 2021</div>
                <div class="reply">11</div>
                <div class="view">12323</div>
            </li>
            <li class="">
                <div class="topic"><a href="#">Coconut Cod</a><p>by chutchut</p></div>
                <div class="date">Nov,12, 2021</div>
                <div class="reply">11</div>
                <div class="view">12323</div>
            </li>
            <li class="">
                <div class="topic"><a href="#">Coconut Cod</a><p>by chutchut</p></div>
                <div class="date">Nov,12, 2021</div>
                <div class="reply">11</div>
                <div class="view">12323</div>
            </li>
            <li class="">
                <div class="topic"><a href="#">Coconut Cod</a><p>by chutchut</p></div>
                <div class="date">Nov,12, 2021</div>
                <div class="reply">11</div>
                <div class="view">12323</div>
            </li>
            <li class="">
                <div class="topic"><a href="#">Coconut Cod</a><p>by chutchut</p></div>
                <div class="date">Nov,12, 2021</div>
                <div class="reply">11</div>
                <div class="view">12323</div>
            </li>
            <li class="">
                <div class="topic"><a href="#">Coconut Cod</a><p>by chutchut</p></div>
                <div class="date">Nov,12, 2021</div>
                <div class="reply">11</div>
                <div class="view">12323</div>
            </li>
            <li class="">
                <div class="topic"><a href="#">Coconut Cod</a><p>by chutchut</p></div>
                <div class="date">Nov,12, 2021</div>
                <div class="reply">11</div>
                <div class="view">12323</div>
            </li>
        </ul>
        <div class="paginate">
            <div class="paginate-items">
                <a href="#">&laquo;</a>
                <a href="#">1</a>
                <a href="#" class="active">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#">&raquo;</a>
            </div>
        </div>

    </div>
</div>

<?php require_once('components/footer.php')?>
</body>
</html>


