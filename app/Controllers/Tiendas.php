<?php

namespace App\Controllers;

class Tiendas extends BaseController
{
    public function verTienda() 
    {
        $session=session();
        // echo $session->get('usuario');
        if(!$session->get('usuario')){
            return redirect()->to(base_url('/Usuarios/logg'));
        }else{
            
            $data['xd']='usuarios';
            return view('templates/header',$data).view('ver_tiendas');
        }
    }
}
