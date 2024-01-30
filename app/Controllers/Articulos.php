<?php

namespace App\Controllers;
use App\Models\ArticulosModel;

class Articulos extends BaseController
{
    // public function crear():string
    // {
    //     helper('form');
    //     return view('templates/head').view('templates/header').view('crear_articulo').view('templates/footer');
    // }
    //  public function guardar()
    //  {


        //  helper('form');

        //  $datos_validacion = [
        //      'nombre'=>'required',
        //      'marca'=>'required',
        //      'precio'=>'required'
        //  ];



        //  if(!$this->validate($datos_validacion)){//se validan los datos, si no estan regresa al form de crear
        //      return $this->alta_articulo();
        //  }

    //  }
    public function alta_articulo()//:string esto tengo que borrarlo porque no retornada un string
    {
        $session = session();
        $id=$session->get('id');
        $data['xd']='usuariosxd';
        $modelo= model(ArticulosModel::class);
        $modelo->where('id_usuario !=', $id);
        $data['articulos']= $modelo->findAll();
        $data['titulo']='listado de articulos';
        if(!$session->get('usuario')){
            return redirect()->to(base_url('/Area/bienvenida'));
        }else{
            helper('form');//para poder utilizar las funciones de vali del formulario



            $data['xd']='usuariosxd';
            return view('templatesbyjordan/header',$data).view('alta_articulos',$data);
        }
        
    }




    public function ver(): string
    {
        $data['xd']='usuariosxd';
        return view('templates/header',$data).view('Ver_articulo');
    }

/*************GUARDAR ARTICULO NUEVO***************/

     public function guardar():string{
        $session = session();
        $id=$session->get('id');
        $cantidad = $this->request->getPost('cantidad');
        $articulo = $this->request->getPost('articulo');
        $descripcion = $this->request->getPost('descripcion');
        $precio = $this->request->getPost('precio');
        $imagen=$this->request->getFile('imagen');
        $imagen2=$this->request->getFile('imagen2');
      //   var_dump($imagen2->getName());exit;
        
        $nombreImagen=$imagen->getRandomName();
        
      //   echo $nombreImagen;
      //   echo $imagen2;
        $imagen->move('../public/imagenes',$nombreImagen);
        if($imagen2->getName()!=""){
         $nombreImagen2=$imagen2->getRandomName();
         $imagen2->move('../public/imagenes',$nombreImagen2);
         $datos=['id_usuario'=>$id,'cantidad'=>$cantidad, 'articulo'=>$articulo,'descripcion'=>$descripcion,'precio'=>$precio,'imagen'=>$nombreImagen, 'imagen2'=>$nombreImagen2];
        }else{
         $datos=['id_usuario'=>$id,'cantidad'=>$cantidad, 'articulo'=>$articulo,'descripcion'=>$descripcion,'precio'=>$precio,'imagen'=>$nombreImagen];
        }
        

        //  echo $nombre;
        // echo $datos['nombre'].' '.$articulo['articulo'].' '.$datos['precio'];
        //esto comentado es para guardar a la base de datos
        $modelo= model(ArticulosModel::class);
        $modelo->save($datos);


        $modelo2 = model(ArticulosModel::class);
        $modelo2->where('id_usuario', $id);
        $data['articulos']= $modelo2->findAll();

        return view('templatesbyjordan/header',$data).view('area_usuario',$data);
        //$imagen->getName();
         
        //  $imagen=$this->request->getFile('imagen');
        //  $nombreImagen=$imagen->getRandomName();
         //$imagen->move('../public/imagenes',/*$imagen->getName(); o tambien se puede poner $nombreImagen esto le da un nombre aletorio*//*'prueba.jpg'*///$nombreImagen);
        //echo $imagen;
     }

     /*********************************************/

     public function ver_productos() {
        $session = session();
        $id=$session->get('id');
        $data['xd']='usuariosxd';
        $modelo= model(ArticulosModel::class);
        $modelo->where('id_usuario !=', $id);
        $data['articulos']= $modelo->findAll();
        $data['titulo']='listado de articulos';
        // view('templates/header', $data).
        return view('templatesbyjordan/header', $data).view('ver_articulo', $data);


     }


     public function buscar_producto(){

        $search = $this->request->getPost('search');

        $session = session();
        $id=$session->get('id');
        $data['xd']='usuariosxd';
        $modelo= model(ArticulosModel::class);
        $modelo->where('id_usuario !=', $id);


        if (!empty($search)) {//el if es para comprobar que el search no este vacio, esto si es buena idea lo dejare
            $modelo->groupStart()
                ->like('descripcion', $search)
                ->orLike('articulo', $search)
                ->groupEnd();
        }


        /*esto sera para cuando se encuentre la palabra lanzada por lo menos
        en descripcion o articulo*/

        $data['articulos']= $modelo->findAll();
        $data['titulo']='listado de articulos';
        // view('templates/header', $data).
        return view('templatesbyjordan/header', $data).view('ver_articulo', $data);
     }

     
     public function eliminar(){
        $modelo= model(ArticulosModel::class);
        $id = $this->request->getGet('bye');

        $modelo->where('id', $id)->delete(); 

        $session=session();

        if(!$session->get('usuario')){

         return view('area_principal');

        }else{

         $modelo2 = model(ArticulosModel::class);
         $modelo2->where('id_usuario', $session->get('id'));
         $data['articulos']= $modelo2->findAll();
         return view('templatesbyjordan/header',$data).view('area_usuario',$data);
        }
     }


     public function more(){
      $id = $this->request->getGet('bye');

      $session=session();
      $modelo2 = model(ArticulosModel::class);
      $modelo2->where('id', $id);
      $data['articulos']= $modelo2->findAll();
     

      
      return view('templatesbyjordan/header').view('ver_producto',$data);


     }

     /*********************************************/

     public function mostrarTodo(){
        $data['xd']='usuariosxd';
        $modelo = model(ArticulosModel::class);
        $data['articulos']= $modelo->findAll();
        $data['titulo']='listado de articulos';
        return view('templates/header', $data).view('articulos');
     }
     public function mostrar($id_articulo){
        $modelo = model(ArticulosModel::class);
        $articulo= $modelo->find($id_articulo);
        $data['titulo']= 'detalle de articulos';
        return view('template/header').view('articulo');
     }

     public function prueba() {
        return view('ajax');
     }

     public function pruebaAjax() {
        return "funciona";
     }
}
