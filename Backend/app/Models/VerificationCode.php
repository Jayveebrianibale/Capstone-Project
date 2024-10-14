<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerificationCode extends Model
{
    use HasFactory;

    // Specify the fillable attributes
    protected $fillable = [
        'email', 
        'code',
    ];
}
