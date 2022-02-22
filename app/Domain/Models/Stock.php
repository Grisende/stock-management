<?php

namespace App\Domain\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    public $table = 'stocks';

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'product_id',
        'withdraw_id',
        'quantity',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'product_id', 'id');
    }

    public function withdraws()
    {
        return $this->hasMany(Withdraw::class, 'withdraw_id', 'id');
    }
}
