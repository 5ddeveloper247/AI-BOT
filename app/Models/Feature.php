<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Plan; // Import the Plan model

class Feature extends Model
{
    protected $fillable = ['name']; // Specify the fillable attributes

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
