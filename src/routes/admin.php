<?php

Route::resource('commodities', \Myrtle\Core\Commodities\Http\Controllers\Administrator\CommodityController::class, ['except' => ['show']]);

Route::group(['prefix' => 'docks/commodities', 'as' => 'docks.commodities.'], function () {
    Route::post('seed',
        ['uses' => \Myrtle\Core\Commodities\Http\Controllers\Administrator\CommoditiesSeedController::class . '@store', 'as' => 'seed.store']);
    Route::get('seed',
        ['uses' => \Myrtle\Core\Commodities\Http\Controllers\Administrator\CommoditiesSeedController::class . '@create', 'as' => 'seed.create']);
});