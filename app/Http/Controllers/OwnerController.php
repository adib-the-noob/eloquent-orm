<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Owner;
use App\Models\Car;


class OwnerController extends Controller
{
    public function add_owner($car_id){
        $car = Car::find($car_id);
        $owner = new Owner();
        $owner->name = 'adibs';
        $car->owner()->save($owner);
    }
}
