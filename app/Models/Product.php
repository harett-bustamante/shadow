<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    #se especifica el nombre de la tabla
    protected $table = 'product';

    #se especifica la llave primaria de la tabla
    protected $id ='id';

    #utilizar para los campos created_at y updated_at
    public $timestamps = true;

    #especificamos las columnas existentes de la tabla
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock'
    ];

}
