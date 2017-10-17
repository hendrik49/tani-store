<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plays extends Model
{
    public $table = 't_play_products';
    public $fillable = ['id','idplayer','idproducts','subscription','score'];
    public $primaryKey = 'id';
    public $incrementing = true; 
    public $timestamps = true;

}