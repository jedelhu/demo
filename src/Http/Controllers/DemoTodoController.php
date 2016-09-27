<?php

namespace Demo\Todo\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Demo\Todo\Models\DemoTodoModel;

class DemoTodoController extends Controller
{
    public function showTodos()
    {
    		$todos = DemoTodoModel::orderBy('id', 'desc')->get();

    		return view('demo-todo::list')->with('todos', $todos);
    }
}
