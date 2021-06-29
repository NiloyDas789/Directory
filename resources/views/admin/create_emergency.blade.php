@extends('layout.master_admin')

@section('title')
    Blood
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
                                <form action="{{route('emergency.store')}}" method="POST">
                                @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="name"><h5>Name</h5></label>
                                            <input type="name" name="name" class="form-control" id="name" placeholder="Enter Name" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="mobile_number"><h5>Mobile Number</h5></label>
                                            <input type="text" name="mobile_number" class="form-control" id="mobile_number" placeholder="Enter Mobile Number" required>
                                        </div>

                                        


                                        <div class="form-group">
                                            <label for="address"><h5>Address</h5></label>
                                            <input type="name" name="address" class="form-control" id="address" placeholder="Enter Address" required>
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