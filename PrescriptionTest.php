<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrescriptionTest extends Model
{
    protected $table = 'prescription_tests';
    protected $fillable = [
        'prescription_id',
        'test_id',
        'description'
    ];

    public function Test()
    {
        return $this->hasOne(Test::class, 'id', 'test_id');
    }
}
