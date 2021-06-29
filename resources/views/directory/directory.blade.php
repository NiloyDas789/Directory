@extends('layout.master_view')

@section('title')
    News Directory
@endsection



@section('content')
<div class="container">
        <div >

          
          
                  <div class="row mb-3">
                    <div class="col-12">
                      <h2 class="text-center">All Bangla News</h2>
                    </div>
                  </div>

      <div class="row ">
            
            <!-- ./col -->
            
            <!-- ./col -->
            

            @foreach($directories as $d)

            <?php if($d->catagory=='bangla'){ ?>

            <div class="col-md-3 col-6">
              <!-- small box -->
              <div class="card p-3 mt-2 mb-2">
                <!-- Content -->
                <a href="{{$d->url}}">

                <div class="entry2">
                
                  <div style="max-width: 300px; max-height: 300px; overflow:hidden" >
                          <img src="{{$d->image}}" class="img-fluid rounded" alt="">
                  </div>
                  <div class="excerpt">
                  

                            <h4><a href="{{$d->url}}">{{$d->title}}</a></h4>
                            
                  
                      
                  </div>
                </div>
            
                </a>
             
              </div>
            </div>

            <?php } ?>

            @endforeach

            


              


      </div>

      

  </div>

            <div class="row text-center pt-5 border-top">
                    <div class="col-md-12">
                      {{$directories->links()}}
                    </div>
            </div>


            
  
</div>




<div class="container">
        <div >

          
          
                  <div class="row mb-3">
                    <div class="col-12">
                      <h2 class="text-center">All English News</h2>
                    </div>
                  </div>

      <div class="row ">
            
            
            

            @foreach($directories as $d)

            <?php if($d->catagory=='english'){ ?>

            <div class="col-md-3 col-6">
              
              <div class="card p-3 mt-2 mb-2">
                
                <a href="{{$d->url}}">

                <div class="entry2">
                
                  <div style="max-width: 300px; max-height: 300px; overflow:hidden" >
                          <img src="{{$d->image}}" class="img-fluid rounded" alt="">
                  </div>
                  <div class="excerpt">
                  

                            <h4><a href="{{$d->url}}">{{$d->title}}</a></h4>
                            
                  
                      
                  </div>
                </div>
            
                </a>
             
              </div>
            </div>
            <?php } ?>

            @endforeach

            


              


      </div>

      

  </div>

            <div class="row text-center pt-5 border-top">
                    <div class="col-md-12">
                      {{$directories->links()}}
                    </div>
            </div>


            
  
</div>





<div class="container">
        <div >

          
          
                  <div class="row mb-3">
                    <div class="col-12">
                      <h2 class="text-center">Others</h2>
                    </div>
                  </div>

      <div class="row ">
            
            
            

            @foreach($directories as $d)

            <?php if($d->catagory=='others'){ ?>

            <div class="col-md-3 col-6">
              
              <div class="card p-3 mt-2 mb-2">
                
                <a href="{{$d->url}}">

                <div class="entry2">
                
                  <div style="max-width: 300px; max-height: 300px; overflow:hidden" >
                          <img src="{{$d->image}}" class="img-fluid rounded" alt="">
                  </div>
                  <div class="excerpt">
                  

                            <h4><a href="{{$d->url}}">{{$d->title}}</a></h4>
                            
                  
                      
                  </div>
                </div>
            
                </a>
             
              </div>
            </div>
            <?php } ?>

            @endforeach

            


              


      </div>

      

  </div>

            <div class="row text-center pt-5 border-top">
                    <div class="col-md-12">
                      {{$directories->links()}}
                    </div>
            </div>


            
  
</div>

@endsection