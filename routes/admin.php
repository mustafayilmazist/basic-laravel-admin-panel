<?php

/*** admin route group */
/** middleware yazılımı tarafından korunan grup */
/*Route::group(["middleware" => ["auth"]], function () {

    Route::group(["middleware" => ["check-role:admin|master_admin"]], function () {*/

Route::group([
    'namespace' => 'App\Http\Controllers\Admin',
    'prefix' => 'admin',
    'middleware' => ['auth', 'verified',"check-role:admin|super-admin"],
], function () {
    Route::resource('user', 'UserController');
    Route::resource('role', 'RoleController');
    Route::resource('permission', 'PermissionController');
    Route::get('edit-account-info', 'UserController@accountInfo')->name('admin.account.info');
    Route::post('edit-account-info', 'UserController@accountInfoStore')->name('admin.account.info.store');
    Route::post('change-password', 'UserController@changePasswordStore')->name('admin.account.password.store');
});
