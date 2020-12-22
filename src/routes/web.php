<?php

/*Route::get('contact', function (){
    //The below code has been sent to controller
    //return view('contact::contact'); //First contact is the package name, and second contact is the viewPage (contact.blade)

})->name('contact');

Route::post('contact', function (\Illuminate\Http\Request $request){
    return $request->all();
});*/


Route::group(['namespace' => 'Lalan\Contact\Http\Controllers'], function(){
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@send');
});

//https://www.youtube.com/watch?v=H-euNqEKACA
