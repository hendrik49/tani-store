<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public $table = 't_products';
    public $fillable = ['id','name','desc','category','img', 'img_slider', 'count_play', 'coint','url'];
    public $primaryKey = 'id';
    public $incrementing = true; 
    public $timestamps = true;

}