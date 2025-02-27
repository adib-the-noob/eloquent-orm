<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Mobile;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "email",
    ];

    public function mobile(){
        return $this->hasOne(Mobile::class);
    }
}
