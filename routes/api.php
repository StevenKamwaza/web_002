<?php

use App\Http\Controllers\Api\TeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("/", function (){
    return "this is a student";
});

Route::get("/teachers", [TeacherController::class, 'index']); 
Route::get("/post", [TeacherController::class, 'saveTeacher']); 