<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goodthings extends Model
{
    protected $fillable = ['goodthings', 'goodvalues', 'description']; 

    /** @use HasFactory<\Database\Factories\GoodthingsFactory> */
    use HasFactory;

    public function goodplace() {
        return $this->belongsTo(Goodplace::class);
    }

    // $goodthings->goodplace->name
}
