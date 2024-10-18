<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="cradrado"></div>
    <div class="caixa">
      
      <form action=""><input name="usuario" placeholder="Usuário" type="text">
      <br>
      <input name="seinha" placeholder="Senha" type="password">
      <br>
      <button name='buscar'>Enviar</button>
    </form>
    <?php
    $pass = $_GET['seinha'];
    $user = $_GET['usuario'];
    $get = $_GET['buscar'];

    if(isset($get)){
      if($pass != ''){
        if($user != ''){

          session_start();
          header('location:./user.php');
        }
      }
    }
    ?>
    </div>
</body>
</html>