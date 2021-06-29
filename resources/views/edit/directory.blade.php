@extends('layout.master_admin')

@section('title')
Edit News Directory
@endsection

@section('content')



<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Directory</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/adm_dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{route('directory.index')}}">Directory</a></li>
              <li class="breadcrumb-item active">Edit Directory</li>
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
                <h3 class="card-title">Edit Directory -{{$directory->name}}</h3>
                <a href="{{route('directory.index')}}" class="btn btn-primary">Go back to Directory List</a>
                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3 offset-md-8 offset-md-2">
                <form action="{{route('directory.update',[$directory->id])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Directory Name</label>
                    <input type="name" name="name" value="{{$directory->name}}" class="form-control" id="name" placeholder="Enter name" required>
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description"   rows="4" class="form-control" placeholder="Enter description"> {{$directory->description}} </textarea>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update Directory</button>
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