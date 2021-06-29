@extends('layout.master_admin')

@section('title')
    All Directory
@endsection



@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Directory List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('adm_dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Directory</li>
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
                <h3 class="card-title">Bangla Directory List</h3>
                <a href="{{route('directory.create')}}" class="btn btn-primary">Create Directory</a>
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
                      <th>Catagory</th>
                      
                    
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                  @foreach($directories as $directory)

                  <?php if($directory->catagory=='bangla'){ ?>
                    <tr>
                      
                      <td> 
                      <div style="max-width: 70px; max-height: 70px; overflow:hidden" >
                      <img src="{{asset($directory->image)}}" class="img-fluid" alt="">
                      </div>
                      </td>
                      <td>{{$directory->title}}</td>
                      <td>{{$directory->url}}</td>
                      <td>{{$directory->catagory}}</td>
                      
                      <td class="d-flex">
                      
                      <a href="{{route('directory.edit',[$directory->id])}}" class="btn btn-sm btn-primary mr-1" > <i class="fas fa-edit"></i> </a>

                      <form action="{{route('directory.destroy',[$directory->id])}}" method="POST" class="mr-1">
                      @method('DELETE')
                      @csrf
                      <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"> </i></button>
                      </form>
                      
                      
                      </td>
                    </tr>

                    <?php } ?>
                  @endforeach
                
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

              <div class="card-footer clearfix">
                    <div class="row text-center pt-5 border-top">
                        <div class="col-md-12">
                        {{$directories->links()}}
                    </div>
              </div>
              
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>










            <div class="content">
	      <div class="container-fluid">
	        <div class="row">
	          <div class="col-lg-12">
              <div class="card">
              <div class="card-header">
                
                <div class=" d-flex justify-content-between align-items-center">
                <h3 class="card-title">English Directory List</h3>
                
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
                      <th>Catagory</th>
                      
                    
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                  @foreach($directories as $directory)

                  <?php if($directory->catagory=='english'){ ?>
                    <tr>
                      
                      <td> 
                      <div style="max-width: 70px; max-height: 70px; overflow:hidden" >
                      <img src="{{asset($directory->image)}}" class="img-fluid" alt="">
                      </div>
                      </td>
                      <td>{{$directory->title}}</td>
                      <td>{{$directory->url}}</td>
                      <td>{{$directory->catagory}}</td>
                      
                      <td class="d-flex">
                      
                      <a href="{{route('directory.edit',[$directory->id])}}" class="btn btn-sm btn-primary mr-1" > <i class="fas fa-edit"></i> </a>

                      <form action="{{route('directory.destroy',[$directory->id])}}" method="POST" class="mr-1">
                      @method('DELETE')
                      @csrf
                      <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"> </i></button>
                      </form>
                      
                      
                      </td>
                    </tr>

                    <?php } ?>
                  @endforeach
                
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

              <div class="card-footer clearfix">
                    <div class="row text-center pt-5 border-top">
                        <div class="col-md-12">
                        {{$directories->links()}}
                    </div>
              </div>
              
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>






            <div class="content">
	      <div class="container-fluid">
	        <div class="row">
	          <div class="col-lg-12">
              <div class="card">
              <div class="card-header">
                
                <div class=" d-flex justify-content-between align-items-center">
                <h3 class="card-title">Others Directory List</h3>
                
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
                      <th>Catagory</th>
                      
                    
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                  @foreach($directories as $directory)

                  <?php if($directory->catagory=='others'){ ?>
                    <tr>
                      
                      <td> 
                      <div style="max-width: 70px; max-height: 70px; overflow:hidden" >
                      <img src="{{asset($directory->image)}}" class="img-fluid" alt="">
                      </div>
                      </td>
                      <td>{{$directory->title}}</td>
                      <td>{{$directory->url}}</td>
                      <td>{{$directory->catagory}}</td>
                      
                      <td class="d-flex">
                      
                      <a href="{{route('directory.edit',[$directory->id])}}" class="btn btn-sm btn-primary mr-1" > <i class="fas fa-edit"></i> </a>

                      <form action="{{route('directory.destroy',[$directory->id])}}" method="POST" class="mr-1">
                      @method('DELETE')
                      @csrf
                      <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"> </i></button>
                      </form>
                      
                      
                      </td>
                    </tr>

                    <?php } ?>
                  @endforeach
                
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

              <div class="card-footer clearfix">
                    <div class="row text-center pt-5 border-top">
                        <div class="col-md-12">
                        {{$directories->links()}}
                    </div>
              </div>
              
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            
        


@endsection