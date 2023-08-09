<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Category;
use App\Models\Backend\Subcategory;

use App\Models\Backend\AdminSidebar1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Auth;

class SubCategoryController extends Controller
{

    public function index()
    {
        $subcategory = Subcategory::wherenull('deleted_at')->latest()->get();
        return view('backend/subcategory.index', compact('subcategory'));
    }


    public function create()
    {

        $subcategory = new Subcategory();
        $category = Category::wherenull('deleted_at')->where('is_active', 1)->latest()->get();

        return view('backend/subcategory.create', compact('subcategory', 'category'));
    }

    public function store(Request $request)
    {
        if ($request->id === null) {
            $this->validate($request, [
                'category_id' => 'required',
                'name' => 'string|required',
                'sequence' => 'string|required',

            ]);
        } else {
            $this->validate($request, [
                'category_id' => 'required',
                'name' => 'string|required',
                'sequence' => 'string|required',

            ]);
        }
        if ($request->id === null) {
            $subcategory = new Subcategory();
        } else {
            $subcategory = Subcategory::where('id', $request->id)->first();
        }


        if (!empty($request->image)) {
            $file = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/subcategory/'), $file);
            $image = 'uploads/subcategory/' . $file;
        } else {
            $image = $subcategory->image;
        }



        $userId = Auth::id();
        $subcategory->category_id = $request->category_id;
        $subcategory->name = $request->name;
        $subcategory->image = $image;
        $subcategory->sequence = $request->sequence;

        $subcategory->ip = $request->ip();
        $subcategory->is_active = 1;
        $subcategory->added_by = $userId;
        $subcategory->save();
        if ($subcategory) {
            if ($request->id === null) {
                return redirect()->route('subcategory.index')->with('success', 'Subcategory Added Successfully!');
            } else {
                return redirect()->route('subcategory.index')->with('success', 'Subcategory Updated Successfully');
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

        $subcategory = Subcategory::where('id', $id)->first();
        $category = Category::wherenull('deleted_at')->where('is_active', 1)->latest()->get();

        return view('backend/subcategory.create', compact('subcategory', 'category'));
    }

    public function update($id)
    {
    }

    public function destroy($id)
    {
        $subcategory = Subcategory::findOrFail($id);
        $subcategory->delete();
        return $data = ['status' => 'success'];
    }
    public function updateStatus($id)
    {
        $subcategory = Subcategory::findOrFail($id);
        $subcategory->is_active = !$subcategory->is_active;
        $subcategory->save();
        return response()->json(['message' => 'Status updated successfully.']);
    }
}
