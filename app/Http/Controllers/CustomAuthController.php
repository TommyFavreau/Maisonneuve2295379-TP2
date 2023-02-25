<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;



class CustomAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|min:2|max:50',
            'email' => 'required|email|unique:users|exists:etudiants',
            'password' => ['required', 'max:20', 'alpha_num', Password::min(2)->mixedCase()],
        ]);

        $user = new User;
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();

        $etudiant = Etudiant::where('email', $request->email)->first();
        if ($etudiant) {
            $etudiant->users_id = $user->id;
            $etudiant->save();
        }



        return redirect(route('login'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }


    public function authentication(Request $request, User $user)
    {
        $request->validate([
            'email' => 'required|email|exists:etudiants',
            'password' => ['required', 'max:20', 'alpha_num', Password::min(2)->mixedCase()]
            
        ]);

        $credentials = $request->only('email', 'password');

        if (!Auth::validate($credentials)) :
            return redirect(route('login'))
                ->withErrors(trans('auth.failed'))
                ->withInput();
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user, $request->get('remember'));

        return redirect()->intended('home')->withSuccess(trans('lang.logged'));
    }


    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect(route('login'));
    }
    

    public function forgotPassword()
    {
        return view('auth.new-password');
    }


    public function updateNewPassword(Request $request, User $user)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => ['required', 'max:20', 'alpha_num', Password::min(2)->mixedCase()],
            'password_confirmation' => 'same:password',
        ]);


        $user = User::where('email', $request->email)->first();
        if ($user) {
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect('login')->withSuccess(trans('passwords.reset'));
        }

        return redirect('login')->withErrors(trans('auth.failed'));
    }
}
