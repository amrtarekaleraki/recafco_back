<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(8);
        return view('admin.categories.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $data = $request->validated();

        $data['title'] = [
            'en' => $data['title'],
            'ar' => $data['title_ar'],
        ];


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $newImageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('categories', $newImageName, 'public');
            $data['image'] = $newImageName;
        }

        Category::create($data);

        return to_route('admin.categories.index')->with('success', __('keywords.created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('admin.categories.show',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $data = $request->validated();

        $data['title'] = [
            'en' => $data['title'],
            'ar' => $data['title_ar'],
        ];

        if ($request->hasFile('image')) {

            Storage::delete("public/categories/$category->image");

            $image = $request->image;

            $newImageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('categories', $newImageName, 'public');
            $data['image'] = $newImageName;
        }

        $category->update($data);

        return to_route('admin.categories.index')->with('success', __('keywords.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        Storage::delete("public/categories/$category->image");
        $category->delete();
        return to_route('admin.categories.index')->with('success', __('keywords.deleted_successfully'));
    }
}
