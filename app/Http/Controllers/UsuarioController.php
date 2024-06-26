<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index()
    {
        //Verificacion de usuario autenticado
        if (Auth::check()) {
            //Verificacion por rol de usuario
           if(Auth::user()->role_id == 1){
                $usuarios = Usuario::all();
           }else{
                $usuario = Auth::user()->id;
                $usuarios =array( Usuario::findOrFail($usuario));
            }
            return view('usuarios.index', compact('usuarios'));
        }
        else{
            return redirect()->route('login.index');
        };
       
    }

    public function create()
    {
        $roles = DB::table('roles')->get();
        return view('usuarios.create',compact('roles'));
    }

    public function store(Request $request)
    {
        Usuario::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
        ]);
        return redirect()->route('usuarios.index');
    }

    public function show(Usuario $usuario)
    {

        return view('usuarios.show', compact('usuario'));
    }

    public function edit(Usuario $usuario)
    {
        $roles = DB::table('roles')->get();
        return view('usuarios.edit', compact('usuario', 'roles'));
    }

    public function update(Request $request, Usuario $usuario)
    {
        $usuario->update($request->all());
        return redirect()->route('usuarios.index');
    }

    public function destroy(Usuario $usuario)
    {
        //Validar rol del usuario
        if (Auth::user()->role_id != 1) {
            return redirect()->route('login.index');
        };

        //Usuario Loggeado es distinto de usuario a eliminar
        if(Auth::user()->id != $usuario->id) {
            $usuario->delete();
        };
        return redirect()->route('usuarios.index');
       
    }
}