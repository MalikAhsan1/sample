<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    protected $table = 'drugs';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'generic_name',
        'note',
        'image_path',
        'category_id'
    ];

    public function drugType()
    {
        return $this->hasOne(DrugCategories::class, 'id' , 'category_id');
    }
    public function Prescription()
    {
        return $this->hasMany(PrescriptionDrug::class);
    }
}
