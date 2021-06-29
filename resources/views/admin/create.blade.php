@extends('layout.master_admin')

@section('title')
    News
@endsection


@section('content')
<div class="content">
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-lg-6 offset-lg-3 offset-md-8 offset-md-2">
                                <form action="{{route('directory.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <div class="card-body">
                                    <div class="form-group">
                                        <label for="title"><h5>Post Title</h5></label>
                                        <input type="name" name="title" class="form-control" id="title" placeholder="Enter title" required>
                                    </div>
                                    
                                    

                                    <div class="form-group">
                                        <label for="image"><h5>Image</h5> </label>

                                        <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="image" required>
                                        <label class="custom-file-label" for="image">Choose Image file</label>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="url"><h5>News Link</h5></label>
                                        <input type="text" name="url" class="form-control" id="url" placeholder="Enter News Link" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="catagory">Select Catagory</label>
                                        <select name="catagory" id="catagory" class="form-control" required>
                                        <option value="" style="display:none" selected>Select Catagory</option>
                                        
                                        <option value="bangla">Bangla Newspaper</option>
                                        <option value="english">English Newspaper</option>
                                        <option value="others">Others</option>

                                        
                                        </select>
                                    </div>

                                    

                                    
                        
                                    
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection