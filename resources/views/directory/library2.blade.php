@extends('layout.master_view')

@section('title')
    All Library
@endsection



@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Library List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('adm_dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Library</li>
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
                
                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>                  
                    <tr>
                      
                      <th>Image</th>
                      <th>Title</th>
                      <th>Link</th>
                      
                      
                    
                      
                    </tr>
                  </thead>
                  <tbody>
                  
                  @foreach($libraries as $library)
                    <tr>
                      
                      <td> 
                      <div style="max-width: 70px; max-height: 70px; overflow:hidden" >
                      <img src="{{asset($library->image)}}" class="img-fluid" alt="">
                      </div>
                      </td>
                      <td>{{$library->title}}</td>
                      <td>{{$library->url}}</td>
                      
                      
                      
                    </tr>
                  @endforeach
                
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

              <div class="card-footer clearfix">
                    <div class="row text-center pt-5 border-top">
                        <div class="col-md-12">
                        {{$libraries->links()}}
                    </div>
              </div>
              
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>

        


@endsection
