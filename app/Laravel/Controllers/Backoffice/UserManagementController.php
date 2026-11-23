<?php

namespace App\Laravel\Controllers\Backoffice;

use App\Laravel\Models\User;
use App\Laravel\Requests\Backoffice\UserUpdateRequest;
use App\Laravel\Requests\PageRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserManagementController extends Controller
{
    public function __construct()
    {
        $this->data['title_page'] = 'User Management';
    }

    public function index()
    {
        $this->data['records'] = User::paginate(10);

        return view('backoffice.user-management.index', $this->data);
    }

    public function edit(PageRequest $request, $id = null)
    {
        $this->data['record'] = User::find($id);

        return view('backoffice.user-management.edit', $this->data);
    }

    public function update(UserUpdateRequest $request, $id = null)
    {
        DB::beginTransaction();

        try {
            $user = User::find($id);
            $user->first_name = strtoupper($request->input('first_name'));
            $user->middle_name = strtoupper($request->input('middle_name'));
            $user->last_name = strtoupper($request->input('last_name'));
            $user->email = strtolower($request->input('email'));

            if ($request->hasFile('avatar')) {
                $user->avatar_path = $request->file('avatar')->store('avatar/user', 'public');
            }

            if ($request->filled('password')) {
                $user->password = bcrypt($request->input('password'));
            }

            $user->save();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('notification-status', "failed");
            session()->flash('notification-msg', "Server error. Please try again later.");
            return redirect()->back();
        }

        session()->flash('notification-status', "success");
        session()->flash('notification-msg', "Successfully updated.");
        return redirect()->route('backoffice.user-management.index');
    }

    public function show(PageRequest $request, $id = null)
    {
        $this->data['record'] = User::find($id);

        return view('backoffice.user-management.show', $this->data);
    }

    public function destroy(PageRequest $request, $id = null)
    {
        $record = User::find($id);

        User::destroy($id);

        if ($record && $record->avatar_path) {
            Storage::disk('public')->delete($record->avatar_path);
        }

        session()->flash('notification-status', "success");
        session()->flash('notification-msg', "Successfully deleted.");
        return redirect()->route('backoffice.user-management.index');
    }
}
