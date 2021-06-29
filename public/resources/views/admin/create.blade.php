<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Document</title>


    <link href="../../css.css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('directory')}}/fonts/icomoon/style.css">
    <link rel="stylesheet" href="{{asset('directory')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('directory')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('directory')}}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('directory')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('directory')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('directory')}}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{asset('directory')}}/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="{{asset('directory')}}/css/aos.css">
    <link rel="stylesheet" href="{{asset('directory')}}/css/toastr.min.css">

    <link rel="stylesheet" href="{{asset('directory')}}/css/style.css">
</head>
<body>
    
<div class="content">
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-lg-6 offset-lg-3 offset-md-8 offset-md-2">
                                <form action="{{route('directory.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <div class="card-body">
                                    <div class="form-group">
                                        <label for="title"><h5>Post Title</h5></label>
                                        <input type="name" name="title" class="form-control" id="title" placeholder="Enter title" required>
                                    </div>
                                    
                                    

                                    <div class="form-group">
                                        <label for="image"><h5>Image</h5> </label>

                                        <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="image" required>
                                        <label class="custom-file-label" for="image">Choose Image file</label>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="url"><h5>News Link</h5></label>
                                        <input type="text" name="url" class="form-control" id="url" placeholder="Enter News Link" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="newsPaper_name"><h5>News Paper Name</h5></label>
                                        <input type="text" name="newsPaper_name" class="form-control" id="newsPaper_name" placeholder="Enter News Paper Name" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="newsPaper_url"> <h5>News Paper Link</h5>  </label>
                                        <input type="text" name="newsPaper_url" class="form-control" id="newsPaper_url" placeholder="Enter News Paper Link" required>
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
    
    
    







<!-- Footer -->
<div class="site-section bg-lightx">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-5">
            <div class="subscribe-1 ">
              <h2>Subscribe to our newsletter</h2>
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nesciunt error illum a explicabo, ipsam nostrum.</p>
              <form action="#" class="d-flex">
                <input type="text" class="form-control" placeholder="Enter your email address">
                <input type="submit" class="btn btn-primary" value="Subscribe">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3 class="footer-heading mb-4">About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reprehenderit magnam deleniti quasi saepe, consequatur atque sequi delectus dolore veritatis obcaecati quae, repellat eveniet omnis, voluptatem in. Soluta, eligendi, architecto.</p>
          </div>
          <div class="col-md-3 ml-auto">
            <!-- <h3 class="footer-heading mb-4">Navigation</h3> -->
            <ul class="list-unstyled float-left mr-5">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Advertise</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Subscribes</a></li>
            </ul>
            <ul class="list-unstyled float-left">
              <li><a href="#">Travel</a></li>
              <li><a href="#">Lifestyle</a></li>
              <li><a href="#">Sports</a></li>
              <li><a href="#">Nature</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            

            <div>
              <h3 class="footer-heading mb-4">Connect With Us</h3>
              <p>
                <a href="#"><span class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a>
                <a href="#"><span class="icon-twitter p-2"></span></a>
                <a href="#"><span class="icon-instagram p-2"></span></a>
                <a href="#"><span class="icon-rss p-2"></span></a>
                <a href="#"><span class="icon-envelope p-2"></span></a>
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
          </div>
        </div>
      </div>
</div>

<script src="{{asset('admin')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin')}}/js/adminlte.min.js"></script>
<script src="{{asset('admin')}}/js/bs-custom-file-input.min.js"></script>
<script src="{{asset('admin')}}/js/toastr.min.js"></script>


<script>
$(document).ready(function () {
  bsCustomFileInput.init();
  });
</script>
</body>
</html>