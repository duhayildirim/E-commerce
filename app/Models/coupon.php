<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class coupon extends Model
{
    public $timestamps='true';

    protected $fillable=[
        'code',
    ];
}
