<?php

namespace App\Http\Controllers;

use App\Models\Directory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Validation\Validator;

class DirectoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directories= Directory::orderBy('created_at','DESC')->paginate(10);
        return view('directory.alldirectory',compact('directories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
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
            'title' => 'required|unique:directories|max:200',
            'image' => 'required|image',
            'url' => 'required',
            'catagory' => 'required',


        ]);



            $directory= Directory::create([
                'title' =>$request->title,
                'url' =>$request->url,
                'image'=>'image.jpg',
                'catagory' =>$request->catagory,


            ]);




        if ($request->has('image')) {
            $image= $request->image;
            $image_new_name = time().'.'. $image->getClientOriginalExtension();
            $image->move('storage/directory/',$image_new_name);
            $directory->image = 'storage/directory/'.$image_new_name;
            $directory->save();
    }
        Session::flash('success', 'Directory Created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Directory  $directory
     * @return \Illuminate\Http\Response
     */
    public function show(Directory $directory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Directory  $directory
     * @return \Illuminate\Http\Response
     */
    public function edit(Directory $directory)
    {

        return view('edit.alldirectory', compact('directory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Directory  $directory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Directory $directory)
    {




            $directory->title =$request->title;
            $directory->url =$request->url;
            $directory->catagory =$request->catagory;



        if ($request->has('image')) {
            $image= $request->image;
            $image_new_name = time().'.'. $image->getClientOriginalExtension();
            $image->move('storage/directory/',$image_new_name);
            $directory->image = 'storage/directory/'.$image_new_name;

        }

        $directory->save();

        Session::flash('success', 'Directory Updated Successfully');
        return redirect()->route('directory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Directory  $directory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Directory $directory)
    {
        if($directory){
            if (file_exists(public_path($directory->image))) {
                unlink(public_path($directory->image));
            }
            $directory->delete();
            Session::flash('success', 'Directory Deleted Successfully');

        }
        return redirect()->route('directory.index');
    }

    public function search()
    {
        $search_text= $_GET['query'];

        $directories= Directory::where('title','LIKE', '%'.$search_text.'%')->get();
        return view('directory.search',compact('directories'));

    }
}
