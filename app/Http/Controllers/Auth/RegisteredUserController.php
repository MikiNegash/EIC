<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Actor\User;
use App\Models\Actor\Customer;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Str;

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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $random1 = Str::random(15);
        $folder= '/Photo';
        $filename1 = $random1.'.'.$request->file('photo')->getClientOriginalExtension();
        $path1=$request->file('photo')->storeAs('images/'.$folder,$filename1,'public');
        $fpath1='/storage/'.$path1;

        if ($request->hasFile('id_card')) {
            $random2 = Str::random(15);
            $folder2 = '/ID';
            $filename2 = $random2.'.'.$request->file('id_card')->getClientOriginalExtension();
            $path2=$request->file('id_card')->storeAs('images/'.$folder2,$filename2,'public');
            $fpath2 = '/storage/'.$path2;

        } else {

            $fpath2 = '';
        }

        if ($request->hasFile('passport')) {
            $random3 = Str::random(15);
        $folder3 = '/Passport';
        $filename3 = $random3.'.'.$request->file('passport')->getClientOriginalExtension();
        $path3=$request->file('passport')->storeAs('images/'.$folder3,$filename3,'public');
        $fpath3='/storage/'.$path3;

        } else {

            $fpath3 = '';
        }

           $formValue = $request->country;
    if ($formValue == 'Ethiopia') {
        $x = 'Local';
    }
     else {

        $x = 'Foreign Country';
    }
        $customer = Customer::create([
            'phone' => $request->phone,
            'country' => $request->country,
            'passport' => $fpath3,
            'id_card' =>$fpath2,
            'photo' => $fpath1,
            'country_type' => $x,
            'user_id' => $user->id,

        ]);

        event(new Registered($customer));
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
