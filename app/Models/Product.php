<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    var $timestamps=false;
    protected $fillable = [

        'fname', 'lname','birthdate'
        ,'dayTime','eveningTime','choose',
        'date','time','reason'

    ];
    
}
