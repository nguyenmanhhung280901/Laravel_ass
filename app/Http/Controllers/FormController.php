<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormRequest;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'identitynumber' => 'required|min:10',
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'generate' => 'required'
        ],
        [
            'identitynumber.min' => 'Must be 10 character.'
        ]
        );
        return $validated;
    }
}
