<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\StatusSignatureEnum;

class Signature extends Model
{
    protected $fillable = ["client_id", "plan_id", "status"];

    protected $casts = [
        "status" => StatusSignatureEnum::class,
    ];
}
