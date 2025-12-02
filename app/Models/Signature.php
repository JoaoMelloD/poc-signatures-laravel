<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\StatusSignatureEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Signature extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ["client_id", "plan_id", "status"];

    protected $casts = [
        "status" => StatusSignatureEnum::class,
    ];
}
