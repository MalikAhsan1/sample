<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
	protected $table = 'appointments';
	public $dates = [ 'date'];

	protected $fillable = [
		'doctor_id',
		'patient_id',
		'availability_id',
		'date',
		'reason',
		'is_done',
	];
	
	public function getDateAttribute($value)
    {
        return Carbon::parse($value)->format('d M Y');
    }

	public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

	public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

	public function availability()
    {
        return $this->belongsTo(Availability::class);
    }


}
