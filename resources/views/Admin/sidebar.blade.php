<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('/assets/css/style.css') }}">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
    <!--[if lt IE 9]>
		<script src="/assets/js/html5shiv.min.js"></script>
		<script src="/assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>

  
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="/home" class="logo">
					<img src="{{ asset('/assets/img/logo.png') }}" width="35" height="35" alt=""> <span>Preclinic</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
               
                
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<img class="rounded-circle" src="/assets/img/user.jpg" width="24" alt="Admin">
							<span class="status online"></span>
						</span>
						<span>Admin</span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="/home/profile">My Profile</a>
						<a class="dropdown-item" href="/home/edit-profile">Edit Profile</a>
						
						<a class="dropdown-item" href="/logout">Logout</a>
					</div>
                </li>
            </ul>
            
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="/home/profile">My Profile</a>
                    <a class="dropdown-item" href="/home/edit-profile">Edit Profile</a>
                    
                    <a class="dropdown-item" href="/logout">Logout</a>
                </div>
            </div>
        </div>
       
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li class="active">
                            <a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
						<li>
                            <a href="{{ route('registration') }}"><i class="fa fa-user-md"></i> <span>Registration</span></a>
                        </li>
                        <li>
                            <a href="{{ route ('userlist') }}"><i class="fa fa-wheelchair"></i> <span>User list</span></a>
                        </li>
                        <li>
                            <a href="{{ url('course') }}"><i class="fa fa-calendar"></i> <span>Course</span></a>
                        </li>
                       
                        <li>
                            <a href="{{ route('note') }}"><i class="fa fa-hospital-o"></i> <span>Note Upload</span></a>
                        </li>

                        <li>
                            <a href="{{ route('download') }}"><i class="fa fa-hospital-o"></i> <span>Note Download</span></a>
                        </li>

                        <li>
                            <a href="{{ route('notice') }}"><i class="fa fa-hospital-o"></i> <span>Notice Upload</span></a>
                        </li>

                        <li>
                            <a href="{{ route('result') }}"><i class="fa fa-hospital-o"></i> <span>Result </span></a>
                        </li>

                        <li>
                            <a href="{{ route('message') }}"><i class="fa fa-hospital-o"></i> <span>message </span></a>
                        </li>

						<li class="submenu">
							<a href="#"><i class="fa fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="{{ route('salary') }}">Salary</a></li>
								
								
							</ul>
						</li>
						
					
                       
                        
                 
                     
						
					
                       
                        
                       
                        
                      
                     
                       
                    </ul>
                </div>
            </div>
        </div>
        @yield('content')

        <div class="sidebar-overlay" data-reff=""></div>
        <script src="{{ asset ('/assets/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset ('/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset ('/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset ('/assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset ('/assets/js/Chart.bundle.js') }}"></script>
        <script src="{{ asset ('/assets/js/chart.js') }}"></script>
        <script src="{{ asset ('/assets/js/app.js') }}"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>

        <script>
            @if(Session::has('messege'))
              var type="{{Session::get('alert-type','info')}}"
              switch(type){
                  case 'info':
                       toastr.info("{{ Session::get('messege') }}");
                       break;
                  case 'success':
                      toastr.success("{{ Session::get('messege') }}");
                      break;
                  case 'warning':
                     toastr.warning("{{ Session::get('messege') }}");
                      break;
                  case 'error':
                      toastr.error("{{ Session::get('messege') }}");
                      break;
              }
            @endif
         </script>  

        
      <script>  
        $(document).on("click", "#delete", function(e){
            e.preventDefault();
            var link = $(this).attr("href");
               swal({
                 title: "Are you Want to delete?",
                 text: "Once Delete, This will be Permanently Delete!",
                 icon: "warning",
                 buttons: true,
                 dangerMode: true,
               })
               .then((willDelete) => {
                 if (willDelete) {
                      window.location.href = link;
                 } else {
                   swal("Safe Data!");
                 }
               });
           });
   </script>

    </body>
    
    
    
    </html>