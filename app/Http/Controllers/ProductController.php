<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(8);
        return view('admin.products.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
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

        if ($request->hasFile('pdf')) {
            $pdfFile = $request->file('pdf');
            $newPdfName = time() . '-' . $pdfFile->getClientOriginalName();
            $pdfFile->storeAs('products_pdf', $newPdfName, 'public');
            $data['pdf'] = $newPdfName;
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $newImageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('products_images', $newImageName, 'public');
            $data['image'] = $newImageName;
        }

        if ($request->hasFile('slider_product')) {
            $images = $request->file('slider_product');
            $imageNames = [];

            foreach ($images as $image) {
                $newImageName = time() . '-' . $image->getClientOriginalName();
                $image->storeAs('products_slider_images', $newImageName, 'public');
                $imageNames[] = $newImageName;
            }

            $data['slider_product'] = json_encode($imageNames);
        }

        Product::create($data);

        return to_route('admin.products.index')->with('success', __('keywords.created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.products.show',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
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

        if ($request->hasFile('pdf')) {

            Storage::delete("public/products_pdf/$product->pdf");

            $pdfFile = $request->file('pdf');

            $newPdfName = time() . '-' . $pdfFile->getClientOriginalName();

            $pdfFile->storeAs('products_pdf', $newPdfName, 'public');

            $data['pdf'] = $newPdfName;
        }

        if ($request->hasFile('image')) {

            Storage::delete("public/products_images/$product->image");

            $image = $request->image;

            $newImageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('products_images', $newImageName, 'public');
            $data['image'] = $newImageName;
        }


         // Handle multiple image update
        if ($request->hasFile('slider_product')) {
            $images = $request->file('slider_product');
            $imageNames = [];

            // Delete existing images if necessary (if you want to replace them)
            if ($product->slider_product) {
                $existingImages = json_decode($product->slider_product, true);
                foreach ($existingImages as $existingImage) {
                    Storage::delete("public/products_slider_images/$existingImage");
                }
            }

            // Process and store new images
            foreach ($images as $image) {
                $newImageName = time() . '-' . $image->getClientOriginalName();
                $image->storeAs('products_slider_images', $newImageName, 'public');
                $imageNames[] = $newImageName;
            }

            // Save the images as a JSON array in the 'slider_product' column
            $data['slider_product'] = json_encode($imageNames);
        }



        $product->update($data);

        return to_route('admin.products.index')->with('success', __('keywords.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Storage::delete("public/products_images/$product->image");
        Storage::delete("public/products_pdf/$product->pdf");
        if ($product->slider_product) {
            $sliderImages = json_decode($product->slider_product, true);
            foreach ($sliderImages as $sliderImage) {
                Storage::delete("public/products_slider_images/$sliderImage");
            }
        }
        $product->delete();
        return to_route('admin.products.index')->with('success', __('keywords.deleted_successfully'));
    }
}
