<?php
// Route::group(['namespace' => ''], function () {
//     Route::get('contact', 'ContactController@index')->name('contact');
//     Route::post('contact', 'ContactController@send');
// });
use ContactUs\Http\Controllers\ContactController;

Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'send']);


Route::get('/testPackage',function(){
    return 'contact us Load and working';
});

Route::get('/testPackageView',function(){
    return view('contact::contact');
});
    
