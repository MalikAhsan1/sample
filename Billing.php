<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
	protected $table = 'billings';

	protected $fillable = [
		'name',
		'code',
		'deposit_amount',
		'due_amount',
		'vat',
		'total_without_tax',
		'total_with_tax',
		'payment_mode',
		'payment_status',
		'insurance',
		'policy_no',
		'patient_id',
		'created_by',
	];

	public function createdBy()
	{
		return $this->hasOne(User::class, 'id', 'created_by');
	}

	public function patient()
	{
		return $this->hasOne(Patient::class, 'id', 'patient_id');
	}

	public function billingItems()
	{
		return $this->hasMany(BillingItem::class);
	}
	
}
