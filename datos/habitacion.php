<?php
    include_once('conexion.php');
    class Habitacion{
  private $id_h;
  private $galeria;
  private $descripcion_h;
  private $fecha_h;
  private $planes_id;
  private $categorias_id;
    
  private $pdo;
    
    public function __construct(){
         $this->pdo = Conexion::getInstance()->getConnection();
    }
    
    public function getAll(){
        try {
         $stm=$this->pdo->prepare("SELECT * FROM habitaciones");
         $stm->execute();
         return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
             echo $e->getMessage();
         }
     }



    }