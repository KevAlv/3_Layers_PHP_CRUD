<?php
    include_once('datos/DHabitacion.php');
    class NCategoria{
        private $id_h;
        private $galeria;
        private $descripcion_h;
        private $fecha_h;
        private $planes_id;
        private $categorias_id;
          
    
    
    public function getAll(){
        try {
         $stm=$this->pdo->prepare("SELECT * FROM $this->table");
         $stm->execute();
         return $stm->fetchAll(PDO::FETCH_OBJ);
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

    public function create(){
        try {
            $stm = $this->pdo->prepare("INSERT INTO ".self::TABLE." (name,lastName,sex,address,phone,age) VALUES (?,?,?,?,?,?)");
        $stm->execute(array($this->name,$this->lastName,$this->sex,$this->address,$this->phone,$this->age));
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function update(){
        try {
            $stm = $this->pdo->prepare("UPDATE ".self::TABLE." SET name=?,lastName=?,sex=?,address=?,phone=?,age=? WHERE id=?");
            $stm->execute(array($this->name,$this->lastName,$this->sex,$this->address,$this->phone,$this->age,$this->id));
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        
    }
    }


?>