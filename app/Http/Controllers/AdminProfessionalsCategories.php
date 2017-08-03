<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminCreateCategoryRequest;
use App\Procategory;
use App\Prosection;
use App\Country;

class AdminProfessionalsCategories extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Procategory::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        $sections = Prosection::pluck('name', 'id')->all();
        return view('admin.categories.create', compact('sections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminCreateCategoryRequest $request)
    {
        $input = $request->all();
        
        Procategory::create($input);
        
        return redirect('admin/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Procategory::findOrFail($id);
        
        $sections = Prosection::pluck('name', 'id')->all();
        
        return view('admin.categories.edit', compact('category', 'sections'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminCreateCategoryRequest $request, $id)
    {
        $category = Procategory::findOrFail($id);
        
        $category->update($request->all());
        
        return redirect('admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Procategory::findOrFail($id)->delete();
        return redirect('admin/categories');
         
    }
}
