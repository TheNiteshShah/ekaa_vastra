<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\AdminSidebar1;
use App\Models\Backend\AdminSidebar2;
use App\Models\Backend\AdminSidebar3;
use App\Models\Backend\AdminTeams;

use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Admin = Auth::guard('web')->user();
        $permission = array_map('intval', json_decode($Admin->services));
        if ($permission == [999]) {
            return view('Backend/dashboard');
        } else {
            $sidebar1 = AdminSidebar1::where(array('is_active' => 1))->whereIn('id', $permission)->first();
            $sidebar2 = AdminSidebar2::OrderBy('seq', 'asc')->where(array('is_active' => 1))->where('sidebar1_id', $sidebar1->id)->first();
            $sidebar3 = AdminSidebar3::OrderBy('seq', 'asc')->where(array('is_active' => 1))->where('sidebar2_id', $sidebar2->id)->get();
            return redirect()->route($sidebar3[1]->url);
        }
    }
    public function admin_account()
    {
        $id = auth()->user()->id;
        $data = AdminTeams::wherenull('deleted_at')->Where("id", $id)->latest()->first();




        return view('backend/account', compact('data'));
    }
    public function admin_updateform()
    {
        $id = auth()->user()->id;
        $teams = AdminTeams::wherenull('deleted_at')->Where("id", $id)->latest()->first();
        $adminSidebar1 = AdminSidebar1::get();

        return view('backend/updateadmin', compact('teams', 'adminSidebar1'));
    }
    public function admin_profile_update(Request $request)
    {



        $this->validate($request, [
            'name' => 'string|required',
            'phone' => 'string|required',
            'address' => 'string|required',
            'power' => 'required|string',
        ]);



        $admin = AdminTeams::Where("id", $request->id)->first();





        if (!empty($request->image)) {
            $file = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/profile/'), $file);
            $image = 'uploads/profile/' . $file;
        } else {
            $image = $admin->image;
        }




        $userId = Auth::id();
        $admin->name = $request->name;
        $admin->image = $image;
        $admin->address = $request->address;
        $admin->phone = $request->phone;

        $admin->power = $request->power;


        $admin->save();
        if ($admin) {

            return redirect()->route('admin_account')->with('success', 'Profile Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    }

    public function institute_enquiry()
    {

        $id = auth()->user()->id;
        $contact_us = InstituteContact_us::wherenull('deleted_at')->latest()->get();


        return view('Backend/institute_enquiry/index', compact('contact_us'));
    }
}
