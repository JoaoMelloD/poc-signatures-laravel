<?php

namespace App\Models;

use App\Enums\TransactionStatusEnum;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['total_price', 'signature_id'];
    protected $casts = [
        "status" => TransactionStatusEnum::class,
    ];
}
