<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    // Mostrar el formulario de registro
    public function create()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        return view('auth.register');
    }

    // Procesar el registro y llamar al procedimiento almacenado
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        // Hasheamos la contraseña antes de pasarla al procedimiento
        $hashedPassword = Hash::make($request->password);

        try {
            // Llamar al procedimiento almacenado
            DB::statement('CALL registrarUsuario(?, ?, ?)', [
                $request->name,
                $request->email,
                $hashedPassword,
            ]);

            // Obtener el usuario recién creado por email
            $user = DB::table('users')->where('email', $request->email)->first();

            if ($user) {
                Auth::loginUsingId($user->id);
                return redirect()->route('dashboard');
            }

            return redirect()->route('register')->withErrors(['error' => 'No se pudo registrar el usuario.']);

        } catch (\Exception $e) {
            return redirect()->route('register')->withErrors(['error' => 'Error: ' . $e->getMessage()]);
        }
    }
}

/* <?php

/* namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    // ✅ Mostrar el formulario de registro
    public function create()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        return view('auth.register');
    }

    // ✅ Guardar nuevo usuario
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registro exitoso. ¡Ahora inicia sesión!');
    }
} */
