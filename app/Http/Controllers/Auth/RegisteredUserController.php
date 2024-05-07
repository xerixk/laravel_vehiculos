<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        if($request->hasFile('avatar') && $request->file('avatar') ){
            $uploadedFile = $request->file('avatar');
            $fileName = $uploadedFile->getClientOriginalName();
            $path = Storage::putFileAs('public/avatars', $uploadedFile, $fileName);
        }

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'lastname' => ['required', 'string', 'max:250'],
            'direccion' => ['required', 'string', 'max:250'],
            'ciudad' => ['required', 'string', 'max:250'],
            'pais' => ['required', 'string', 'max:250'],
            'telefono' => ['required', 'numeric','digits_between:10,15'],
            'codigoPostal' => ['required', 'numeric', 'digits_between:1,10'],
            'nacimiento' => ['required', 'date','before:-18 years'],
            'genero' => ['required', Rule::in(['masculino', 'femenino'])],
             'avatar'=> $fileName ?? null,
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'direccion' => $request->direccion,
            'ciudad' => $request->ciudad,
            'pais'  => $request->pais,
            'telefono' => $request->telefono,
            'codigoPostal' => $request->codigoPosta,
            'nacimiento' => $request->nacimiento,
            'genero' => $request->genero,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
