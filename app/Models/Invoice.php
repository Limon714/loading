<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable =[	'total','discount',	'vat',	'payable',	'customer_details',	'shiping_address',	'tran_id',	'validation_id',	'delivery_status','payment_status',	'user_id'];
}
