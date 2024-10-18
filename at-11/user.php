<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="styleuser.css">
</head>
<body>
  <?php
  session_start();
  ?>
  <div id="sidebar" align="left">
  <?php
  $img = $_SESSION['imagem'][0];
  ?>
  <a href="#" onclick="window.open('./popup.php', 'Imagem', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=200, HEIGHT=100');">
        <div class="img"><?php echo("<img src='". $img. "' alt='Foto de perfil'>")?></a></div>
        <h3><?php echo($_SESSION['usuario'][0])?></h3>
    </div>
    <a href="index.php"><button name="butao">TOME</button></a>
    <?php $is = $_GET['butao'];
    if (isset($is)){
      $_SESSION['usuario'][0] = null;
    }?>
    
</body>
</html>