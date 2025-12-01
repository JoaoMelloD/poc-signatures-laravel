<?php

namespace App\Enums;

enum TransactionStatusEnum: string
{
    case PENDENT = "pendent";
    case COMPLETED = "completed";
    case CANCELED = "canceled";
}
