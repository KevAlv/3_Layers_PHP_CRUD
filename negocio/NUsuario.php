<?php
    include_once('../datos/DUsuario.php');
    include_once('upload_image.php');

    
    if(isset($_GET['delete_id'])){
        echo 'eliminar';
        $usuario = new NUsuario;
        $usuario->eliminar($_POST['delete_id']);
        // header("Location: ../presentacion/usuarios.php");
        die();
    }
        if (isset($_POST['nombre'])){
        uploadImage($_FILES);
        $target_file = $target_dir . basename($FILES["fileToUpload"]["name"]);
        $usuario = new NUsuario;
        $usuario->create($_POST['nombre'],$_POST['password'],$_POST['email'],$_POST['$target_file']);
       header("Location: ../presentacion/usuarios.php");
        die();
    }

  

    class NUsuario{
        private $usuario;
        
        public function __construct(){
            $this->usuario = new DUsuario();
        }

        public function getAll(){
           return $this->usuario->getAll();
        }


        public function create($nombre,$password,$email,$foto){
            $this->usuario->set('nombre',$nombre);
            $this->usuario->set('password',$password);
            $this->usuario->set('email',$email);
            $this->usuario->set('foto',$foto);
            $this->usuario->create();
         }

        public function modificar($id,$password,$email,$foto){
            $this->usuario->set('id',$id);
            $this->usuario->set('nombre',$nombre);
            $this->usuario->set('password',$password);
            $this->usuario->set('email',$email);
            $this->usuario->set('foto',$foto);
            $this->usuario->modificar();
         }

         public function eliminar($id){
            $this->usuario->set('id',$id);
            $this->usuario->eliminar();
         }
        
    }


?>