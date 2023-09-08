<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
	protected $table = 'patients';

	protected $fillable = [
        'id',
        'user_id',
        'birthday',
        'phone',
        'gender',
        'blood',
        'address',
        'weight',
        'height',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function prescriptions(){
        return $this->hasMany(Prescription::class);
    }

    public function getAgeAttribute($value)
    {
        return Carbon::parse($this->birthday)->age . ' years old';
    }
}
