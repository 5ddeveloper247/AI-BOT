<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payments';
    protected $fillable = [
        'user_id',
        'plan_id',
        'membership_id',
        'amount',
        'status',
        'payment_gateway',
        'transaction_id',
        'auth_code',

    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function membership()
    {
        return $this->belongsTo(Membership::class);
    }
}
