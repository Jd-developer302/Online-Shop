<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CategoryFormRequest;
use App\Models\Admin\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Image;

// use Intervention\Image\ImageManager;


// use Intervention\Image\ImageManagerStatic as Image;

class CategoryController extends Controller
{
    public function index(Request $request){
        $categories = Category::query();
    
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $categories->where('name', 'like', '%' . $searchTerm . '%');
        }
    
        $categories = $categories->paginate(10);
    
        return view('Admin.Category.index', compact('categories'));
    }
    public function create(){
        return view('Admin.Category.create');
    }
    public function store(CategoryFormRequest $request)
    {
        

        $data = $request->validated();

        $category = new Category;
        $category->name = $data['name'];
        $category->slug = Str::slug($data['slug']);

      // Handle image upload if provided
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move('uploads/category/', $filename);
        $category->image = $filename;
    }

        $category->status = $request->status == true ? '1' : '0';
        $category->save();


        return redirect()->route('Admin.Category.index')->with('success', 'Category created successfully');
    }
    public function edit($id){
        $category = Category::findOrFail($id);
        return view('Admin.Category.edit', compact('category'));
    }
    public function update(CategoryFormRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $data = $request->validated();

        $category->name = $data['name'];
        $category->slug = Str::slug($data['slug']);


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/category/', $filename);

            if ($category->image) {
                File::delete(public_path('uploads/category/' . $category->image));
            }
            $category->image = $filename;
        }

        $category->status = $request->status; 
        $category->save();

        return redirect()->route('Admin.Category.index')->with('success', 'Category updated successfully');
    }
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        if ($category->image) {
            File::delete(public_path('uploads/category/' . $category->image));
        }
        
        $category->delete();

        return redirect()->route('Admin.Category.index')->with('success', 'Category deleted successfully');
    }

}
