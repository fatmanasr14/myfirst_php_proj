<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/users',
function(){
    $name=[
        'students'=>[ [
            'id'=>'1',
            'name'=>'fatma',
            'city'=>'shibeen'

        ],[
            'id'=>'2',
            'name'=>'ahmed',
            'city'=>'banh a'
        ]
         ]
    ];
   
    return view('file1',$name);

}
);