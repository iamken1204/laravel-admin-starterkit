<?php

/**
 * Changes the content tags for blade system.
 */
Blade::setContentTags('<%', '%>');
Blade::setEscapedContentTags('<%%', '%%>');

Route::get('/', function () {
    // echo asset('img');exit;
    // var_dump(DB::connection()->getDatabaseName());
    return view('admin.layout');
});

$adminGroupSetting = [
    'namespace' => 'admin',
    'prefix' => 'admin'
];
Route::group($adminGroupSetting, function() {
    Route::get('/', function() { return view('admin.index'); });
});
