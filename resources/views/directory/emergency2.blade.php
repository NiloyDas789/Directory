@extends('layout.master_view')

@section('title')
    Emergency Numbers Directory
@endsection



@section('content')



<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Emergency Numbers</h1>
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
                
                
                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      
                      <th>Name</th>
                      <th>Mobile Number</th>
                      <th>Address</th>
                      
                      
                      
                    </tr>
                  </thead>
                  <tbody>
                  @if($emergencies->count())
                  @foreach($emergencies as $emergency)
                    <tr>
                      <td>{{$emergency->name}}</td>
                      <td>{{$emergency->mobile_number}}</td>
                      
                      <td>{{$emergency->address}}</td>
                      
                      
                        
                    </tr>
                  @endforeach
                  @else
                  <tr>
                  <td colspan="3">
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
                        {{$emergencies->links()}}
                        </div>
                    </div>
              </div>
            </div>
            </div>
            </div>
            </div>
            </div>



@endsection