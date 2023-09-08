<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillingItem extends Model
{
	protected $table = 'billing_items';
	protected $fillable = [
		'name',
		'unit',
		'qty',
		'price',
		'discount',
		'total',
		'description',
		'billing_id',
	];

	public function billing()
	{
		return $this->belongsTo(Billing::class, 'id', 'billing_id');
	}
}
