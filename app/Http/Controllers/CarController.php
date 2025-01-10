<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Car;
use App\Models\Mechanic;
use App\Models\Owner;


class CarController extends Controller
{
    public function add_car($mechanic_id){
        $mechanic = Mechanic::find($mechanic_id);
        if ($mechanic){
            $car = new Car(['model' => "Toyota"]);
            $mechanic->car()->save($car);
            return $car;
        }
        return response()->json([
            "error"=> "Mechanic not found"
            ]);
    }
}
