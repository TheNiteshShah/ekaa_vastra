<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Category;

use App\Models\Backend\AdminSidebar1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Auth;

class CategoryController extends Controller
{

    public function index()
    {
        $category = Category::wherenull('deleted_at')->latest()->get();
        return view('backend/category.index', compact('category'));
    }


    public function create()
    {

        $category = new Category();
        return view('backend/category.create', compact('category'));
    }

    public function store(Request $request)
    {
        if ($request->id === null) {
            $this->validate($request, [
                'name' => 'string|required',
                'sequence' => 'string|required',

            ]);
        } else {
            $this->validate($request, [
                'name' => 'string|required',
                'sequence' => 'string|required',

            ]);
        }
        if ($request->id === null) {
            $category = new Category();
        } else {
            $category = Category::where('id', $request->id)->first();
        }


        if (!empty($request->image)) {
            $file = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/category/'), $file);
            $image = 'uploads/category/' . $file;
        } else {
            $image = $category->image;
        }



        $userId = Auth::id();
        $category->name = $request->name;
        $category->image = $image;
        $category->sequence = $request->sequence;

        $category->ip = $request->ip();
        $category->is_active = 1;
        $category->added_by = $userId;
        $category->save();
        if ($category) {
            if ($request->id === null) {
                return redirect()->route('category.index')->with('success', 'Category Added Successfully!');
            } else {
                return redirect()->route('category.index')->with('success', 'Category Updated Successfully');
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

        $category = Category::where('id', $id)->first();
        return view('backend/category.create', compact('category'));
    }

    public function update($id)
    {
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return $data = ['status' => 'success'];
    }
    public function updateStatus($id)
    {
        $category = Category::findOrFail($id);
        $category->is_active = !$category->is_active;
        $category->save();
        return response()->json(['message' => 'Status updated successfully.']);
    }
}
