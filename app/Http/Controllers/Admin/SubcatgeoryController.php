<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\SubCategory;
use App\Models\Admin\Category;
use App\Http\Requests\Admin\SubcategoryFormRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class SubcatgeoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $search = $request->query('search');

    // Fetch subcategories based on search query
    $subcategories = SubCategory::query()
        ->when($search, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%');
        })
        ->orderBy('created_at', 'DESC')
        ->paginate(10);

    return view('Admin.Subcategory.index', compact('subcategories'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        return view('Admin.Subcategory.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubcategoryFormRequest $request)
    {
        $subcategorydata = $request->validated();
        
        $subcategory = new SubCategory;
        $subcategory->name = $subcategorydata['name'];
        $subcategory->slug = Str::slug($subcategorydata['slug']);
        $subcategory->status = $request->has('status') && $request->status === true ? 'active' : 'inactive';
        $subcategory->category_id = $subcategorydata['category_id'];

        $subcategory->save();


        return redirect()->route('Admin.Subcategory.index')->with('success', 'Category created successfully');

    }

    
   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $subcategory = SubCategory::findOrFail($id);
        $categories = Category::orderBy('name', 'ASC')->get();
        
        return view('Admin.Subcategory.edit', compact('subcategory', 'categories'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(SubcategoryFormRequest $request, $id)
    {
        $subcategory = SubCategory::findOrFail($id);
        $subcategoryData = $request->validated();
        
        $subcategory->name = $subcategoryData['name'];
        $subcategory->slug = Str::slug($subcategoryData['slug']);
        $subcategory->status = $request->has('status') && $request->status === true ? 'active' : 'inactive';
        $subcategory->category_id = $subcategoryData['category_id'];
    
        $subcategory->save();
    
        return redirect()->route('Admin.Subcategory.index')->with('success', 'Subcategory updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $subcategory = SubCategory::findOrFail($id);
    $subcategory->delete();

    return redirect()->route('Admin.Subcategory.index')->with('success', 'Subcategory deleted successfully');
}

}
