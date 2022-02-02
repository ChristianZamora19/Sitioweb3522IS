<?php

namespace App\Models;

class Categoria
{
    public $nombre;
    public $codigo;
    public $descripcion;

    public function mostrarInformacion()
    {
        echo $this->nombre."<hr>";
        echo $this->codigo."<hr>";
        echo $this->descripcion."<hr>";
    }
}
