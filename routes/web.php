<?php

use App\Http\Controllers\StudentAllController;
use App\Http\Controllers\StudentController;
use App\Models\Contacts;
use App\Models\Students;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get("/test",function(){
//     return "Hello1";
// });
// Route::get("/test/{id}",function($id){
    
//     $contact = Contacts::find($id)->students;
//     return $contact;
//     // return view("test",["id"=> $id,"contacts" => $contact]);
// });
Route::get("/test/{id}",[StudentController::class,"show"]);
Route::get("/test",[StudentAllController::class,"show"]);
Route::get("/students",[StudentController::class,"showAllData"])->name("students");
Route::get("/students/add",[StudentController::class,"showFormData"])->name("showFormData");
Route::get("/students/update/{id}",[StudentController::class,"showFormUpdateData"])->name("showFormUpdateData");
Route::get("/students/delete/{id}",[StudentController::class,"showFormDeleteData"])->name("showFormDeleteData");


Route::post("'/students/submit/add",[StudentController::class,"addingData"])->name("addingData");
Route::put("'/students/submit/update/{id}",[StudentController::class,"updatingData"])->name("updatingData");
Route::delete("'/students/submit/delete/{id}",[StudentController::class,"deletingData"])->name("deletingData");