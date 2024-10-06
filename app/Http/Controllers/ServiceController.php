<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::paginate(8);
        return view('admin.services.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $data = $request->validated();

        $data['title'] = [
            'en' => $data['title'],
            'ar' => $data['title_ar'],
        ];

        $data['description'] = [
            'en' => $data['description'],
            'ar' => $data['description_ar'],
        ];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $newImageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('services', $newImageName, 'public');
            $data['image'] = $newImageName;
        }

        Service::create($data);

        return to_route('admin.services.index')->with('success', __('keywords.created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('admin.services.show',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $data = $request->validated();

        $data['title'] = [
            'en' => $data['title'],
            'ar' => $data['title_ar'],
        ];

        $data['description'] = [
            'en' => $data['description'],
            'ar' => $data['description_ar'],
        ];

        if ($request->hasFile('image')) {

            Storage::delete("public/services/$service->image");

            $image = $request->image;

            $newImageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('services', $newImageName, 'public');
            $data['image'] = $newImageName;
        }

        $service->update($data);

        return to_route('admin.services.index')->with('success', __('keywords.updated_successfully'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        Storage::delete("public/services/$service->image");
        $service->delete();
        return to_route('admin.services.index')->with('success', __('keywords.deleted_successfully'));
    }
}
