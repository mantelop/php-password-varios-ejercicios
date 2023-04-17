<?php

class Cancion {
    private string $titulo;
    private string $autor;
    
    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }
    
    public function dameTitulo() : string {
        return $this->titulo;
    }
    
    public function dameAutor() : string {
        return $this->autor;
    }
    
    public function ponTitulo(string $titulo) {
        $this->titulo = $titulo;
    }
    
    public function ponAutor(string $autor) {
        $this->autor = $autor;
    }
}

class CD {
    private $canciones;
    private $contador;
    
    public function __construct() {
        $this->canciones = array();
        $this->contador = 0;
    }
    
    public function numeroCanciones() {
        return $this->contador;
    }
    
    public function dameCancion($posicion) {
        return $this->canciones[$posicion];
    }
    
    public function grabaCancion($posicion, $cancion) {
        $this->canciones[$posicion] = $cancion;
    }
    
    public function agrega($cancion) {
        $this->canciones[$this->contador] = $cancion;
        $this->contador++;
    }
    
    public function elimina($posicion) {
        unset($this->canciones[$posicion]);
        $this->contador--;
    }
}

// Crear un objeto CD
$mi_cd = new CD();

// Crear algunas canciones
$cancion1 = new Cancion("dsfkjdasf", "Queen");
$cancion2 = new Cancion("adsfasfasdfasdfas", "Metallica");
$cancion3 = new Cancion("yo que se jajaja", "Azucar moreno");

// Agregar las canciones al CD
$mi_cd->agrega($cancion1);
$mi_cd->agrega($cancion2);
$mi_cd->agrega($cancion3);

// Obtener el número de canciones en el CD
$num_canciones = $mi_cd->numeroCanciones();
echo "El CD tiene $num_canciones canciones.\n";

// Obtener la primera canción del CD
$primera_cancion = $mi_cd->dameCancion(0);
echo "La primera canción es '{$primera_cancion->dameTitulo()}' de {$primera_cancion->dameAutor()}.\n";


?>





