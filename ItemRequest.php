<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemRequest extends Model
{
    use HasFactory;

    protected $table = "item_requests";
    protected $fillable = [
        'item_name',
        'description',
        'qty',
        'price',
        'user_id',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id' , 'user_id');
    }

}
