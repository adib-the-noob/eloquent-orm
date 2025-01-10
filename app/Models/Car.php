<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Owner;

class Car extends Model
{
    use HasFactory;

    public function owner(){
        return $this->hasOne(Owner::class);
    }
}


// Mechanic hasone Car, Car hasone Owner: Owner -> Car -> Mechanic