<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Errors;

class ErrorController extends Controller
{
    public function index() {
        $errors = Errors::orderBy('id','desc')->
        // limit(1)->offset(1)->
        get();
        return view('main',[
            "results"=>  $errors

        ]);
    }
    
    public function search($search) {
        $searchResults = Errors::where('name','like','%'.$search.'%')->orWhere('company','like','%'.$search.'%')
        ->limit(100)->get();
        return view('search',['search'=> $search,'results'=>$searchResults]);
    }
}
