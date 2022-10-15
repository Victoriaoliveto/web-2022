<?php

class MarcaModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_zapatilla;charset=utf8', 'root', '');
    }

    function getMarcas(){
        $query = $this->db->prepare ('SELECT * FROM marca');
        $query->execute();
        $mar = $query->fetchAll(PDO::FETCH_OBJ);
        return $mar;
    }

    function addMarca($marca){
        $query = $this->db->prepare("INSERT INTO marca (Nombre) VALUE(?)");
        $query->execute(array($marca));

    }

    function GetMarcaID($id){
        $sentencia = $this->db->prepare("SELECT * FROM marca WHERE id_marca=?");
        $sentencia->execute(array($id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function delMarca($id){
        $query = $this->db->prepare("DELETE from marca WHERE id_marca=?");
        $query->execute(array($id));
    }

    function updateMarca($newName, $id){
        $query = $this->db->prepare("UPDATE marca SET Nombre= '$newName' WHERE id_marca=?");
        $query->execute(array($id));
    }
}