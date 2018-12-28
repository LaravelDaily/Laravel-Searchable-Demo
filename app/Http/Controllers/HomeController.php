<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;

class HomeController extends Controller
{

    public function index()
    {
        $companies = Company::with('category')->get();
        return view('home', compact('companies'));
    }

    public function search(Request $request)
    {
        $searchResults = (new Search())
            ->registerModel(Company::class, 'name')
            ->registerModel(Category::class, 'name')
            ->perform($request->input('query'));

        dd($searchResults, true);

        return view('search', compact('searchResults'));
    }

}
