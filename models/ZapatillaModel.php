<?php

class ZapatillaModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_zapatilla;charset=utf8', 'root', '');
    }

  
    public function getAllZapatilla() {
       $query = $this->db->prepare("SELECT * FROM zapatilla
       INNER JOIN marca ON zapatilla.id_marca=marca.id_marca" );
        $query->execute();
        // 3. obtengo los resultados
        $zapas = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $zapas;
    }

    function getZapatillasFilter  ($id_filtro){
        $query = $this->db->prepare( "SELECT zapatilla.*,
        marca.Nombre as marca from zapatilla join 
         on zapatilla.id_marca= marcas.id_marca where 
         zapatilla.id_marca=$id_filtro");
        $query->execute();
        $zapatillas = $query->fetchAll(PDO::FETCH_OBJ);
        return $zapatillas;
    }

   


    
    public function insertZapatilla($modelo, $precio, $stock, $id_marca) {
        $query = $this->db->prepare("INSERT INTO zapatilla (Modelo, 
             Precio, Stock, id_marca) VALUES(?, ?, ?, ?)");
            $query->execute(array($modelo,$precio,$stock, $id_marca));
              return $this->db->lastInsertId();
    }
    function getZapatillaID($id_zapatilla){
        $query = $this->db->prepare("SELECT * FROM zapatilla INNER JOIN marca ON zapatilla.id_marca=marca.id_marca WHERE id_=?");
        $query->execute(array($id_zapatilla));
        return $query->fetch(PDO::FETCH_OBJ);
     
    }
    function deleteZapatillaById($id) {
        $query = $this->db->prepare("DELETE FROM zapatilla WHERE id_ = ?");
        $query->execute([$id]);
    }
  
  
    function updateZapatilla($modelo,$precio,$stock,$id){
        $sentencia=$this->db->prepare("UPDATE zapatilla SET Modelo=?, Precio=?, Stock=? WHERE id_=?");
        $sentencia->execute(array($modelo, $precio, $stock,$id));
    }
    function getZapatillasPorMarca($id){
        $sentencia = $this->db->prepare("SELECT * FROM zapatilla INNER JOIN marca ON zapatilla.id_marca=marca.id_marca WHERE zapatilla.id_marca=?");
        $sentencia->execute(array($id));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    function addImage($img, $id){
        $pathImg = $this->uploadImage($img);
        $query = $this->db->prepare("UPDATE zapatilla SET imagen=? WHERE id_zapatilla=?");
        $query->execute(array($pathImg, $id));
    }
    }
    