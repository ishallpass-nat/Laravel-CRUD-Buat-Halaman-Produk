<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Order extends Model
{
    protected $fillable = [
        'customer_id',
        'order_number',
        'order_date',
        'total',
        'status'
    ];
    public function customer(): BelongsTo{
        return $this->belongsTo(Customer::class);

    }
}
