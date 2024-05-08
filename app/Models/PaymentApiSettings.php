<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentApiSettings extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'transaction_key',
        'status',
        'type',
    ];
}
