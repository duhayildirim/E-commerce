<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class producttypeCategory extends Model
{
    protected $table='product_type';

    public $timestamps='true';

    protected $fillable=[
        'title'
    ];

}
