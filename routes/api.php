<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\CustomerController;    
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get("/all-students", [StudentController::class, "all_students"]);
Route::post("/add-student", [StudentController::class, "add_student"]);
Route::post("/update", [StudentController::class,"update_student"]);

Route::post("/add_customer", [CustomerController::class, "add_customer"]);
Route::get("/get_customer_mobile/{customer_id}", [CustomerController::class,"get_mobile_info"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
