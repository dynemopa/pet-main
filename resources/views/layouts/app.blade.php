<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>See Job Run | Admin Dashboard</title>
    <link rel="icon" href="{{ asset('Icon.png') }}" type="image/icon type">
    <link rel="stylesheet" href="{{ asset('admin_assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('admin_assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/argon.css?v=1.2.1') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/style.css?v=1.2.1') }}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css" />

    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
  </head>
  <body>
 
    <div id="app">
      <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light" id="sidenav-main">
        <div class="scrollbar-inner">
          <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="" >
              <!-- <b>See Job Run</b> -->

              <img src="https://secureservercdn.net/198.71.233.183/mb5.bfe.myftpupload.com/wp-content/uploads/2022/06/Group-10.png" class="navbar-brand-img" style="max-height:200px;">
            </a>
          </div>
          
          <div class="navbar-inner">
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
              <ul class="navbar-nav"> 
               <li class="nav-item">
                  <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="fas fa-group"></i>
                    <span class="nav-link-text"><b>Dashboard</b></span>
                  </a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link" href="{{route('showlisting')}}">
                    <i class="fas fa-group"></i>
                    <span class="nav-link-text"><b>Listing</b></span>
                  </a>
                </li>  
                <li class="nav-item">
                  <a class="nav-link" href="{{route('list')}}">
                    <i class="fas fa-group"></i>
                    <span class="nav-link-text"><b>User List</b></span>
                  </a>
                </li>
               
                <li class="nav-item">
                  <a class="nav-link" href="">
                    <i class="fas fa-group"></i>
                    <span class="nav-link-text"><b>Bookings</b></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">
                    <i class="fas fa-group"></i>
                    <span class="nav-link-text"><b>Payment</b></span>
                  </a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="{{route('showprofile')}}">
                    <i class="fas fa-group"></i>
                    <span class="nav-link-text"><b>Profile</b></span>
                  </a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="{{route('changepassword')}}">
                    <i class="fas fa-group"></i>
                    <span class="nav-link-text"><b>Change Password</b></span>
                  </a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-link-text"><b>Logout</b></span>
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </li>
              </ul>
                      
              <hr class="my-3">        
            </div>
          </div>
        </div>
      </nav>

      <div class="main-content" id="panel">
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav align-items-center  ml-md-auto ">
                <li class="nav-item d-xl-none">
                  <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                    </div>
                  </div>
                </li>
              </ul>

              <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                <li class="nav-item dropdown">
                  <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                      <span class="avatar avatar-sm rounded-circle">
                        <img src="{{asset('uploads/students/'.Auth::user()->image)}}" style="width: 50px">
                        {{-- <img alt="Image placeholder" src="{{asset('uploads/students/'. Auth::user()->image}}"width="50px" height="50px"> --}}
                 
                      </span>
                      
                      <div class="media-body ml-2 d-none d-lg-block">
                        <span class="mb-0 text-sm"></span>
                      </div>
                    </div>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right ">
                    <div class="dropdown-header noti-title">
                      <h6 class="text-overflow m-0">Welcome!<span style="color: red">  {{Auth::user()->name}}</span> </h6>
                      {{--{{$data->name}} --}}
                      
                    </div>
                    
                    <div class="dropdown-divider"></div>
                    

                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      <i class="ni ni-user-run"></i>
                      <span>Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        @yield('content')
      </div>

      <div id="snackbar"></div>

      <script src="{{ asset('admin_assets/vendor/jquery/dist/jquery.min.js') }}"></script>
      <script src="{{ asset('admin_assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('admin_assets/vendor/js-cookie/js.cookie.js') }}"></script>
      <script src="{{ asset('admin_assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
      <script src="{{ asset('admin_assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>

      <script src="{{ asset('admin_assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
      <script src="{{ asset('admin_assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
      <script src="{{ asset('admin_assets/js/argon.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>
      <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

      <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

      <script>
        $(document).ready(function() 
        {
          $('.summernote').summernote(
          {
            height: 400
          });
        });
      </script>

      <script>
        CKEDITOR.replace('please_note001');
      </script>
       <script>
        CKEDITOR.replace('content001');
      </script>

      <script>
        CKEDITOR.replace('content');
      </script>
      <script>
        CKEDITOR.replace('please_note');
      </script>
    </div>
  </body>
</html>
