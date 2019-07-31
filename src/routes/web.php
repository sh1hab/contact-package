<?php



Route::group(['namespace' => 'Shihab\Contact\controller'],
    function () {
        Route::get('/contact', 'ContactController@index')->name('contact');
        Route::post('/contact', 'ContactController@send')->name('contact.submit');
    });
