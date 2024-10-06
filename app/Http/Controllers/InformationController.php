<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreInformationRequest;
use App\Http\Requests\UpdateInformationRequest;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $informations = Information::paginate(8);
        return view('admin.informations.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInformationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Information $information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Information $information)
    {
        return view('admin.informations.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInformationRequest $request, Information $information)
    {
        $data = $request->validated();

        if ($request->hasFile('mission')) {

            Storage::delete("public/mission/$information->mission");

            $mission = $request->file('mission');

            $newmissionName = time() . '-' . $mission->getClientOriginalName();

            $mission->storeAs('mission', $newmissionName, 'public');

            $data['mission'] = $newmissionName;
        }

        if ($request->hasFile('trusted')) {

            Storage::delete("public/trusted/$information->trusted");

            $trusted = $request->file('trusted');

            $newtrustedName = time() . '-' . $trusted->getClientOriginalName();

            $trusted->storeAs('trusted', $newtrustedName, 'public');

            $data['trusted'] = $newtrustedName;
        }


        if ($request->hasFile('quality')) {

            Storage::delete("public/quality/$information->quality");

            $quality = $request->file('quality');

            $newqualityName = time() . '-' . $quality->getClientOriginalName();

            $quality->storeAs('quality', $newqualityName, 'public');

            $data['quality'] = $newqualityName;
        }

        if ($request->hasFile('hse')) {

            Storage::delete("public/hse/$information->hse");

            $hse = $request->file('hse');

            $newhseName = time() . '-' . $hse->getClientOriginalName();

            $hse->storeAs('hse', $newhseName, 'public');

            $data['hse'] = $newhseName;
        }



        $information->update($data);

        return to_route('admin.informations.index')->with('success', __('keywords.created_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Information $information)
    {
        Storage::delete("public/mission/$information->mission");
        Storage::delete("public/trusted/$information->trusted");
        Storage::delete("public/quality/$information->quality");
        Storage::delete("public/hse/$information->hse");
        $information->delete();
        return to_route('admin.informations.index')->with('success', __('keywords.deleted_successfully'));
    }
}
