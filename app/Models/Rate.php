<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    public $table = 't_rate';
    public $fillable = ['id','id_user','id_product','user_name','email', 'comment', 'updated_at','created_at'];
    public $primaryKey = 'id';
    public $incrementing = true; 

}