<?php




Route::group([ 'prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ] ], function(){ 

        Route::prefix('Dashboard')->name('Dashboard.')->group(function(){

            Route::get('index','dashboardcontroller@index');
        
        });//end of dashboard-Route
        
       
    });