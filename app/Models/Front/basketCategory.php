<?php

namespace App\Models\Front;

use App\Models\productCategory;
use Illuminate\Database\Eloquent\Model;

class basketCategory extends Model
{
    protected $table = 'basket';

    public $timestamps = 'true';

    protected $fillable =[
        'productid','unit'
    ];

    public function productrelation()
    {
        return $this->belongsTo(productCategory::class, 'productid');
    }
}
