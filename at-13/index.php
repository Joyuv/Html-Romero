<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="linksg" class="cabe1">
        <a style="color: rgb(77, 148, 255);" href="https://www.globo.com/">globo.com </a><a style="color: darkred;" href="./index.html">g1 </a><a style="color: green;" href="https://ge.globo.com/">ge </a><a style="color:darkorange;" href="https://gshow.globo.com/">gshow </a><a style="color: red;" href="https://globoplay.globo.com/?origemId=92434">globoplay </a><a style="color: rgb(45, 45, 99);" href="https://g1.globo.com/jornal-nacional/">jornal nacional </a><a style="color:darkblue;"href="https://oglobo.globo.com/">o globo</a>
    </div>
    <div id="midcabe" class="midcabe">
        <img id="menu-img"src="img/hamburger.png" alt=""><span id="menu">MENU</span><span id="g1">g1</span> <form action=""><input placeholder="BUSCAR" type="text" name="buscar"></form>
    </div>
    <div id="bottcabe">
        <img src="img/menu.png" alt=""><span>Eleições</span>
    </div>
    <?php
    $buscar = $_GET['buscar'];
    header('Location: https://g1.globo.com/busca/?q='. $buscar);
    ?>
</body>
</html>