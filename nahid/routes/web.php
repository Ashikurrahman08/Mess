<?php


Route::get('/','Collection@mess');

/* Collection View */
Route::get('/collection_list','Collection@collection_list');
    
Route::get('/collection_add','Collection@collection_list');


/* Menu View */
Route::get('/menu_list','Menu@menu_list');
    
Route::get('/menu_add','Menu@menu_add');

/* Extra View */
Route::get('/extra_item_add','Extra@extra_item_add');
    
Route::get('/extra_item_list','Extra@extra_item_list');

/* Additional View */
Route::get('/additional_list','Addition@additional_list');

Route::get('/additional_add','Addition@additional_add');

/* Meal View */
Route::get('/meal_list','Meal@meal_list');
Route::get('/meal_add','Meal@meal_add');


/* Bazar View */
Route::get('/bazar_list','Bazar@bazar_list');
Route::get('/bazar_add','Bazar@bazar_add');


/* Bazar Details View */
Route::get('/bazar_details_add','BazarDetailes@bazar_details_add');

Route::get('/bazar_details_list','BazarDetailes@bazar_details_list');



/* Month View */
Route::get('/month_list','Month@month_list');
    
Route::get('/month_add','Month@month_add');