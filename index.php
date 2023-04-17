<?php

  require_once('./models/Contador.php');

  $contador = new Contador($_REQUEST['salida']??0);

  if (isset($_POST['incrementar'])) {
    $contador->incrementar();
  }
  if (isset($_POST['decrementar'])) {
    $contador->decrementar();
  }
?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercico Contador</title>
</head>
<body>
  <h1>Contador PHP</h1>
  <form method="post">
    Valor<input type="text" name="salida" value = "<?php echo $contador->getValor(); ?>">
    <button type="submit" name="incrementar">Incrementar</button>
    <button type="submit" name="decrementar">Decrementar</button>
  </form>
</body>
</html>

