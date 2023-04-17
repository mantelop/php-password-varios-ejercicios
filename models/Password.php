<?php
class Password {
  private $longitud;
  private $contraseña;

  public function __construct($longitud=8) {
    $this->longitud = $longitud;
    $this->contraseña = $this->generarPassword();
  }

  public function esFuerte() {
    $mayusculas = 0;
    $minusculas = 0;
    $numeros = 0;
    for ($i = 0; $i < strlen($this->contraseña); $i++) {
      if (ctype_upper($this->contraseña[$i])) {
        $mayusculas++;
      } elseif (ctype_lower($this->contraseña[$i])) {
        $minusculas++;
      } elseif (is_numeric($this->contraseña[$i])) {
        $numeros++;
      }
    }
    return ($mayusculas > 2 && $minusculas > 1 && $numeros > 5);
  }

  public function generarPassword() {
    $caracteres = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $contraseña = "";
    for ($i = 0; $i < $this->longitud; $i++) {
      $contraseña .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }
    return $contraseña;
  }

  public function getLongitud() {
    return $this->longitud;
  }

  public function setLongitud($longitud) {
    $this->longitud = $longitud;
    $this->contraseña = $this->generarPassword();
  }

  public function getContraseña() {
    return $this->contraseña;
  }
}


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Ejercicio Password</title>
  <link href="/css/style-pass.css" rel="stylesheet" type="text/css">
</head>
<body>
  <form method="post">
    <label for="longitud">Longitud:</label>
    <input type="number" name="longitud" id="longitud" min="1" max="50" value="35"><br>
    <input type="submit" name="submit" value="Generar Contraseña"><br>
  </form>

  <?php
  if (isset($_POST["submit"])) {
    $longitud = $_POST["longitud"];
    $contraseña = new Password($longitud);
    echo '<div class="result">';
    echo "Contraseña generada: " . $contraseña->getContraseña() . "<br>";
    if ($contraseña->esFuerte()) {
      echo '<span class="strong">La contraseña es fuerte.</span>';
    } else {
      echo '<span class="weak">La contraseña no es fuerte.</span>';
    }
    echo '</div>';
  }
  ?>
</body>
</html>

