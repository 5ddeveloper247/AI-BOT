<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan_name',
        'plan_price',
        'plan_description',
        'plan_type',
    ];

    // Define the one-to-many relationship with Feature model
    public function features()
    {
        return $this->hasMany(Feature::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
