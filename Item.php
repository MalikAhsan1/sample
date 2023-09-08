<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = 'items';
    protected $fillable = [
        'name',
        'description',
        'unit',
        'available_qty',
        'item_category_id',
    ];

    public function itemCategory()
    {
        return $this->hasOne(ItemCategories::class, 'id' , 'item_category_id');
    }
    
}
