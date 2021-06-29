@extends('layout.master_admin')

@section('title')
Edit Emergency Numbers
@endsection

@section('content')



<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Emergency</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/adm_dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{route('emergency.index')}}">Emergency</a></li>
              <li class="breadcrumb-item active">Edit Emergency</li>
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
                <h3 class="card-title">Edit Emergency -{{$emergency->name}}</h3>
                <a href="{{route('emergency.index')}}" class="btn btn-primary">Go back to Emergency List</a>
                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3 offset-md-8 offset-md-2">
                <form action="{{route('emergency.update',[$emergency->id])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                                        <div class="form-group">
                                            <label for="name"><h5>Name</h5></label>
                                            <input type="name" name="name" value="{{$emergency->name}}" class="form-control" id="name" placeholder="Enter Name" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="mobile_number"><h5>Mobile Number</h5></label>
                                            <input type="text" name="mobile_number" value="{{$emergency->mobile_number}}" class="form-control" id="mobile_number" placeholder="Enter Mobile Number" required>
                                        </div>

                                        


                                        <div class="form-group">
                                            <label for="address"><h5>Address</h5></label>
                                            <input type="name" name="address" value="{{$emergency->address}}" class="form-control" id="address" placeholder="Enter Address" required>
                                        </div>

                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update Emergency</button>
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