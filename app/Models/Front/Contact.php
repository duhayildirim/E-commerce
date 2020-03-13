<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;

    public $timestamps='true';

    protected $fillable=[
        'name',
        'email',
        'subject',
        'message',
    ];
}
