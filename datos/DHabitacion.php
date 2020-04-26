<?php
    include_once('conexion.php');
    class DHabitacion{
    private $id_h;
    private $galeria;
    private $estado;
    
    private $descripcion;
    private $pdo;
    
    public function __construct(){
         $this->pdo = Conexion::getInstance()->getConnection();
    }
    
    public function getAll(){
        try {
         $stm=$this->pdo->prepare("SELECT * FROM categorias");
         $stm->execute();
         return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
             echo $e->getMessage();
         }
     }

    
     public function create(){
      try {
          $stm = $this->pdo->prepare("INSERT INTO ".self::TABLE." (name,lastName,sex,address,phone,age) VALUES (?,?,?,?,?,?)");
      $stm->execute(array($this->name,$this->lastName,$this->sex,$this->address,$this->phone,$this->age));
      } catch (PDOException $e) {
          echo $e->getMessage();
      }
  }

  public function getById($id){
    try {
     $stm=$this->pdo->prepare("SELECT * FROM $this->table WHERE id=?");
     $stm->execute(array($id));
     return $stm->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
         echo $e->getMessage();
     }
 }

 public function delete($id){
    try {
     $stm=$this->pdo->prepare("DELETE FROM $this->table WHERE id=?");
     $stm->execute(array($id));
    } catch (PDOException $e) {
         echo $e->getMessage();
     }
 }


    }