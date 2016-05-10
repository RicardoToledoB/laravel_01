<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

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

    /*public function index(Request $request) {
        $name = $request->input('nombre');
        $data['usuarios'] = DB::table('Usuarios')->where('nombre', 'like', $name)->paginate(10);
        return view('users.index', $data);
    }*/

    public function index(Request $request) {
        $name = $request->input('nombre');
        if($name!=null){
            $data = Usuario::where('nombre', 'like', '%'.$name.'%')->paginate(10);
            //$data = DB::table('Usuarios')->where('nombre','like',$name)->paginate(10);
        }else{
            $data = DB::table('Usuarios')->paginate(10);
        }
        //dd($data);
        return view('users.index',  compact('data'));
    
            
     }

}
