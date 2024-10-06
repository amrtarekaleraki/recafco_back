<?php

namespace App\Http\Controllers;


use App\Models\Accreditation;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreAccreditationRequest;
use App\Http\Requests\UpdateAccreditationRequest;

class AccreditationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accreditations = Accreditation::paginate(8);
        return view('admin.accreditations.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.accreditations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAccreditationRequest $request)
    {
        $data = $request->validated();

        $data['title'] = [
            'en' => $data['title'],
            'ar' => $data['title_ar'],
        ];


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $newImageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('accreditations', $newImageName, 'public');
            $data['image'] = $newImageName;
        }

        Accreditation::create($data);

        return to_route('admin.accreditations.index')->with('success', __('keywords.created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Accreditation $accreditation)
    {
        return view('admin.accreditations.show',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Accreditation $accreditation)
    {
        return view('admin.accreditations.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAccreditationRequest $request, Accreditation $accreditation)
    {
        $data = $request->validated();

        $data['title'] = [
            'en' => $data['title'],
            'ar' => $data['title_ar'],
        ];

        if ($request->hasFile('image')) {

            Storage::delete("public/accreditations/$accreditation->image");

            $image = $request->image;

            $newImageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('accreditations', $newImageName, 'public');
            $data['image'] = $newImageName;
        }

        $accreditation->update($data);

        return to_route('admin.accreditations.index')->with('success', __('keywords.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accreditation $accreditation)
    {
        Storage::delete("public/accreditations/$accreditation->image");
        $accreditation->delete();
        return to_route('admin.accreditations.index')->with('success', __('keywords.deleted_successfully'));
    }
}
