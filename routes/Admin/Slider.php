<?php

use App\Http\Controllers\Admin\SliderController;

Route::group(['prefix' => 'slider', 'as' => 'slider.'], function() {
    Route::get("paginate", [SliderController::class, 'paginate'])->name('paginate');
});
Route::resource('slider', SliderController::class);
