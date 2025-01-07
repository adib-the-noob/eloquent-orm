<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Mobile extends Model
{
    use HasFactory;
    protected $fillable = [
        'model',
        'customer_id',
    ];

    public function mobile(){
        return $this->belongsTo(Customer::class);
    }
}
