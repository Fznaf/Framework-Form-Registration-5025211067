<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'age' => 'required|integer',
            'pick' => 'required|numeric|between:2.50,99.99',
            'image' => 'required|mimes:jpg,jpeg,png|max:2002'
        ]);
        
        if(!$validated)
        {
            return view('failed');
        }

        if($request->hasFile('image')){
        $imageName = time().'.'.$request->image->extension();
        $request->image->storeAs('public/images', $imageName);
        
        }
        session()->flash('success', 'Flash: Sucess Registration');
        return view('success', ['data' => $request->all(), 'image' => $imageName]);
    }
}
