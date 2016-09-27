<?php
Route::get('todos', ['uses' => 'Demo\Todo\Http\Controllers\DemoTodoController@showTodos']);