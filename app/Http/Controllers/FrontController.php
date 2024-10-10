<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Counter;
use App\Models\Product;
use App\Models\Project;
use App\Models\Category;
use App\Models\Partener;
use App\Models\Certificate;
use App\Models\Information;
use Illuminate\Http\Request;
use App\Models\Accreditation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreContactRequest;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class FrontController extends Controller
{
    public function index()
    {
        $certificates = Certificate::get();
        $accreditations = Accreditation::get();
        $counters = Counter::first();
        $parteners = Partener::get();
        $projects = Project::where('featured','active')->get();
         return view('front.index',get_defined_vars());
    }


    public function about()
    {
        $information = Information::first();
        return view('front.about',get_defined_vars());

    }

    public function production()
    {
        $products = Product::get();
        return view('front.production',get_defined_vars());

    }

    public function construction()
    {
        $categories = Category::with('projects')->has('projects')->get();
        return view('front.construction',get_defined_vars());

    }

    public function projects()
    {
        $projects = Project::with('category')->get(); // Eager load categories

        // Group projects by category
        $projectCounts = Project::select('category_id', DB::raw('count(*) as total'))
                                 ->groupBy('category_id')
                                 ->pluck('total', 'category_id');

        return view('front.projects', [
            'projects' => $projects,
            'categories' => Category::all(),
            'projectCounts' => $projectCounts,
        ]);
    }

    public function contacts()
    {
        return view('front.contacts');

    }

    public function notfound()
    {
        return view('front.notfound');
    }

    public function SingleProject(Project $project)
    {
        $related = Project::where('category_id',$project->category->id)->where('id', '!=', $project->id)->get();
        return view('front.single-project',get_defined_vars());
    }

    public function switchLanguage($lang)
    {

        // Set the locale in session
        Session::put('locale', $lang);

        // Apply the locale for the current request
        LaravelLocalization::setLocale($lang);

        // Regenerate session to ensure change is applied
        Session::save();

        // Redirect back to the previous page
        return redirect()->back();
    }

    public function notfoundPage()
    {
        return view('front.404');
    }

    public function search(Request $request)
    {
        $query = $request->input('search'); // Get the search keyword

        // Initialize results
        $results = collect();

        if ($query) {
            // Search in `projects` table and get all columns
            $results = Project::where('title', 'LIKE', "%{$query}%")->get();
        }

        // Return results to the view
        return view('front.search', compact('results', 'query'));
    }



    public function precast(Product $product)
    {
        return view('front.precast',get_defined_vars());
    }

    public function patching_plant(Product $product)
    {
        return view('front.patching_plant',get_defined_vars());
    }

    public function hollowcore(Product $product)
    {
        return view('front.hollowcore',get_defined_vars());
    }

    public function gfrc(Product $product)
    {
        return view('front.gfrc',get_defined_vars());
    }


    public function storecontact(StoreContactRequest $request)
    {
        $data = $request->validated();

        Contact::create($data);

        return to_route('front.contacts')->with('success', __('keywords.contact_successfully'));
    }

}
