<?php

namespace App\Controllers;

class Area extends BaseController
{
    public function bienvenida() 
    {
        // $session=session();
        // echo $session->get('usuario');
        // if(!$session->get('usuario')){
        //     return redirect()->to(base_url('/Usuarios/logg'));
        // }else{
            return view('area_principal');
        // }

        
    }
}