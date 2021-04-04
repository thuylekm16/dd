<?php
session_start();
if (isset($_SESSION['user'])) {
    require_once('database/mysql.php');
    if (isset($_POST['title'])) {
       $title = $_POST['title'];
       $content = $_POST['content'];
       $date = date('Y-m-d H:m:s');
       $user = $_SESSION['user']['id'];
       $query = "INSERT INTO posts(title, content, create_at,user_id) VALUES ('$title','$content','$date','$user')";
       $connect = connect();
       $result = $connect->query($query);
       header('location:index.php');
    }
} else {
    header('location:login.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Diễn đàn</title>
    <link href="/template/css/global/style.css" rel="stylesheet" type="text/css">
    <link href="/template/css/global/header.css" rel="stylesheet" type="text/css">
    <link href="/template/css/global/footer.css" rel="stylesheet" type="text/css">
    <link href="/template/css/page/post.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
require_once('components/header.php');
?>

<div class="body">
    <div class="post-content">
        <form action="" method="post">
            <div class="title-input">
                <label>Tiêu đề bài viết</label>
                <input type="text" name="title">
            </div>
            <textarea id="editor1" name="content"></textarea>
            <button type="submit">Lưu</button>
        </form>
    </div>
</div>

<?php
require_once("components/footer.php");
?>
<script src="/template/library/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1');
</script>
</body>
</html>
