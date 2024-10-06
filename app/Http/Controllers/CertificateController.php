<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreCertificateRequest;
use App\Http\Requests\UpdateCertificateRequest;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $certificates = Certificate::paginate(8);
        return view('admin.certificates.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.certificates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCertificateRequest $request)
    {
        $data = $request->validated();

        $data['title'] = [
            'en' => $data['title'],
            'ar' => $data['title_ar'],
        ];


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $newImageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('certificates', $newImageName, 'public');
            $data['image'] = $newImageName;
        }

        Certificate::create($data);

        return to_route('admin.certificates.index')->with('success', __('keywords.created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificate $certificate)
    {
        return view('admin.certificates.show',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificate $certificate)
    {
        return view('admin.certificates.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCertificateRequest $request, Certificate $certificate)
    {
        $data = $request->validated();

        $data['title'] = [
            'en' => $data['title'],
            'ar' => $data['title_ar'],
        ];

        if ($request->hasFile('image')) {

            Storage::delete("public/certificates/$certificate->image");

            $image = $request->image;

            $newImageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('certificates', $newImageName, 'public');
            $data['image'] = $newImageName;
        }

        $certificate->update($data);

        return to_route('admin.certificates.index')->with('success', __('keywords.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificate $certificate)
    {
        Storage::delete("public/certificates/$certificate->image");
        $certificate->delete();
        return to_route('admin.certificates.index')->with('success', __('keywords.deleted_successfully'));
    }
}
