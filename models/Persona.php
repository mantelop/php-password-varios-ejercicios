<?php

declare(strict_types = 1);

class Persona {
  public string $nombre = 'Desconocido';
  public string $pais = '';
  public int $edad;

  public function __construct(?string $name, ?int $edad)//por defecto es publico, el ? nos permite que pueda haber un null
  {
    $this->nombre = $name??'jaja';
    $this->edad = $edad??0;
  }

  function __toString()
  {
    return join(',', [$this->nombre, $this->pais, $this->edad]);
  }

  public function getEdad () : int {
    return $this->edad;
  }
}