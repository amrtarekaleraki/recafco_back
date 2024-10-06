<?php

namespace App\Http\Controllers;

use App\Models\Partener;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePartenerRequest;
use App\Http\Requests\UpdatePartenerRequest;

class PartenerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parteners = Partener::paginate(8);
        return view('admin.parteners.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.parteners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePartenerRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $newImageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('parteners', $newImageName, 'public');
            $data['image'] = $newImageName;
        }

        Partener::create($data);

        return to_route('admin.parteners.index')->with('success', __('keywords.created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Partener $partener)
    {
        return view('admin.parteners.show',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partener $partener)
    {
        return view('admin.parteners.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePartenerRequest $request, Partener $partener)
    {
        $data = $request->validated();


        if ($request->hasFile('image')) {

            Storage::delete("public/parteners/$partener->image");

            $image = $request->image;

            $newImageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('parteners', $newImageName, 'public');
            $data['image'] = $newImageName;
        }

        $partener->update($data);

        return to_route('admin.parteners.index')->with('success', __('keywords.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partener $partener)
    {
        Storage::delete("public/parteners/$partener->image");
        $partener->delete();
        return to_route('admin.parteners.index')->with('success', __('keywords.deleted_successfully'));
    }
}
