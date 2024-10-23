<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //En caso de que el nombre de la tabla no tenga el nombre del modelo en plural habría que especificar el nombre de la tabla
    //protected $table = 'posts';

    protected $fillable = ['title', 'body','publish_date'];
}
