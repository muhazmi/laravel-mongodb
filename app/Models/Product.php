<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Product extends Model
{
    protected $connection = 'mongodb'; // Pastikan koneksi ke MongoDB
    protected $fillable = ['name', 'description', 'price'];
}
