<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\TaskCompleted;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use phpDocumentor\Reflection\PseudoTypes\False_;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'comment' => ['required', 'string', 'max:255'],
            'subscription' => ['required', 'string'],
            'understood' => ['required', 'string'],
            'bio' => ['required', 'string'],
            'referrer' => ['required', 'string'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if ($request->hasFile('user_pic')) {
            $extension = $request->file('user_pic')->getClientOriginalExtension();
            $fileNameToStoreAs = pathinfo($request->file('user_pic')->getClientOriginalName(), PATHINFO_FILENAME) . time() . '.' . $extension;
            $request->file('user_pic')->storeAs('public/prof-pics/', $fileNameToStoreAs);
        } else {
            $fileNameToStoreAs = '';
        }


        $user = User::create([
            'referrer' => $request->referrer,
            'subscription' => $request->understood == 'on' ? True : False,
            'comment' => $request->comment,
            'bio' => $request->bio,
            'understood' => $request->understood == 'on' ? True : False,
            'user_pic' => $fileNameToStoreAs,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'paid' => false
        ]);

        //event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
