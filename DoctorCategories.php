<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorCategories extends Model
{
    use HasFactory;

    protected $table = 'doctor_categories';
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'category_id', 'id');
    }

}
