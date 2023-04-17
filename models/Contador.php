<?php

class Contador {
    private int $valor;

    public function __construct(?int $numActual) {
        $this->valor = $numActual??0;
    }

    public function incrementar() {
        $this->valor++;
    }

    public function decrementar() {
        $this->valor--;
    }

    public function getValor() :int {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }
}

