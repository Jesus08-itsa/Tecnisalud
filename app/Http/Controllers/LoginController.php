<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function show()
    {
        if (Auth::check()) {
            return redirect()->route('home.index');
        }
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();
        $remember = $request->has('remember'); // Verifica si está marcada la casilla "Recordar sesión"
        
        if (Auth::attempt($credentials, $remember)) {
            return $this->authenticated($request, Auth::user());
        }

        return redirect()->route('login.show')
            ->withErrors(trans('auth.failed'));
    }

    protected function authenticated(Request $request, $user) 
    {
        if ($user->id_perfil == 1) { // Doctor
            return redirect()->route('home.admin');
        } else if ($user->id_perfil == 2) { // Paciente
            return redirect()->route('home.user');
        }
    }
}
