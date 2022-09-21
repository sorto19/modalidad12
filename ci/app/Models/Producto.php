<?php

namespace App\Models;

use CodeIgniter\Model;
//product extend of model
class Producto extends Model
{
    protected $table  = 'productos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['Nombre_producto', 'Categoria_producto', 'Precio'];
}
