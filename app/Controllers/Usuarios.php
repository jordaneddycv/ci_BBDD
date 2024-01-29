<?php

namespace App\Controllers;
use App\Models\UsuariosModel;
use App\Models\ArticulosModel;

class Usuarios extends BaseController
{
    
    public function index(): string
    {   
        // $session = session();
        // $session->set('prueba',"Ramiro");
        //echo $session->get('prueba');
        //echo '<h1>Bienvenido '.$session->get('prueba').'</h1>';
        // exit;
        $data['xd']='USSERS';
        return view('templates/header', $data).view('registro_usuario');
    }

    public function logg(): string
    {   
        // $session = session();
        // $session->set('prueba',"Ramiro");
        //echo $session->get('prueba');
        //echo '<h1>Bienvenido '.$session->get('prueba').'</h1>';
        // exit;
        $data['xd']='USSERS';
        return view('templates/header', $data).view('logear_usuario');
    }

    public function guardar(){


        
        $nombre = $this->request->getPost('nombre');
        $password = $this->request->getPost('password');
        $direccion = $this->request->getPost('direccion');
        $dni = $this->request->getPost('dni');

        $modelo= model(UsuariosModel::class);
        $modelo->select('nombre');
        $modelo->where('nombre', $nombre);
        $resultado = $modelo->find();
       //  echo $nombre;
        //echo $datos['nombre'].' '.$datos['direccion'].' '.$datos['dni'];
       //esto comentado es para guardar a la base de datos

       if(!$resultado){
         $datos=['nombre'=>$nombre, 'password'=>$password,'direccion'=> $direccion,'dni'=> $dni ];
         $modelo->where('nombre', $nombre);
         $modelo->save($datos);
         $data['xd']='USSERS';
         return view('templates/header', $data).view('logear_usuario');
        }else{
            echo '<script>alert("El usuario ya existe.");</script>';
            $data['xd']='USSERS';
            return view('templates/header', $data).view('logear_usuario');
        }
       //$imagen->getName();
        
        // $imagen=$this->request->getFile('imagen');
        // $nombreImagen=$imagen->getRandomName();
        //$imagen->move('../public/imagenes',/*$imagen->getName(); o tambien se puede poner $nombreImagen esto le da un nombre aletorio*//*'prueba.jpg'*/$nombreImagen);
       //echo $imagen;
    }

    public function mostrarTodo(){
        $data['xd']='usuariosxd';
        $modelo2 = model(ArticulosModel::class);
        $data['articulos']= $modelo2->findAll();
        $data['titulo']='listado de articulos';
        return view('templates/header', $data).view('articulos');
     }

    public function check(){
        
        


        $email = $this->request->getPost('email');
        $password=$this->request->getPost('pass');
        $modelo= model(UsuariosModel::class);
        $modelo->select('id,nombre, password');
        // $modelo->select('nombre , dni');  
        // $articulo = $modelo->find();
        // print_r($articulo);
        // echo $email;
        $modelo->where('nombre', $email);
        $modelo->where('password', $password);
        
        $resultado = $modelo->find();
        
        // $primerResultado = reset($resultado);

        // $xd=$id;
        // echo $xd;exit;
        // if($email==$resultado[0]['nombre'] && $password==$resultado[0]['password']){
        if($resultado){
            $id = $resultado[0]['id'];

            $modelo2 = model(ArticulosModel::class);
            $modelo2->where('id_usuario', $id);
            $data['articulos']= $modelo2->findAll();

            $session = session();
            $session->set('usuario', $email);
            $session->set('id', $id);
            $usuario = $session->get('usuario');
            // echo $usuario;
            // echo $session->get('id');
            return view('area_usuario',$data);
            
        }else{
            return view('area_principal');
        }

        // $articulo = $modelo->find(2);
        // echo 'Nombre: ' . $articulo['nombre'];
        // echo '<br>';
        // echo 'Direccion: ' . $articulo['direccion'];

    }

    public function usser(){
        $session=session();
        if(!$session->get('usuario')){
            return redirect()->to(base_url('/Area/bienvenida'));
        }else{
            $modelo2 = model(ArticulosModel::class);
            $modelo2->where('id_usuario', $session->get('id'));
            $data['articulos']= $modelo2->findAll();

            $data['xd']='usuariosxd';
            $session->get('usuario');
            $session->get('id');//esto creo que no lo necesita pero por si acaso lo mando igualxd
            return view('area_usuario',$data);
        }
    }

    public function deslogar()
    {   
        $session=session();
        $session->destroy();
        return redirect()->to(base_url('area/area_principal'));
    }
}
