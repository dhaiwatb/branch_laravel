<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $business = Business::all();
        return view('business.index', compact('business'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('business.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate =  Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'logo' => 'required|mimes:jpg,png,jpeg',
        ]);

        if($validate->fails()){
            return redirect()->back()->withErrors($validate);
        }
        else{
            if($request->hasFile('logo'))
            {
                $file = $request->file('logo');
                $fileName = $request->file('logo')->getClientOriginalName();

                $request->file('logo')->move(storage_path('app/public/logo'), $fileName);
            }
            $business = Business::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone_number' => $request->input('phone'),
                'logo' => $request->file('logo')->getClientOriginalName()
            ]);

            return redirect()->route('business.index')->with('message', 'Busines created successfully');
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(Business $business)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Business $business)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Business $business)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Business $business)
    {
        //
    }
}
