<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\CustomerController;    
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthPostController;

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

// Author 
Route::post("/add-author", [AuthorController::class,"add_author"]);
Route::get("/get_author_info/{post_id}", [AuthorController::class,"get_author"]);
Route::get("/all-author-posts", [AuthPostController::class,"index"]);


Route::get("/get_author/{post_id}", [PostController::class,""]);
Route::post("/create-post/{author_id}", [PostController::class,"add_post"]);
Route::get("/get-post/{author_id}", [PostController::class,"get_posts"]);


Route::get("/all-students", [StudentController::class, "all_students"]);
Route::post("/add-student", [StudentController::class, "add_student"]);
Route::post("/update", [StudentController::class,"update_student"]);

Route::post("/add_customer", [CustomerController::class, "add_customer"]);
Route::get("/get_customer_mobile/{customer_id}", [CustomerController::class,"get_mobile_info"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
