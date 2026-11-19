<?php

namespace App\Laravel\Controllers\Backoffice;

use App\Laravel\Models\Admin;
use App\Laravel\Requests\PageRequest;
use Illuminate\Support\Facades\DB;

class AuthenticationController extends Controller
{
    public function __construct() {}

    public function login()
    {
        $this->data['title_page'] = 'Login';

        return view('backoffice.auth.login', $this->data);
    }

    public function logout()
    {
        auth('admin')->logout();
        session()->flash('notification-status', "success");
        session()->flash('notification-msg', "Logged out successfully. Session closed.");
        return redirect()->route('backoffice.auth.login');
    }

    public function authenticate(PageRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (!auth('admin')->attempt($credentials)) {
            session()->flash('notification-status', "failed");
            session()->flash('notification-msg', "Invalid credentials. Please try again.");
            return redirect()->back();
        } else {
            session()->flash('notification-status', "success");
            session()->flash('notification-msg', "Successfully logged in. Welcome back!");
            return redirect()->route('backoffice.dashboard.index');
        }
    }

    public function register()
    {
        $this->data['title_page'] = 'Register';

        return view('backoffice.auth.register', $this->data);
    }

    public function store(PageRequest $request)
    {
        DB::beginTransaction();

        try {
            $user = new Admin();
            $user->full_name = strtoupper($request->input('full_name'));
            $user->email = strtolower($request->input('email'));
            $user->password = bcrypt($request->input('password'));
            $user->save();

            DB::commit();

            session()->flash('notification-status', "success");
            session()->flash('notification-msg', "Successfully registered. Please login to continue.");
            return redirect()->route('backoffice.auth.login');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('notification-status', "failed");
            session()->flash('notification-msg', "Server error. Please try again later.");
            return redirect()->back();
        }
    }
}
