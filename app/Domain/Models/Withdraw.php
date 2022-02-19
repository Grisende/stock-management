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
        'is_api',
        'withdraw_date'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'product_id', 'id');
    }
}
