<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use App\Http\Requests\StoreCounterRequest;
use App\Http\Requests\UpdateCounterRequest;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $counters = Counter::paginate(8);
        return view('admin.counters.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.counters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCounterRequest $request)
    {
        $data = $request->validated();

        Counter::create($data);

        return to_route('admin.counters.index')->with('success', __('keywords.created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Counter $counter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Counter $counter)
    {
        return view('admin.counters.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCounterRequest $request, Counter $counter)
    {
        $data = $request->validated();


        $counter->update($data);

        return to_route('admin.counters.index')->with('success', __('keywords.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Counter $counter)
    {
        //
    }
}
