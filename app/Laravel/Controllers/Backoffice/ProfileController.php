<?php

namespace App\Laravel\Controllers\Backoffice;

use App\Laravel\Models\Admin;
use App\Laravel\Requests\Backoffice\ProfileUpdateRequest;
use App\Laravel\Requests\PageRequest;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->data['title_page'] = "Profile";
    }

    public function index()
    {
        $this->data['user'] = auth('admin')->user();
        return view('backoffice.profile.index', $this->data);
    }

    public function edit()
    {
        $this->data['user'] = auth('admin')->user();
        return view('backoffice.profile.edit', $this->data);
    }

    public function update(ProfileUpdateRequest $request)
    {
        $user_id = auth('admin')->user()->id;
        DB::beginTransaction();

        try {
            $user = Admin::find($user_id);
            $user->full_name = strtoupper($request->input('full_name'));
            $user->email = strtolower($request->input('email'));
            $request->input('password') && $user->password = bcrypt($request->input('password'));
            $user->save();

            DB::commit();

            session()->flash('notification-status', "success");
            session()->flash('notification-msg', "Successfully update.");
            return redirect()->route('backoffice.profile.index');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('notification-status', "failed");
            session()->flash('notification-msg', "Server error. Please try again later.");
            return redirect()->back();
        }
    }
}
