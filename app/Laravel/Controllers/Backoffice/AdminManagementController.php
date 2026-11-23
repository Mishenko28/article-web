<?php

namespace App\Laravel\Controllers\Backoffice;

use App\Laravel\Models\Admin;
use App\Laravel\Requests\Backoffice\AdminUpdateRequest;
use App\Laravel\Requests\PageRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminManagementController extends Controller
{
    public function __construct()
    {
        $this->data['title_page'] = 'Admin Management';
    }

    public function index()
    {
        $this->data['records'] = Admin::paginate(10);

        return view('backoffice.admin-management.index', $this->data);
    }

    public function edit(PageRequest $request, $id = null)
    {
        $this->data['record'] = Admin::find($id);

        return view('backoffice.admin-management.edit', $this->data);
    }

    public function update(AdminUpdateRequest $request, $id = null)
    {
        DB::beginTransaction();

        try {
            $admin = Admin::find($id);
            $admin->full_name = strtoupper($request->input('full_name'));
            $admin->email = strtolower($request->input('email'));

            if ($request->hasFile('avatar')) {
                $admin->avatar_path = $request->file('avatar')->store('avatar/admin', 'public');
            }

            if ($request->filled('password')) {
                $admin->password = bcrypt($request->input('password'));
            }

            $admin->save();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('notification-status', "failed");
            session()->flash('notification-msg', "Server error. Please try again later.");
            return redirect()->back();
        }

        session()->flash('notification-status', "success");
        session()->flash('notification-msg', "Successfully updated.");
        return redirect()->route('backoffice.admin-management.index');
    }

    public function show(PageRequest $request, $id = null)
    {
        $this->data['record'] = Admin::find($id);

        return view('backoffice.admin-management.show', $this->data);
    }

    public function destroy(PageRequest $request, $id = null)
    {
        $record = Admin::find($id);

        Admin::destroy($id);

        if ($record && $record->avatar_path) {
            Storage::disk('public')->delete($record->avatar_path);
        }

        session()->flash('notification-status', "success");
        session()->flash('notification-msg', "Successfully deleted.");
        return redirect()->route('backoffice.admin-management.index');
    }
}
