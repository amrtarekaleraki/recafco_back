<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Project;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::paginate(8);
        return view('admin.projects.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('admin.projects.create',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();

        $data['title'] = [
            'en' => $data['title'],
            'ar' => $data['title_ar'],
        ];
        $data['location'] = [
            'en' => $data['location'],
            'ar' => $data['location_ar'],
        ];
        $data['client'] = [
            'en' => $data['client'],
            'ar' => $data['client_ar'],
        ];
        $data['subtitle'] = [
            'en' => $data['subtitle'],
            'ar' => $data['subtitle_ar'],
        ];
        $data['description'] = [
            'en' => $data['description'],
            'ar' => $data['description_ar'],
        ];

        if ($request->hasFile('image')) {
            $image1 = $request->file('image');
            $newImageName = time() . '-' . $image1->getClientOriginalName();
            $image1->storeAs('project_image1', $newImageName, 'public');
            $data['image'] = $newImageName;
        }

        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $newImageName = time() . '-' . $image2->getClientOriginalName();
            $image2->storeAs('project_image2', $newImageName, 'public');
            $data['image2'] = $newImageName;
        }

        if ($request->hasFile('slider_image')) {
            $slider = $request->file('slider_image');
            $newImageName = time() . '-' . $slider->getClientOriginalName();
            $slider->storeAs('project_slider', $newImageName, 'public');
            $data['slider_image'] = $newImageName;
        }


        Project::create($data);

        return to_route('admin.projects.index')->with('success', __('keywords.created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $categories = Category::all();
        $products = Product::all();
        return view('admin.projects.show',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $categories = Category::all();
        $products = Product::all();
        return view('admin.projects.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $data = $request->validated();

        $data['title'] = [
            'en' => $data['title'],
            'ar' => $data['title_ar'],
        ];
        $data['location'] = [
            'en' => $data['location'],
            'ar' => $data['location_ar'],
        ];
        $data['client'] = [
            'en' => $data['client'],
            'ar' => $data['client_ar'],
        ];
        $data['subtitle'] = [
            'en' => $data['subtitle'],
            'ar' => $data['subtitle_ar'],
        ];
        $data['description'] = [
            'en' => $data['description'],
            'ar' => $data['description_ar'],
        ];

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($project->image) {
                Storage::delete("public/project_image1/$project->image");
            }
            $image1 = $request->file('image');
            $newImageName = time() . '-' . $image1->getClientOriginalName();
            $image1->storeAs('project_image1', $newImageName, 'public');
            $data['image'] = $newImageName;
        }

        if ($request->hasFile('image2')) {
            // Delete old image2 if exists
            if ($project->image2) {
                Storage::delete("public/project_image2/$project->image2");
            }
            $image2 = $request->file('image2');
            $newImageName = time() . '-' . $image2->getClientOriginalName();
            $image2->storeAs('project_image2', $newImageName, 'public');
            $data['image2'] = $newImageName;
        }

        if ($request->hasFile('slider_image')) {
            // Delete old slider image if exists
            if ($project->slider_image) {
                Storage::delete("public/project_slider/$project->slider_image");
            }
            $slider = $request->file('slider_image');
            $newImageName = time() . '-' . $slider->getClientOriginalName();
            $slider->storeAs('project_slider', $newImageName, 'public');
            $data['slider_image'] = $newImageName;
        }

        $project->update($data);

        return to_route('admin.projects.index')->with('success', __('keywords.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        Storage::delete("public/project_image1/$project->image");
        Storage::delete("public/project_image2/$project->image2");
        Storage::delete("public/project_slider/$project->slider_image");
        $project->delete();
        return to_route('admin.projects.index')->with('success', __('keywords.deleted_successfully'));
    }
}
