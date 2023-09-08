<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $table = "medicines";

    protected $fillable = [
        'name',
        'brand',
        'selling_price',
        'buying_price',
    ];
}

