<?php

namespace App\Laravel\Controllers\Portal\CMS;

use App\Laravel\Controllers\Portal\Controller;
use App\Laravel\Models\CMS;
use App\Laravel\Requests\PageRequest;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function __construct() {}

    public function index(PageRequest $request)
    {
        $auth = $request->user('web');

        $this->data['title_page'] = 'Contact';
        $this->data['variables'] = CMS::where('user_id', $auth->id)
            ->where('page', 'contact')
            ->get();

        return view('portal.cms.contact', $this->data);
    }

    public function update(PageRequest $request)
    {
        $auth = $request->user('web');

        DB::beginTransaction();

        try {
            foreach ($request->all() as $key => $value) {
                if ($key === "_token") continue;

                $cms_contact = CMS::where('section', $key)
                    ->where('page', 'contact')
                    ->first();

                if (!$cms_contact) {
                    $cms_contact = new CMS;
                    $cms_contact->user_id = $auth->id;
                    $cms_contact->section = $key;
                    $cms_contact->page = 'contact';
                }

                $cms_contact->content = $value;
                $cms_contact->save();
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            session()->flash('notification-status', "failed");
            session()->flash('notification-msg', "Server error. Please try again later.");
            return redirect()->back();
        }

        session()->flash('notification-status', "success");
        session()->flash('notification-msg', "Successfully updated.");
        return redirect()->route('portal.contact.index');
    }
}
