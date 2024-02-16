<?php

class Produit extends CRUD {

    protected $table = 'produit';
    protected $primaryKey = 'id_produit';

        
    public function updateQuantite($id, $quantite) {
        $sql = "UPDATE $this->table SET quantite = $quantite WHERE id_produit = $id";
        $stmt = $this->query($sql);
        return $stmt->fetchAll();
    }
}

?>