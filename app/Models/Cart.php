<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function customer() {
        return $this->belongsTo(User::class, "customer_id");
    }

    public function product() {
        return $this->belongsTo(Product::class, "product_id");
    }
}
