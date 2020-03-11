<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class productCategory extends Model
{
    use SoftDeletes;

    protected $table='product';

    public $timestamps='true';

    protected $fillable=[
        'gender',
        'producttypeid',
        'sizeid',
        'price',
        'name',
        'img_url',
        'explanation',
    ];

    public function producttypeidrelation()
    {
        return $this->belongsTo(producttypeCategory::class, 'producttypeid');
    }

    public function sizeidrelation()
    {
        return $this->belongsTo(sizeCategory::class, 'sizeid');
    }

    public function colors()
    {
        return $this->hasMany(ColorProducts::class, 'product_id');
    }

}
