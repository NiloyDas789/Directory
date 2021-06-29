@extends('layout.master_admin')

@section('title')
    All Library
@endsection



@section('content')


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Library</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('adm_dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{route('library.index')}}">Library</a></li>
              <li class="breadcrumb-item active">Edit Library</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
	      <div class="container-fluid">
	        <div class="row">
	          <div class="col-lg-12">
              <div class="card">
              <div class="card-header">
                
                <div class=" d-flex justify-content-between align-items-center">
                <h3 class="card-title">Library list</h3>
                <a href="{{route('library.index')}}" class="btn btn-primary">Go back to Library List</a>
                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3 offset-md-8 offset-md-2">
                <form action="{{route('library.update',[$library->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Library Title</label>
                    <input type="name" name="title" value="{{$library->title}}" class="form-control" id="title" placeholder="Enter title" required>
                  </div>
                  
                  
                  <div class="form-group">
                        <div class="row">
                                    <div class="col-8">
                                    <label for="image">Image</label>

                                                <div class="custom-file">
                                                <input type="file" name="image" value="{{old($library->image)}}" class="custom-file-input" id="image" required>
                                                <label class="custom-file-label" for="image" ></label>
                                                </div>
                                    </div>
                                    <div class="col-4" text-right>
                                        <div style="max-width: 100px; max-height: 100px; overflow:hidden; margin-left:auto ">
                                            <img src="{{asset($library->image)}}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                        </div> 
                  </div>

                  <div class="form-group">
                    <label for="url">Library Link</label>
                    <input type="name" name="url" value="{{$library->url}}" class="form-control" id="title" placeholder="Enter url" required>
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
              <!-- /.card-body -->
              
            </div>
            </div>
            </div>
            </div>
            </div>

        



@endsection