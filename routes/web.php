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

Route::get('/students',
function(){
    $name=[
        'students'=>[ [
            'id'=>'1',
            'name'=>'fatma',
            'city'=>'shibeen',
            'country'=>'egypt',
            'phone n'=>'0292982'

        ],[
            'id'=>'2',
            'name'=>'ahmed',
            'city'=>'banha ',
            'country'=>'egypt',
            'phone n'=>'0244442'
        ]
         ]
    ];
   
    return view('file1',$name);

}
);

Route::get('/students/{id}',
    function($id){
        $students= [ [
            'id'=>'1',
            'name'=>'fatma',
            'city'=>'shibeen',
            'country'=>'egypt',
            'phone_n'=>'0292982',
            'email'=>'cavhh.com',


        ],[
            'id'=>'2',
            'name'=>'ahmed',
            'city'=>'banha ',
            'country'=>'egypt',
            'phone_n'=>'0244442',
            'email'=>'gjggd.com',
        ]
        ];

        foreach($students as $student){
            if($id==$student['id']){
                return view('student',$student);
            }
        }
        


    }
);