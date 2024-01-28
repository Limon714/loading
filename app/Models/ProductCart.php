<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductCart extends Model
{
    protected $fillable =['user_id','color',	'size',	'qty',	'price',	'product_id'];
    
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
