<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RomanNumber extends Model
{
    use HasFactory;
    protected $fillable = ['numeral','roman_number'];
}
