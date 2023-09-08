<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemCategories extends Model
{
    use HasFactory;
    protected $table = 'item_categories';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function items()
    {
        return $this->hasMany(Item::class, 'item_category_id', 'id');
    }
}
