<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Availability extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'doctor_id',
        'day_id',
        'start_time',
        'end_time',
    ];
    public function day()
    {
        return $this->belongsTo(Day::class);
    }
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function getStartTimeAttribute($value)
    {
        return Carbon::parse($value)->format('H:i:a');
    }
    public function getEndTimeAttribute($value)
    {
        return Carbon::parse($value)->format('H:i:a');
    }
}
