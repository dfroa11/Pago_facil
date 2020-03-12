<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table="_productos";
    protected $primaryKey = "id";
    public $timestamps = false;
}
