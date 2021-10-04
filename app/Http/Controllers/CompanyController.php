<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Errors;


class CompanyController extends Controller
{
    public function getErrosFromCompany($companyName) {
        //check if company exists
        $company = Company::where('name',$companyName)->firstOrFail();
        
        $errors = Errors::where('company',$companyName)->get();

        return view('company',[
            'results'=>$errors,
            'company'=>$company['name']
        ]);
    }
}
