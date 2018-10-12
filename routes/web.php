<?php

Route::pattern('id', '([0-9]*)');
Route::pattern('slud', '(.*)');

Route::namespace('Admin')->group(function(){
    Route::get('/', [
        'uses' => 'ControllerIndex@index',
        'as' => 'admin.index.index'
    ]);

    Route::get('/partner', [
        'uses' => 'ControllerPartner@index',
        'as' => 'admin.partner.index'
    ]);
        //ADMIN
    Route::get('/user/admin', [
        'uses' => 'ControllerUser@index',
        'as' => 'admin.user.admin.index'
    ]);

    Route::get('/user/admin/{id}.html', [
        'uses' => 'ControllerUser@updateStatusAdmin',
        'as' => 'admin.user.admin.index.updatestatus'
    ]);
        //END ADMIN
    Route::get('/user/cargo', [
        'uses' => 'ControllerUser@cargo',
        'as' => 'admin.user.cargo.index'
    ]);

    Route::get('/user/trucking', [
        'uses' => 'ControllerUser@trucking',
        'as' => 'admin.user.trucking.index'
    ]);

    Route::get('/user/driver', [
        'uses' => 'ControllerUser@driver',
        'as' => 'admin.user.trucking.driver.index'
    ]);

    Route::get('/user/trucking/history', [
        'uses' => 'ControllerUser@history',
        'as' => 'admin.user.trucking.history.index'
    ]);

    Route::get('/contact', [
        'uses' => 'ControllerContact@index',
        'as' => 'admin.contact.index'
    ]);

    Route::get('/comment', [
        'uses' => 'ControllerComment@index',
        'as' => 'admin.comment.index'
    ]);

    Route::get('/postion', [
        'uses' => 'ControllerPosition@index',
        'as' => 'admin.position.index'
    ]);

    Route::get('/category/typeoftruck', [
        'uses' => 'ControllerCategory@typeoftruck',
        'as' => 'admin.category.typeoftruck.index'
    ]);

    Route::get('/category/website', [
        'uses' => 'ControllerCategory@website',
        'as' => 'admin.category.website.index'
    ]);

    //typeofcargo
    Route::get('/category/typeofcargo', [
        'uses' => 'ControllerCategory@getTypeOfCargo',
        'as' => 'admin.category.typeofcargo.index'
    ]);

    Route::post('/category/typeofcargo/insert', [
        'uses' => 'ControllerCategory@postTypeOfCargo',
        'as' => 'admin.category.typeofcargo.index.insert'
    ]);

    Route::post('/category/typeofcargo/update', [
        'uses' => 'ControllerCategory@updateTypeOfCargo',
        'as' => 'admin.category.typeofcargo.index.update'
    ]);

    Route::post('/category/typeofcargo/delete', [
        'uses' => 'ControllerCategory@deleteTypeOfCargo',
        'as' => 'admin.category.typeofcargo.index.delete'
    ]);
    //typeoftruck
    Route::post('/category/typeoftruck', [
        'uses' => 'ControllerCategory@postTypeOfTruck',
        'as' => 'admin.category.typeoftruck.index'
    ]);
    Route::post('/category/typeoftruck/insert', [
        'uses' => 'ControllerCategory@postTypeOfTruck',
        'as' => 'admin.category.typeoftruck.index.insert'
    ]);
    Route::post('/category/typeoftruck/update', [
        'uses' => 'ControllerCategory@postTypeOfTruck',
        'as' => 'admin.category.typeoftruck.index.update'
    ]);
    //---END
    //account
    Route::get('/account', [
        'uses' => 'ControllerAccount@index',
        'as' => 'admin.account.index'
    ]);
});