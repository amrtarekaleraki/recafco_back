<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Project;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
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

    DB::beginTransaction();

    try {

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
            $newImageName = uniqid() . '-' . $image1->getClientOriginalName();
            $image1->storeAs('project_image1', $newImageName, 'public');
            $data['image'] = $newImageName;
        }

        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $newImageName = uniqid() . '-' . $image2->getClientOriginalName();
            $image2->storeAs('project_image2', $newImageName, 'public');
            $data['image2'] = $newImageName;
        }

        if ($request->hasFile('slider_image')) {
            $images = $request->file('slider_image');
            $imageNames = [];

            foreach ($images as $image) {
                $newImageName = uniqid() . '-' . $image->getClientOriginalName();
                $image->storeAs('project_slider', $newImageName, 'public');
                $imageNames[] = $newImageName;
            }

            $data['slider_image'] = json_encode($imageNames);
        }



        Project::create($data);

        // Commit the transaction
        DB::commit();

        return to_route('admin.projects.index')->with('success', __('keywords.created_successfully'));
    } catch (\Exception $e) {
        // Rollback the transaction in case of an error
        DB::rollback();

        // Return with an error message
        return to_route('admin.projects.index')->with('error', __('keywords.error_occurred'));
    }
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

    DB::beginTransaction();

    try {

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
            $newImageName = uniqid() . '-' . $image1->getClientOriginalName();
            $image1->storeAs('project_image1', $newImageName, 'public');
            $data['image'] = $newImageName;
        }

        if ($request->hasFile('image2')) {
            // Delete old image2 if exists
            if ($project->image2) {
                Storage::delete("public/project_image2/$project->image2");
            }
            $image2 = $request->file('image2');
            $newImageName = uniqid() . '-' . $image2->getClientOriginalName();
            $image2->storeAs('project_image2', $newImageName, 'public');
            $data['image2'] = $newImageName;
        }



        // Handle multiple image update
        if ($request->hasFile('slider_image')) {
        $images = $request->file('slider_image');
        $imageNames = [];

        // Delete existing images if necessary (if you want to replace them)
        if ($project->slider_image) {
            $existingImages = json_decode($project->slider_image, true);
            foreach ($existingImages as $existingImage) {
                Storage::delete("public/project_slider/$existingImage");
            }
        }

        // Process and store new images
        foreach ($images as $image) {
            $newImageName = uniqid() . '-' . $image->getClientOriginalName();
            $image->storeAs('project_slider', $newImageName, 'public');
            $imageNames[] = $newImageName;
        }

        // Save the images as a JSON array in the 'slider_image' column
        $data['slider_image'] = json_encode($imageNames);
    }

        $project->update($data);

        DB::commit();

        return to_route('admin.projects.index')->with('success', __('keywords.updated_successfully'));
    } catch (\Exception $e) {
        // Rollback the transaction in case of an error
        DB::rollback();

        // Return with an error message
        return to_route('admin.projects.index')->with('error', __('keywords.error_occurred'));
    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        // Start a transaction to ensure atomicity
        DB::beginTransaction();

        try {
            // Delete main image if it exists
            if ($project->image) {
                Storage::delete("public/project_image1/{$project->image}");
            }

            // Delete secondary image if it exists
            if ($project->image2) {
                Storage::delete("public/project_image2/{$project->image2}");
            }

            // Delete slider images (multiple files) if they exist
            if ($project->slider_image) {
                $sliderImages = json_decode($project->slider_image, true);
                foreach ($sliderImages as $sliderImage) {
                    Storage::delete("public/project_slider/{$sliderImage}");
                }
            }

            // Delete the project record from the database
            $project->delete();

            // Commit the transaction
            DB::commit();

            return to_route('admin.projects.index')->with('success', __('keywords.deleted_successfully'));
        } catch (\Exception $e) {
            // Rollback the transaction in case of an error
            DB::rollback();

            // Return with an error message
            return to_route('admin.projects.index')->with('error', __('keywords.error_occurred'));
        }
    }



}
