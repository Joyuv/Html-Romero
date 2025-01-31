<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
    <input placeholder="Cole aqui o link da imagem."name="img"type="text">
    </form>
    <?php
    $img = $_GET['img'];
    if (isset($img)){
        session_start();
        $_SESSION['imagem'] = [];
        $_SESSION['imagem'][] = $img;
        }
    ?>
</body>
</html>