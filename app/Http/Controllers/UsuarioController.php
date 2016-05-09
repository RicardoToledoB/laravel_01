<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Support\Facades\Redirect;

class UsuarioController extends Controller {

    public function save(Request $request) {
        $name = $request->input('nombre');
        $user = new Usuario();
        $user->nombre = $name;
        $user->save();
        return Redirect::to('users/index');
    }

    public function delete($id) {
        $user = Usuario::find($id);
        $user->delete();
        return Redirect::to('users/index');
    }

    public function index() {
        $data['usuarios'] = Usuario::all();
        return view('users.index', $data);
    }

}
