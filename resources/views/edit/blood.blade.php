@extends('layout.master_admin')

@section('title')
  Edit Blood Directory
@endsection

@section('content')


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Blood</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/adm_dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{route('blood.index')}}">Blood</a></li>
              <li class="breadcrumb-item active">Edit Blood</li>
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
                <h3 class="card-title">Edit Blood -{{$blood->name}}</h3>
                <a href="{{route('blood.index')}}" class="btn btn-primary">Go back to Blood List</a>
                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3 offset-md-8 offset-md-2">
                <form action="{{route('blood.update',[$blood->id])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                                        <div class="form-group">
                                            <label for="name">Blood Name</label>
                                            <input type="name" name="name" value="{{$blood->name}}" class="form-control" id="name" placeholder="Enter name" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="age"><h5>Age</h5></label>
                                                <input type="number" name="age" value="{{$blood->age}}" class="form-control" id="age" placeholder="Enter Age" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="address"><h5>Address</h5></label>
                                            <input type="name" name="address" value="{{$blood->address}}" class="form-control" id="address" placeholder="Enter Address" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="mobile_number"><h5>Mobile Number</h5></label>
                                            <input type="text" name="mobile_number" value="{{$blood->mobile_number}}" class="form-control" id="mobile_number" placeholder="Enter Mobile Number" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="blood_group"> <h5>Blood Group</h5>  </label>
                                            <input type="text" name="blood_group" value="{{$blood->blood_group}}" class="form-control" id="blood_group" placeholder="Enter Blood Group" required>
                                        </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update Blood</button>
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