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
                                <form action="{{route('setting.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <div class="card-body">
                                   
                                    
                                    

                                    <div class="form-group">
                                        <label for="image"><h5>Logo</h5> </label>

                                        <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="image" required>
                                        <label class="custom-file-label" for="image">Choose Image file</label>
                                        </div>
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