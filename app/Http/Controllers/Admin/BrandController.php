<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;
use App\Http\Requests\Admin\BrandFormRequest;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
    
        $brands = Brand::query();
    
        if ($keyword) {
            $brands->where('name', 'like', '%' . $keyword . '%');
        }
    
        $brands = $brands->paginate(10);
    
        return view('Admin.Brand.index', compact('brands', 'keyword'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BrandFormRequest $request)
    {
        $branddata = $request->validated();
        
        $brand = new Brand;
        $brand->name = $branddata['name'];
        $brand->slug = Str::slug($branddata['slug']);
        $brand->status = $request->has('status') && $request->status === true ? 'active' : 'inactive';

        $brand->save();


        return redirect()->route('Admin.Brand.index')->with('success', 'Brand created successfully');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('Admin.Brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BrandFormRequest $request, $id)
    {
        $brand = Brand::findOrFail($id);
        $branddata = $request->validated();
        
        $brand->name = $branddata['name'];
        $brand->slug = Str::slug($branddata['slug']);
        $brand->status = $request->has('status') && $request->status === true ? 'active' : 'inactive';
    
        $brand->save();
    
        return redirect()->route('Admin.Brand.index')->with('success', 'Brand updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();
    
        return redirect()->route('Admin.Brand.index')->with('success', 'Brand deleted successfully');
    }
}
