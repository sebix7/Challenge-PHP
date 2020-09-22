<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";
    protected $fillable = ["titulo", "categoria", "contenido", "fecha_de_creacion"];
    public $timestamps = false;
}
