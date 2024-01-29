<?php

namespace App\Models;
use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table = 'usuarios';
    protected $allowedFields = ['nombre','password','direccion','dni'];

    public function getArticulos(){
        return $this->findAll();
    }

}