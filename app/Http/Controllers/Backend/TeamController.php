<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use App\Models\Backend\AdminTeams;
use App\Models\Backend\AdminSidebar1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Auth;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = AdminTeams::wherenull('deleted_at')->latest()->get();
        return view('Backend/teams.index', compact('teams'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = new AdminTeams();
        $adminSidebar1 = AdminSidebar1::get();
        return view('Backend/teams.create', compact('teams', 'adminSidebar1'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->id === null) {
            $this->validate($request, [
                'name' => 'required|string',
                'password' => 'required|alpha_num|min:6',
                'email' => 'required|email|unique:admin_teams',
                'phone' => 'required|string',
                'address' => 'required|string',
                'power' => 'required|string',
                'image' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
                // 'services[]' => 'required|string',
            ]);
        } else {
            $this->validate($request, [
                'name' => 'required|string',
                'email' => 'required|email|unique:admin_teams',
                'phone' => 'required|string',
                'address' => 'required|string',
                'power' => 'required|string',
                // 'services[]' => 'required|string',
            ]);
        }
        if ($request->id === null) {
            $admin = new AdminTeams();
            $admin->password = Hash::make($request->password);
        } else {
            $admin = AdminTeams::where('id', $request->id)->first();
        }
        // Store the uploaded image
        if (!empty($request->image)) {
            $file = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/teams/'), $file);
            $image = 'uploads/teams/'.$file;
        } else {
            $image = $videos->image;
        }
        $userId = Auth::id();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->address = $request->address;
        $admin->power = $request->power;
        $admin->image = $image;
        $admin->ip = $request->ip();
        $admin->added_by = $userId;
        $admin->services = json_encode($request->services);
        $admin->save();
        if ($admin) {
            if ($request->id === null) {
                return redirect()->route('team.index')->with('success', 'Team Added Successfully!');
            } else {
                return redirect()->route('team.index')->with('success', 'Team Updated Successfully');
            }
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teams = AdminTeams::where('id', $id)->first();
        $adminSidebar1 = AdminSidebar1::get();
        return view('Backend/teams.create', compact('teams', 'adminSidebar1'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = AdminTeams::findOrFail($id);
        $user->delete();
        return $data = ['status' => 'success'];
    }
    public function updateStatus(Request $request)
    {
        $user = AdminTeams::findOrFail($request->id);
        $user->is_active = !$user->is_active;
        $user->save();
        return response()->json(['message' => 'Status updated successfully.']);
    }
}
