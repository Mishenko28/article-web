<?php

namespace App\Laravel\Controllers\Portal;

use App\Laravel\Models\User;
use App\Laravel\Requests\PageRequest;
use Illuminate\Support\Facades\DB;

class AuthenticationController extends Controller
{
    public function __construct() {}

    public function login()
    {
        $this->data['title_page'] = 'Login';

        return view('portal.auth.login', $this->data);
    }

    public function logout()
    {
        auth('web')->logout();
        session()->flash('notification-status', "success");
        session()->flash('notification-msg', "Logged out successfully. Session closed.");
        return redirect()->route('portal.auth.login');
    }

    public function authenticate(PageRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (!auth('web')->attempt($credentials)) {
            session()->flash('notification-status', "failed");
            session()->flash('notification-msg', "Invalid credentials. Please try again.");
            return redirect()->back();
        } else {
            session()->flash('notification-status', "success");
            session()->flash('notification-msg', "Successfully logged in. Welcome back!");
            return redirect()->route('portal.home.index');
        }
    }

    public function register()
    {
        $this->data['title_page'] = 'Register';

        return view('portal.auth.register', $this->data);
    }

    public function store(PageRequest $request)
    {
        DB::beginTransaction();

        try {
            $user = new User();
            $user->first_name = strtoupper($request->input('first_name'));
            $user->middle_name = strtoupper($request->input('middle_name'));
            $user->last_name = strtoupper($request->input('last_name'));
            $user->email = strtolower($request->input('email'));
            $user->password = bcrypt($request->input('password'));
            $user->save();

            DB::commit();

            session()->flash('notification-status', "success");
            session()->flash('notification-msg', "Successfully registered. Please login to continue.");
            return redirect()->route('portal.auth.login');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('notification-status', "failed");
            session()->flash('notification-msg', "Server error. Please try again later.");
            return redirect()->back();
        }
    }
}
