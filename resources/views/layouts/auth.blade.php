
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>@yield('title')</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="{{ asset('assets/auth/plugins/material/css/materialdesignicons.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/auth/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="{{ asset('assets/auth/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />
  
  
  @yield('styles')

  
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  
  
  
  <link href="{{ asset('assets/auth/plugins/toaster/toastr.min.css') }}" rel="stylesheet" />
  
  
  <!-- MONO CSS -->
  <link id="main-css-href" rel="stylesheet" href="{{ asset('assets/auth/css/style.css') }}" />

  


  <!-- FAVICON -->
  <link href="{{ asset('assets/auth/images/favicon.png') }}" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <script src="{{ asset('assets/auth/plugins/nprogress/nprogress.js') }}"></script>
</head>


  <body class="navbar-fixed sidebar-fixed" id="body">
    

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">
      
      
        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar sidebar-dark" id="left-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="{{ route('dashboard') }}">
                <img src="{{ asset('assets/auth/images/logo.png') }}" alt="Mono">
                <span class="brand-name">Auth Dashboard</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-left" data-simplebar style="height: 100%;">
              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                

                
                  <li
                   class="active"
                   >
                    <a class="sidenav-item-link" href="{{ route('dashboard') }}">
                      <i class="mdi mdi-briefcase-account-outline"></i>
                      <span class="nav-text">Dashboard</span>
                    </a>
                  </li>
                

              
                  <li class="section-title">
                    Apps
                  </li>
                

                

                
                  <li>
                    <a class="sidenav-item-link" href="{{ route('auth.categories') }}">
                      <i class="fas fa-tasks"></i>
                      <span class="nav-text">Categories</span>
                    </a>
                  </li>

                  <li>
                    <a class="sidenav-item-link" href="{{ route('auth.tags') }}">
                      <i class="fas fa-tags"></i>
                      <span class="nav-text">Tags</span>
                    </a>
                  </li>

                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#email"
                      aria-expanded="false" aria-controls="email">
                      <i class="fas fa-edit"></i>
                      <span class="nav-text">Posts</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="email"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                          
                            <li >
                              <a class="sidenav-item-link" href="{{ route('posts.create') }}">
                                <span class="nav-text">Create Post</span>
                                
                              </a>
                            </li>

                            <li >
                              <a class="sidenav-item-link" href="{{ route('posts.index') }}">
                                <span class="nav-text">Posts</span>
                                
                              </a>
                            </li>
                        
                      </div>
                    </ul>
                  </li>

                
              </ul>

            </div>

          </div>
        </aside>

      
        <div class="page-wrapper">
           <!-- Header -->
      <header class="main-header" id="header">
        <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
          <!-- Sidebar toggle button -->
          <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
          </button>

          <span class="page-title">dashboard</span>

          <div class="navbar-right ">

   

            <ul class="nav navbar-nav">

    
              <!-- User Account -->
              <li class="dropdown user-menu">
                <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <img src="{{ asset('assets/auth/images/user/user-xs-01.jpg') }}" class="user-image rounded-circle" alt="User Image" />
                  <span class="d-none d-lg-inline-block">{{ auth()->user()->name }}</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li>
                    <a class="dropdown-link-item" href="user-profile.html">
                      <i class="mdi mdi-account-outline"></i>
                      <span class="nav-text">My Profile</span>
                    </a>
                  </li>
                  

                  <li class="dropdown-footer">
                    <form id="logout-form" method="post" action="{{ route('logout') }}">
                    @csrf 

                    <a id="logout-button" class="dropdown-link-item" href="javascript:void(0)"> <i class="mdi mdi-logout"></i> Log Out </a>

                    </form>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>


      </header>

      <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
      
        {{-- // content will be here --}}
        @yield('content')


    <!-- Footer -->
    <footer class="footer mt-auto">
      <div class="copyright bg-white">
        <p>
          &copy; <span id="copy-year"></span> Copyright Mono Dashboard Bootstrap Template by <a class="text-primary" href="http://www.iamabdus.com/" target="_blank" >Abdus</a>.
        </p>
      </div>
      <script>
          var d = new Date();
          var year = d.getFullYear();
          document.getElementById("copy-year").innerHTML = year;
      </script>
    </footer>
  </div>
    
        <script src="{{ asset('assets/auth/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/auth/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/auth/plugins/simplebar/simplebar.min.js') }}"></script>
        <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
        <script src="{{ asset('assets/auth/plugins/toaster/toastr.min.js') }}"></script>
        <script src="{{ asset('assets/auth/js/mono.js') }}"></script>
        <script src="{{ asset('assets/auth/js/custom.js') }}"></script>

                
        @yield('scripts')


  </body>
</html>
