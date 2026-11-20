<?php

namespace App\Laravel\Controllers\Portal;

use App\Laravel\Models\User;
use App\Laravel\Requests\Portal\ProfileUpdateRequest;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->data['title_page'] = "Profile";
    }

    public function index()
    {
        $this->data['user'] = auth('web')->user();
        return view('portal.profile.index', $this->data);
    }

    public function edit()
    {
        $this->data['user'] = auth('web')->user();
        return view('portal.profile.edit', $this->data);
    }

    public function update(ProfileUpdateRequest $request)
    {
        $user_id = auth('web')->user()->id;
        DB::beginTransaction();

        try {
            $user = User::find($user_id);
            $user->first_name = strtoupper($request->input('first_name'));
            $user->middle_name = strtoupper($request->input('middle_name'));
            $user->last_name = strtoupper($request->input('last_name'));
            $user->email = strtolower($request->input('email'));
            $request->input('password') && $user->password = bcrypt($request->input('password'));
            $user->save();

            DB::commit();

            session()->flash('notification-status', "success");
            session()->flash('notification-msg', "Successfully update.");
            return redirect()->route('portal.profile.index');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('notification-status', "failed");
            session()->flash('notification-msg', "Server error. Please try again later.");
            return redirect()->back();
        }
    }
}
