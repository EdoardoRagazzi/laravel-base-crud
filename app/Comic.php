<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    //Get  data from Comics.php(Array)
    // protected $table = 'comics';
    protected $fillable=[
        'title',
        'thumb',
        'sale_date',
        'series',
        'price',
        'description',
        'type',
    ];
}
