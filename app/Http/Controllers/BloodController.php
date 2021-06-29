<?php

namespace App\Http\Controllers;

use App\Models\Blood;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Validation\Validator;

class BloodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bloods= Blood::orderBy('created_at','DESC')->paginate(20);
        return view('directory.blood',compact('bloods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_blood');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'age' => 'required',
            'address' => 'required',
            'mobile_number' => 'required',
            'blood_group' => 'required',

            
        ]);


            
            $directory= Blood::create([
                'name' =>$request->name,
                'age' =>$request->age,
                'address'=>$request->address,
                'mobile_number' =>$request->mobile_number,
                'blood_group' =>$request->blood_group,
                
    
            ]);

        
            

        
        Session::flash('success', 'Blood Directory Created Successfully');
        return redirect()->route('blood.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blood  $blood
     * @return \Illuminate\Http\Response
     */
    public function show(Blood $blood)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blood  $blood
     * @return \Illuminate\Http\Response
     */
    public function edit(Blood $blood)
    {
        return view('edit.blood', compact('blood'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blood  $blood
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blood $blood)
    {
        
        $validated = $request->validate([
            'name' => 'required',
            
        ]);

        $blood->name =$request->name;
        $blood->age =$request->age;
        $blood->address =$request->address;
        $blood->mobile_number =$request->mobile_number;
        $blood->blood_group =$request->blood_group;
        
        $blood->save();
        
        Session::flash('success', 'Blood Updated Successfully');
        return redirect()->route('blood.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blood  $blood
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blood $blood)
    {
        if($blood){
            $blood->delete();

        Session::flash('success', 'Blood Data Deleted Successfully');
        return redirect()->route('blood.index');
        }
    }
}
