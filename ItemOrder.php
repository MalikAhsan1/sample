<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemOrder extends Model
{
    use HasFactory;
    protected $table = "item_orders";
    protected $fillable = [
        'item_category_id',
        'qty',
        'price',
    ];

    public function item()
    {
        return $this->hasOne(Item::class, 'id' , 'item_id');
    }

}
