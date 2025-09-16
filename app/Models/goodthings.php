<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class goodthings extends Model
{
    protected $fillable = ['goodthings', 'goodvalues', 'description']; 

    /** @use HasFactory<\Database\Factories\GoodthingsFactory> */
    use HasFactory;
}
