<?php
    include_once('../datos/DCategoria.php');
    class NCategoria{
        private $categoria;
        
        public function __construct(){
            $this->categoria = new DCategoria();
        }

        public function getAll(){
           return $this->categoria->getAll();
        }

        public function create($color,$img,$descripcion){
            $this->categoria->set('color',$color);
            $this->categoria->set('img',$img);
            $this->categoria->set('descripcion',$descripcion);
            $this->categoria->create();
         }

        public function modificar($id,$color,$img,$descripcion){
            $this->categoria->set('id',$id);
            $this->categoria->set('color',$color);
            $this->categoria->set('img',$img);
            $this->categoria->set('descripcion',$descripcion);
            $this->categoria->modificar();
         }

         public function eliminar($id){
            $this->categoria->set('id',$id);
            $this->categoria->eliminar();
         }
        
    }


?>