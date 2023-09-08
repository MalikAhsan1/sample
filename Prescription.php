<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    protected $table = 'prescriptions';
    protected $fillable = [
        'patient_id',
        'reference',
        'advices',
    ];


    public function patient()
    {
        return $this->hasOne(Patient::class, 'id', 'patient_id');
    }

    public function drugs()
    {
        return $this->hasMany(PrescriptionDrug::class);
    }

    public function tests()
    {
        return $this->hasMany(PrescriptionTest::class);
    }
    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
