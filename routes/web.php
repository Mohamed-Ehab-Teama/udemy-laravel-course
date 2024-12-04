<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function() {
    return "We are in Test Route";
});

Route::get( '/printName/{name?}' , function($name = 'User'){
    return " Hello $name ";
} );

// --------------------------------------------
// Syntax   =>  Route::method( URI, action )

// Route::get('/test', function() {
//     return " Hello From Test Route ";
// });

// Route::get('/test', function() {
//     return view('index');
// });

// Route::get('/test', [TestController::class, 'printName' ]);

// --------------------------------------------
// Short-hand Routes    =>  
    // Route::view( URI, VIEW )
    // Route::redirect( URI, Destination )
Route::view('/welcome', 'welcome');
Route::redirect( '/new', '/test' );

// --------------------------------------------
// Route Parameters
    // Required Parameter
    // Route::get( '/printName/{name}' , function($name){
    //     return " Hello $name ";
    // });

    // Optional Parameter
    // Route::get( '/printName/{name?}' , function($name = 'User'){
    //     return " Hello $name ";
    // });

// --------------------------------------------
// Named Routes =>  Route::method( URI, action )->name('Route Name')
    // Route::get('/test', [TestController::class, 'printName' ])->name('printNameHere');
    // <a href="{{ route('printNameHere') }}"> Go To Print Name </a>

    // Route::get( '/printName/{name}' , function($name){
    //     return " Hello $name ";
    // })->name('sayName');
    // <a href="{{ route('sayName', ['name' => 'Mohamed'] ) }}"> Go To Print Name </a>

// --------------------------------------------
// Route Groups
// Route::controller(TestController::class)->prefix('/test')->name('test')->group( function() {
//     Route::method( URI , action )
//     Route::get( '/edit', 'update' );
//     Route::get( '/exit', 'delete' );
// });

// --------------------------------------------
