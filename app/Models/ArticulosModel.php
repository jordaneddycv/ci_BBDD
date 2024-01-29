<?php

namespace App\Models;
use CodeIgniter\Model;

class ArticulosModel extends Model
{
    protected $table = 'productos';
    protected $allowedFields = [
    'id_usuario',
    'cantidad',
    'articulo',
    'descripcion',
    'precio',
    'imagen',
    'imagen2'];

    public function getArticulos(){
        return $this->findAll();
    }

    

}