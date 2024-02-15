<?php

abstract class CRUD extends PDO {

    public function __construct() {
        parent::__construct('mysql:host=localhost; dbname=tp1-site_marchand; port=3306; charset=utf8', 'root', '');
    }

    public function select($field = 'id_produit', $order = 'ASC') {
        $sql = "SELECT * FROM $this->table ORDER BY $field $order";
        $stmt = $this->query($sql);
        return $stmt->fetchAll();
    }

    public function selectId($value) {
        $sql = "SELECT * FROM $this->table WHERE $this->primaryKey = '$value'";
        $stmt = $this->query($sql);
        $count = $stmt->rowCount();
        if ($count == 1) {
            return $stmt->fetch();
        } else {
            RequirePage::url('home/error/404');
        }
    }

    public function insert($data) {
        // Scénario dans lequel existe un $this->fillable
        if ($this->fillable) {
            $data_keys = array_fill_keys($this->fillable, '');
            $data = array_intersect_key($data, $data_keys);

            $nomChamp = implode(", ", array_keys($data));
            $valeurChamp = ":" . implode(", :", array_keys($data));

            $sql = "INSERT INTO $this->table ($nomChamp) VALUES ($valeurChamp)";
            $stmt = $this->prepare($sql);
            foreach ($data as $cle => $valeur) {
                $stmt->bindValue(":$cle", $valeur);
            }
            $stmt->execute();
            return $this->lastInsertId();
        // Scénario dans lequel n'existe pas un $this->fillable
        } else {
            $nomChamp = implode(", ", array_keys($data));
            $valeurChamp = ":" . implode(", :", array_keys($data));

            $sql = "INSERT INTO $this->table ($nomChamp) VALUES ($valeurChamp)";
            $stmt = $this->prepare($sql);
            foreach ($data as $cle => $valeur) {
                $stmt->bindValue(":$cle", $valeur);
            }
            $stmt->execute();
            return $this->lastInsertId();
        }
    }

    public function update($data) {
        $champRequete = null;
        foreach ($data as $cle => $valeur) {
            $champRequete .= "$cle =:$cle, ";
        }
        $champRequete = rtrim($champRequete, ", ");

        $sql = "UPDATE $this->table SET $champRequete WHERE $this->primaryKey =:$this->primaryKey";
        $stmt = $this->prepare($sql);
        foreach ($data as $cle => $valeur) {
            $stmt->bindValue(":$cle", $valeur);
        }
        if($stmt->execute()){
            return true;
        }else{
            return $stmt->errorInfo();
        }
    }

    public function delete($value) {    
        $sql = "DELETE FROM $this->table WHERE $this->primaryKey = :$this->primaryKey";
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":$this->primaryKey", $value);
        if ($stmt->execute()){
            return true;
        } else {
            RequirePage::url('home/error/404');
        }
    }
}

?>