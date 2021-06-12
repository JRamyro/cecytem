<?php

namespace App\Http\Controllers;

use App\Todos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{

    private $pendienteState = 'pendiente';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $todos = Todos::all();
        Log::info('total de todos para mostrar [' . count($todos) . ']');
        return view('home-content')->with('todos', $todos);
    }

    public function todos()
    {
        return view('todos.todohome');
    }

    public function avatar()
    {
        return view('config.avatar');
    }

    public function update(Request $request)
    {
        Log::info('Image received');
        $image = $request->avatarImage->store('avatars', 'public');
        auth()->user()->update(['avatar' => $image]);
        return redirect()->back();
    }

    public function guardarTarea(Request $request)
    {
        $todo = $request->input('nuevoTodo');
        Log::info('Guardando nuevo todo [' . $todo . ']');
        $todoObject = new Todos();
        $todoObject->todo = $todo;
        $todoObject->estatus = $this->pendienteState;
        $todoObject->save();
        return redirect()->back();
    }


}
