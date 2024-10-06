<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('admin.profile.index',get_defined_vars());
    }

    public function update(AdminRequest $request)
{
    $data = $request->validated();

    // Get the authenticated user
    $user = Auth::user();

    // Check old password if a new password is provided
    if ($request->old_password !== null) {
        if (!Hash::check($request->old_password, $user->password)) {
            return back()->with("error", __('keywords.old_password_error'));
        }
    }

    // If a new password is provided, hash and update it
    if ($request->new_password !== null) {
        $user->password = Hash::make($request->new_password);
    }

    // Handle image upload if present
    if ($request->hasFile('image')) {
        if ($user->image) {
            Storage::delete("public/admin/{$user->image}");
        }

        $image = $request->image;
        $newImageName = time() . '-' . $image->getClientOriginalName();
        $image->storeAs('admin', $newImageName, 'public');
        $data['image'] = $newImageName;
    }

    // Update the user with the validated data
    $user->update($data);

    return to_route('admin.profile')->with('success', __('keywords.updated_successfully'));
}




}
