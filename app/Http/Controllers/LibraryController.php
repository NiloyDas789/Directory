<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Validation\Validator;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libraries= Library::orderBy('created_at','DESC')->paginate(20);
        return view('directory.library',compact('libraries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_library');
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
            'title' => 'required|unique:libraries|max:200',
            'image' => 'required|image',
            'url' => 'required',

            
        ]);


            
            $library= Library::create([
                'title' =>$request->title,
                'url' =>$request->url,
                'image'=>'image.jpg',
    
            ]);

        
            

        if ($request->has('image')) {
            $image= $request->image;
            $image_new_name = time().'.'. $image->getClientOriginalExtension();
            $image->move('storage/library/',$image_new_name);
            $library->image = 'storage/library/'.$image_new_name;
            $library->save();
    }
        Session::flash('success', 'Library Created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function show(Library $library)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function edit(Library $library)
    {
        
        return view('edit.library', compact('library'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Library $library)
    {
        
        
        

        
            $library->title =$request->title;
           
            $library->url =$request->url;
            

        if ($request->has('image')) {
            $image= $request->image;
            $image_new_name = time().'.'. $image->getClientOriginalExtension();
            $image->move('storage/library/',$image_new_name);
            $library->image = 'storage/library/'.$image_new_name;
        
        }

        $library->save();

        Session::flash('success', 'Library Updated Successfully');
        return redirect()->route('library.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function destroy(Library $library)
    {
        if($library){
            if (file_exists(public_path($library->image))) {
                unlink(public_path($library->image));
            }
            $library->delete();
            Session::flash('success', 'Library Deleted Successfully');
        
        }
        return redirect()->route('library.index');
    }
}
