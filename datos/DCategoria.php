<?php
    include_once('conexion.php');
class DCategoria{
    private $id;
    private $color;
    private $img;
    private $descripcion;

    public $pdo;

 public function set($atributo,$valor){
        $this->$atributo = $valor;
 }
 public function get($atributo){
    return $this->$atributo;
 }

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
         $stm = $this->pdo->prepare("INSERT INTO categorias (color,img,descripcion) VALUES (?,?,?)");
     $stm->execute(array($this->img,$this->color,$this->descripcion));
     } catch (PDOException $e) {
         echo $e->getMessage();
     }
    }


 public function update(){
    try {
        $stm = $this->pdo->prepare("UPDATE categorias SET color=?,img=?,descripcion=? WHERE id=?");
        $stm->execute(array($this->color,$this->img,$this->descripcion,$this->id));
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    
    }

 public function delete(){
   try {
    $stm=$this->pdo->prepare("DELETE FROM categorias WHERE id=?");
    $stm->execute(array($this->id));
   } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
}

