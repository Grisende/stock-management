<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    use HasFactory;

    public $table = 'withdraws';

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'sku',
        'insertion_date'
    ];
}
