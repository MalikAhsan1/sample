<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'tests';
    protected $fillable = [
        'name',
        'description',
    ];

    public function prescription()
    {
        return $this->hasMany(PrescriptionTest::class);
    }
}
