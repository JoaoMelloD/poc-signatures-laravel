<?php

namespace App\Models;

use App\Enums\TransactionStatusEnum;
use Illuminate\Database\Eloquent\Model;

class SignatureHistory extends Model
{
    protected $fillable = ['signature_id', 'updated_at', 'old_plan_id', 'oldStatus'];
    protected $casts = [
        'oldStatus' => TransactionStatusEnum::class
    ];
}
