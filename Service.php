<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function patients()
    {
        return $this->belongsToMany(Prescription::class);
    }
}
