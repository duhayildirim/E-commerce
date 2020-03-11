<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sizeCategory extends Model
{
    protected $table='size_category';

    public $timestamps='true';

    protected $fillable=[
        'title'
    ];

}
