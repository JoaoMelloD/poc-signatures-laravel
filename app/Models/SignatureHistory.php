<?php

namespace App\Models;

use App\Enums\StatusSignatureEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignatureHistory extends Model
{
    use HasFactory;
    protected $fillable = ['signature_id', 'updated_at', 'old_plan_id', 'old_status'];
    protected $casts = [
        'old_status' => StatusSignatureEnum::class
    ];
    public $timestamps = false;
}
