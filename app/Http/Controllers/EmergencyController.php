<?php

namespace App\Http\Controllers;

use App\Models\Emergency;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Validation\Validator;

class EmergencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emergencies= Emergency::orderBy('created_at','DESC')->paginate(20);
        return view('directory.emergency',compact('emergencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_emergency');
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
            'mobile_number' => 'required',
            'address' => 'required',

            
        ]);


            
            $emergency= Emergency::create([
                'name' =>$request->name,
                'mobile_number' =>$request->mobile_number,
                'address'=>$request->address,
                
                
                
    
            ]);

        
            

        
        Session::flash('success', 'Emergency Number Created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emergency  $emergency
     * @return \Illuminate\Http\Response
     */
    public function show(Emergency $emergency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emergency  $emergency
     * @return \Illuminate\Http\Response
     */
    public function edit(Emergency $emergency)
    {
        return view('edit.emergency', compact('emergency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emergency  $emergency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emergency $emergency)
    {
        
        $validated = $request->validate([
            'name' => 'required',
            
        ]);

        $emergency->name =$request->name;
        $emergency->mobile_number =$request->mobile_number;
        $emergency->address =$request->address;
        
        $emergency->save();
        
        Session::flash('success', 'Emergency Updated Successfully');
        return redirect()->route('emergency.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emergency  $emergency
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emergency $emergency)
    {
        if($emergency){
            $emergency->delete();

        Session::flash('success', 'Emergency Data Deleted Successfully');
        return redirect()->route('emergency.index');
        }
    }
}
