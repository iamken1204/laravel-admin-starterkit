<!DOCTYPE html>
<html>
<head>
    <title>kidsmovie | Admin</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/admin/dist/AdminLTE.min.css">
    <link rel="stylesheet" href="/assets/admin/dist/skin-purple.min.css">
    <script src="https://cdn.jsdelivr.net/g/vue@2.0.0-alpha.8,vue.resource@0.9.3"></script>
    @yield('head-styles')
    @yield('head-scripts')
</head>
<body class="hold-transition skin-purple sidebar-mini">

    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">

          <!-- Logo -->
          <a href="#" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>kids</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>kids</b> movie</span>
          </a>

          <!-- Header Navbar -->
          <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
              <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                  <!-- Menu Toggle Button -->
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                    <span class="hidden-xs">後台管理</span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- The user image in the menu -->
                    <li class="user-header">
                      <p>
                        後台管理
                      </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="pull-right">
                        <a href="#" class="btn btn-default btn-flat">登出</a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

          <!-- sidebar: style can be found in sidebar.less -->
          <section class="sidebar">

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
              <li class="header">HEADER</li>
              <!-- Optionally, you can add icons to the links -->
              <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
              <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
              <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="#">Link in level 2</a></li>
                  <li><a href="#">Link in level 2</a></li>
                </ul>
              </li>
            </ul>
            <!-- /.sidebar-menu -->
          </section>
          <!-- /.sidebar -->
        </aside>

        <div class="content-wrapper">
            @yield('content-header')
            <section class="content">
                <div class="row">
                    @yield('content')
                </div>
            </section>
        </div>

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
                If have any questions, please refer to RD2.
            </div>
            <!-- Default to the left -->
            <strong>yam &copy; 2016 <a href="http://kidsmovie.event.yam.com">kids movie</a>.</strong>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/g/jquery@2.2.0,bootstrap@3.3.6"></script>
    <script src="/assets/admin/dist/app.min.js"></script>
    @yield('endbody-scripts')
</body>
</html>
