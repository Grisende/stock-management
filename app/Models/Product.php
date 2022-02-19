<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $table = 'products';

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'sku',
        'insertion_date'
    ];

}
