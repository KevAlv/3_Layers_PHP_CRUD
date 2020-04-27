<?php
    include_once('../datos/DUsuario.php');
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