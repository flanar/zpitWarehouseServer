<?php

use Illuminate\Http\Request;

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('profile', 'UserController@getAuthenticatedUser');

    Route::get('getGroups', 'GroupController@getGroups');

    Route::get('getMembers', 'MemberController@getMembers');
    Route::get('getMembersByGroup/{id}', 'MemberController@getMembersByGroup');
});