<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    //use HasFactory; DESPUES LO VEMOS

    protected $table = "noticias";
    protected $primaryKey = "news_id";

}
