<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use http\Client\Response;

class TodoController extends Controller
{
    function index(){
        $todos = Todo::all();
        return view('todo', ["todos" => $todos]);
    }

    function store(Request $request){
        $description = $request->post()["todo"];
        $todo = new Todo();
        $todo->description = $description;
        $todo->completed = false;
        $todo->save();
        return redirect("/");
    }

    function delete($id){
        Todo::destroy($id);
        return redirect("/");
    }

    function edit(Request $request){
        $id = $request->post()["id"];
        $description = $request->post()["description"];

        $todo = Todo::query()->where("id", "=", $id)->first();
        $todo->description = $description;
        $todo->save();
        return Response("");
    }
}
