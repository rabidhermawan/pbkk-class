<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goodplace extends Model
{
    protected $fillable = ['place_name', 'description', 'address']; 
    /** @use HasFactory<\Database\Factories\GoodplaceFactory> */
    use HasFactory;

    public function goodthings() {
        return $this->hasMany(Goodthings::class);
    }
}
