<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        try {
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                $userRole = Auth::user()->role;

                if ($userRole == 'admin') {
                    return redirect()->route('admin.dashboard.index');
                } else if ($userRole == 'mentor') {
                    return redirect()->route('home');
                } else if ($userRole == 'student') {
                    return redirect()->route('home');
                }

                // return redirect()->route('desk.index')->with('success', 'Login efetuado com sucesso.');
            }

            return redirect()->back()->with('error', 'Credenciais inválidas.')->withInput($request->only('username'));

        } catch (\Exception $e) {
            Log::error('Erro no login: ' . $e->getMessage());

            return back()->with('error', 'Ocorreu um erro ao tentar fazer login. Tente novamente mais tarde.');
        }
    }

    public function registerStudent()
    {
        return view('auth.register-student');
    }

    public function registerMentor()
    {
        return view('auth.register-mentor');
    }



    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }

    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function chooseRole(Request $request)
    {
        return view('auth.choose-role');
    }

}
