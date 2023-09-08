<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrugCategories extends Model
{
    use HasFactory;

    protected $table = 'drug_categories';    
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function drug()
    {
        return $this->belongsTo(Drug::class);
    }

    
}
