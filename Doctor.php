<?php

namespace App;

use Database\Factories\DoctorFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'doctors';

    protected $fillable = [
        'id',
        'user_id',
        'category_id',
        // 'designation_id',
        'speciality',
        'phone',
        'qualification',
        'designation',
        'blood',
        'image_path',
    ];
    protected static function newFactory()
    {
        return DoctorFactory::new();
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function doctorCategories(){
        return $this->hasOne(DoctorCategories::class, 'id', 'category_id');
    }
    public function availability()
    {
        return $this->hasMany(Availability::class);
    }
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
    
}
