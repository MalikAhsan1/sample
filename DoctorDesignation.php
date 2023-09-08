<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorDesignation extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $table = 'doctor_designations';
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
