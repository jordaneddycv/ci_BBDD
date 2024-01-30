<?php

namespace App\Controllers;
use App\Models\ArticulosModel;

class Area extends BaseController
{
    public function bienvenida()
    {

        $modelo3 = model(ArticulosModel::class);
        $modelo3->limit(3); // Reemplaza 'id' y 1 con tu condición real
        $data['articulos'] = $modelo3->findAll();
        // $session=session();
        // echo $session->get('usuario');
        // if(!$session->get('usuario')){
        //     return redirect()->to(base_url('/Usuarios/logg'));
        // // }else{
        //     var_dump($data);exit;
            return view('area_principal',$data);
        // }

        
    }
}