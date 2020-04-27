<?php
    include_once('../datos/DPlan.php');
    class NPlan{
        private $plan;
        
        public function __construct(){
            $this->plan = new DPlan();
        }

        public function getAll(){
           return $this->plan->getAll();
        }

        public function create($tipo,$img){
            $this->plan->set('tipo',$tipo);
            $this->plan->set('img',$img);
            $this->plan->create();
         }

        public function modificar($id,$tipo,$img){
            $this->plan->set('id',$id);
            $this->plan->set('tipo',$tipo);
            $this->plan->set('img',$img);
            $this->plan->modificar();
         }

         public function eliminar($id){
            $this->plan->set('id',$id);
            $this->plan->eliminar();
         }
        
    }


?>