<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Transaction extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = "detail_transactions";

    public function product() {
        return $this->belongsTo(Product::class, "product_id");
    }

    public function transaction() {
        return $this->belongsTo(Transaction::class, "transaction_id");
    }
}
