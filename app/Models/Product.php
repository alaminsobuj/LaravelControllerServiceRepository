<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primarykey = 'id';
    protected $table = 'products';
    // public $timestamps = false;

    protected $fillable = [
        'name',
        'price',
        'quantity',
        'status',
        'description'
    ];
}
