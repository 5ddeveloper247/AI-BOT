<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;
    protected $table = 'memberships';
    protected $fillable = [
        'user_id',
        'plan_id',
        'payment_status',
        'trial',
        'days',
        'start_date',
        'end_date',
        'status',
        'start_trial',
        'end_trial',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
