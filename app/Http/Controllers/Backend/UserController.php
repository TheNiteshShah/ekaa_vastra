<?php
           namespace App\Http\Controllers\Backend;
           use App\Http\Controllers\Controller;
           
            use App\Models\Backend\Users;
            use App\Models\Backend\AdminSidebar1;
            use Illuminate\Http\Request;
            use Illuminate\Support\Facades\Hash;
            use Illuminate\Support\Facades\Storage;
            use Auth;
            class UserController extends Controller
            {

                public function index()
                {
                    $users = Users::wherenull('deleted_at')->latest()->get();
                    return view('Backend/users.index', compact('users'));
                }


                public function create()
                {
                    $users = new Users();
                    return view('Backend/users.create', compact('users'));
                }

                public function store(Request $request)
                {
                    if ($request->id === null) {
                        $this->validate($request, [
                        	 'name' =>'string|required',
	 'phone' =>'string|required',

                        ]);
                    } else {
                        $this->validate($request, [
                        	 'name' =>'string|required',
	 'phone' =>'string|required',

                        ]);
                    }
                    if ($request->id === null) {
                        $users = new Users();
                        
                    } else {
                        $users = Users::where('id', $request->id)->first();
                    }
                   
                    

                    $userId = Auth::id();
                     	 $users->name= $request->name; 
 	 $users->phone= $request->phone; 

                    $users->ip = $request->ip();
                    $users->is_active = 1;
                    $users->date = now()->getTimestamp();
                    $users->added_by = $userId;
                    $users->save();
                    if ($users) {
                        if ($request->id === null) {
                            return redirect()->route('users.index')->with('success', 'Users Added Successfully!');
                        } else {
                            return redirect()->route('users.index')->with('success', 'Users Updated Successfully');
                        }
                    } else {
                        return redirect()->back()->with('error', 'Something Went Wrong');
                    }
                }

                public function show($id)
                {
                    //
                }

                public function edit($id)
                {
                    $users = Users::where('id', $id)->first();
                    return view('Backend/users.create', compact('users'));
                }

                public function update($id)
                    {
                    }

                    public function destroy($id)
                    {
                        $users = Users::findOrFail($id);
                        $users->delete();
                        return $data = ['status' => 'success'];
                    }
                    public function updateStatus($id)
                    {
                        $users = Users::findOrFail($id);
                        $users->is_active = !$users->is_active;
                        $users->save();
                        return response()->json(['message' => 'Status updated successfully.']);
                    }

                }

       ?>
        