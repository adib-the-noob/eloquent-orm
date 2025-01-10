<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mechanic;

class MechanicController extends Controller
{
    public function add_mechanic(){
        $mechanic = new Mechanic();
        $mechanic->name = "Jacke!";
        $mechanic->save();
    }
    
    public function get_owner_by_mechanic($mechanic_id){
        // $owner = Mechanic::find($mechanic_id)->car->owner;
        $owner = Mechanic::find($mechanic_id)->owner;
        return response()->json([
            "owner"=> $owner,
        ]);
    }

}
