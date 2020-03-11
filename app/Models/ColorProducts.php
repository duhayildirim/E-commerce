<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ColorProducts extends Model
{
    use SoftDeletes;
    public $timestamps='true';

    protected $fillable=[
        'color_category_id',
        'product_id',
    ];
    public function color()
    {
        return $this->belongsTo(colorCategory::class, 'color_category_id');
    }
    public function product()
    {
        return $this->belongsTo(productCategory::class,'product_id');
    }
}
