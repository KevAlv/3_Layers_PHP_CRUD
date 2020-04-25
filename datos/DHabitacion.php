<?php
    include_once('conexion.php');
    class DHabitacion{
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

    
    public function crear(){
      
    }

     public function create(){
      try {
          $stm = $this->pdo->prepare("INSERT INTO ".self::TABLE." (name,lastName,sex,address,phone,age) VALUES (?,?,?,?,?,?)");
      $stm->execute(array($this->name,$this->lastName,$this->sex,$this->address,$this->phone,$this->age));
      } catch (PDOException $e) {
          echo $e->getMessage();
      }
  }


    }