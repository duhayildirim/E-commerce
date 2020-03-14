<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class colorCategory extends Model
{
    protected $table='color_category';

    public $timestamps='true';

    protected $fillable=[
        'title',
    ];

    public function products()
    {
        return $this->hasMany(ColorProducts::class,'color_category_id');
    }
}
