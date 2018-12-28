<?php

namespace App\Http\Controllers;

use App\Company;

class CompanyController extends Controller
{

    public function show(Company $company)
    {
        return view('company', compact('company'));
    }

}
