<?php

namespace App\Domain\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $table = 'products';

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'quantity',
        'sku',
        'insertion_date'
    ];

    public function withdraws()
    {
        return $this->belongsToMany(Withdraw::class, 'withdraws', 'product_id', 'id');
    }

    public function stocks()
    {
        return $this->belongsToMany(Stock::class, 'stocks', 'product_id', 'id');
    }

}
