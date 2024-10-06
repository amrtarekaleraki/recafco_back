<?php

namespace App\Http\Controllers;

use App\Models\Social;
use App\Http\Requests\StoreSocialRequest;
use App\Http\Requests\UpdateSocialRequest;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socials = Social::paginate(8);
        return view('admin.socials.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.socials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSocialRequest $request)
    {
        $data = $request->validated();

        $data['factory_location'] = [
            'en' => $data['factory_location'],
            'ar' => $data['factory_location_ar'],
        ];

        $data['office_location'] = [
            'en' => $data['office_location'],
            'ar' => $data['office_location_ar'],
        ];

        Social::create($data);

        return to_route('admin.socials.index')->with('success', __('keywords.created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Social $social)
    {
        return view('admin.socials.show',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Social $social)
    {
        return view('admin.socials.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSocialRequest $request, Social $social)
    {
        $data = $request->validated();

        $data['factory_location'] = [
            'en' => $data['factory_location'],
            'ar' => $data['factory_location_ar'],
        ];

        $data['office_location'] = [
            'en' => $data['office_location'],
            'ar' => $data['office_location_ar'],
        ];

        $social->update($data);

        return to_route('admin.socials.index')->with('success', __('keywords.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Social $social)
    {
        //
    }
}
