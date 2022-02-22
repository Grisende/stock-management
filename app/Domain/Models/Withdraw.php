<?php

namespace App\Domain\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    use HasFactory;

    public $table = 'withdraws';

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'product_id',
        'quantity',
        'is_api',
        'withdraw_date'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'product_id', 'id');
    }

    public function stocks()
    {
        return $this->belongsToMany(Stock::class, 'stocks', 'withdraw_id', 'id');
    }
}
