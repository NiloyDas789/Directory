@extends('layout.master_admin')

@section('title')
    Blood Directory
@endsection



@section('content')



<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Blood directoy</h1>
          </div><!-- /.col -->
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Dashboard</a></li>
              <li class="breadcrumb-item active">Catagory</li>
            </ol>
          </div>  -->
           <!-- /.col -->
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
                <h3 class="card-title">List</h3>
                <a href="{{route('blood.create')}}" class="btn btn-primary">Create Data</a>

                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>

                      <th>Name</th>
                      <th>Age</th>
                      <th>Address</th>
                      <th>Mobile Number</th>
                      <th>Blood Group</th>
                      <th style="width: 40px">Action</th>

                    </tr>
                  </thead>
                  <tbody>
                  @if($bloods->count())
                  @foreach($bloods as $blood)
                    <tr>
                      <td>{{$blood->name}}</td>
                      <td>{{$blood->age}}</td>
                      <td>{{$blood->address}}</td>
                      <td>{{$blood->mobile_number}}</td>
                      <td>{{$blood->blood_group}}</td>
                      <td class="d-flex">
                        <a href="{{route('blood.edit',[$blood->id])}}" class="btn btn-sm btn-primary mr-1" > <i class="fas fa-edit"></i> </a>

                        <form action="{{route('blood.destroy',[$blood->id])}}" method="POST" class="mr-1">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"> </i></button>
                        </form>

                        </td>
                    </tr>
                  @endforeach
                  @else
                  <tr>
                    <td colspan="6">
                      <h5 class="text-center">No Data Found</h5>
                    </td>

                  </tr>

                  @endif

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                    <div class="row text-center pt-5 border-top">
                        <div class="col-md-12">
                        {{$bloods->links()}}
                        </div>
                    </div>
              </div>
            </div>
            </div>
            </div>
            </div>
            </div>



@endsection
