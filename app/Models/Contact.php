<?php

// app/Models/Contact.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'subject', 'message', 'viewed', 'reply' ,'attachments'];


       // Mutator to set the viewed attribute
       public function setViewedAttribute($value)
       {
           $this->attributes['viewed'] = (bool) $value;
       }
       protected $casts = [
        'attachments' => 'array',
    ];
}
