<?php

class Produit extends CRUD {

    protected $table = 'produit';
    protected $primaryKey = 'id_produit';
    protected $fillable = ['id_produit', 'type', 'description', 'prix', 'id_material', 'image', 'quantite'];
        
}

?>