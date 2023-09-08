<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrescriptionDrug extends Model
{
    protected $table = 'prescription_drugs';
    protected $fillable = [
        'prescription_id',
        'drug_category_id',
        'drug_id',
        'strength_mg',
        'strength_ml',
        'dose',
        'duration',
        'drug_advice',
    ];

    public function drug(){
        return $this->hasOne(Drug::class, 'id', 'drug_id');
    }

    public function drugType(){
        return $this->hasOne(DrugCategories::class, 'id', 'drug_category_id');
    }

}
