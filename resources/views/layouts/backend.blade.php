<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ourdemo.website/vertical/public/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Nov 2018 08:03:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <title>Clippingpathaid | Home</title>
  <meta content="Admin Dashboard" name="description" />
  <meta content="Themesbrand" name="author" />
  <link rel="shortcut icon" href="{{asset('public/contents/backend')}}/assets/images/favicon.ico">
  <!-- DataTables -->
  <link href="{{asset('public/contents/backend')}}/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  <link href="{{asset('public/contents/backend')}}/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  <!-- sweetalert2 -->
    <link href="{{asset('public/contents/backend')}}/assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

    <!-- ck editor  -->
    <link rel="stylesheet" href="{{asset('public/contents/backend')}}/ckeditor/samples/css/samples.css">
    <link rel="stylesheet" href="{{asset('public/contents/backend')}}/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">


  <!-- Responsive datatable examples -->
  <link href="{{asset('public/contents/backend')}}/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  <link href="{{asset('public/contents/backend')}}/assets/plugins/morris/morris.css" rel="stylesheet" >
  <link href="{{asset('public/contents/backend')}}/assets/plugins/ion-rangeslider/ion.rangeSlider.skinModern.css" rel="stylesheet" type="text/css"/>
  <link href="{{asset('public/contents/backend')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="{{asset('public/contents/backend')}}/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
  <link href="{{asset('public/contents/backend')}}/assets/css/selectinput.css" rel="stylesheet" type="text/css">
  <link href="{{asset('public/contents/backend')}}/assets/css/icons.css" rel="stylesheet" type="text/css">
  <link href="{{asset('public/contents/backend')}}/assets/css/style.css" rel="stylesheet" type="text/css">

<style media="screen">
.content input[type="text"] {
    height: 40px;
    line-height: 1.8em;
}
.content ul, .content ol, .content pre, .content blockquote, .content textarea:not([class^="cke"]), .content .cke {
    margin: 0;
}
</style>
</head>
<body>
    <?php $headerinfo=DB::table('headers')->first(); ?>
          <!-- Begin page -->
          <div id="wrapper">
      <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="{{route('index')}}" class="logo" target="_blank">
                        <span>
                            <img src="{{asset('public/contents/uploads/common')}}/{{$headerinfo->header_logo}}" alt="" height="50">
                        </span>
                        <i>
                            <img src="{{asset('public/contents/uploads/common')}}/{{$headerinfo->header_logo}}" alt="" height="50">
                        </i>
                    </a>
                </div>

                <nav class="navbar-custom">

                    <ul class="navbar-right d-flex list-inline float-right mb-0">
                        <li class="dropdown notification-list d-none d-sm-block">
                            <form role="search" class="app-search">
                                <div class="form-group mb-0">
                                    <input type="text" class="form-control" placeholder="Search..">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="ti-bell noti-icon"></i>
                                <span class="badge badge-pill badge-danger noti-icon-badge">{{$unred}}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                                <!-- item-->
                                <h6 class="dropdown-item-text">
                                    Notifications ({{$unred}})
                                </h6>
                                <div class="slimscroll notification-item-list">
                                    <!-- item-->
                                    @if(isset($get_trial))
                                    @foreach($get_trial as $getdata)
                                    <a href="{{route('trial.show',$getdata->id)}}" class="dropdown-item notify-item active">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details">{{$getdata->name}}<small class="text-muted">{{$getdata->des}}</small></p>
                                    </a>
                                    @endforeach
                                    @endif

                                </div>
                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                    View all <i class="fi-arrow-right"></i>
                                </a>
                            </div>
                        </li>
                        <li class="dropdown notification-list">
                            <div class="dropdown notification-list nav-pro-img">
                                <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="{{asset('public/contents/backend')}}/assets/images/users/user-4.jpg" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <a class="dropdown-item" href="{{route('myuser.index')}}"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a>
                                    <a class="dropdown-item d-block" href="{{route('setting.index')}}"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings m-r-5"></i> Settings</a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="mdi mdi-power text-danger"></i> Logout</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                         @csrf
                                                     </form>
                                </div>
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>

                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->
      <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Main</li>
                            <li>
                                <a href="{{route('home')}}" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i><span class="badge badge-primary badge-pill float-right">2</span> <span> Dashboard </span>
                                </a>
                            </li>
                            <li>

                                <a href="{{route('slider.index')}}" class="waves-effect"><i class="mdi mdi-calendar-check"></i><span> Slider <span class="badge badge-primary badge-pill float-right">{{$allslider}}</span></span></a>

                            </li>
                            <li>
                              <a href="{{route('customer.index')}}" class="waves-effect"><i class="mdi mdi-calendar-check"></i><span> Customer <span class="badge badge-primary badge-pill float-right">{{$customerall}}</span></span></a>
                            </li>
                            <li>
                              <a href="{{route('sample.index')}}" class="waves-effect"><i class="mdi mdi-calendar-check"></i><span> Sample woks <span class="badge badge-primary badge-pill float-right">{{$sampleall}}</span></span></a>
                            </li>
                            <li>
                              <a href="{{route('menu.index')}}" class="waves-effect"><i class="mdi mdi-calendar-check"></i><span>Menu Configaration <span class="badge badge-pill badge-success float-right">2</span></span></a>
                            </li>

                            <li>
                              <a href="{{route('servicecat.index')}}" class="waves-effect"><i class="mdi mdi-calendar-check"></i><span>Service Category <span class="badge badge-primary badge-pill float-right">2</span></span></a>
                            </li>

                            <li>
                              <a href="{{route('service.index')}}" class="waves-effect"><i class="mdi mdi-calendar-check"></i><span>Service Page<span class="badge badge-danger badge-pill float-right">{{$serviceall}}</span></span></a>
                            </li>

                            <li>
                              <a href="{{route('testimonial.index')}}" class="waves-effect"><i class="mdi mdi-calendar-check"></i><span>Testimonial<span class="badge badge-primary badge-pill float-right">{{$serviceall}}</span></span></a>
                            </li>

                            <li>
                              <a href="{{route('ourblog.index')}}" class="waves-effect"><i class="mdi mdi-calendar-check"></i><span>Blog<span class="badge badge-info badge-pill float-right">{{$blogall}}</span></span></a>
                            </li>

                            <li>
                              <a href="{{route('quote.index')}}" class="waves-effect"><i class="mdi mdi-calendar-check"></i><span>Quote</span></a>
                            </li>

                            <li>
                              <a href="{{route('myuser.index')}}" class="waves-effect"><i class="mdi mdi-account-circle m-r-5"></i><span>User</span></a>
                            </li>

                            <li>
                                <a href="{{route('trial.index')}}" class="waves-effect"><i class="mdi mdi-email-outline"></i><span> Email <span class="float-right menu-arrow"></span> </span></a>

                            </li>

                            <li class="menu-title">Components</li>

                            <li>
                                <a href="{{ route('setting.index') }}" class="waves-effect"><i class="mdi mdi-settings"></i><span> Website Setting <span class="float-right menu-arrow"></span> </span></a>




                            </li>


                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->

            @yield('contents')

         <footer class="footer">
                © 2018 Lexa<span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="http://www.softdevltd.com" target="__">Shamim</a></span>.
        </footer>
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->


        <!-- jQuery  -->
               <script src="{{asset('public/contents/backend')}}/assets/js/jquery.min.js"></script>
               <script src="{{asset('public/contents/backend')}}/assets/js/bootstrap.bundle.min.js"></script>
               <script src="{{asset('public/contents/backend')}}/assets/js/metisMenu.min.js"></script>
               <script src="{{asset('public/contents/backend')}}/assets/js/jquery.slimscroll.js"></script>
               <script src="{{asset('public/contents/backend')}}/assets/js/waves.min.js"></script>

               <script src="{{asset('public/contents/backend')}}/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>



               <script src="{{asset('public/contents/backend')}}/assets/plugins/bootstrap-min.js"></script>

                       <!-- Required datatable js -->
               <script src="{{asset('public/contents/backend')}}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
               <script src="{{asset('public/contents/backend')}}/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
               <!-- Buttons examples -->
               <script src="{{asset('public/contents/backend')}}/assets/plugins/datatables/dataTables.buttons.min.js"></script>
               <script src="{{asset('public/contents/backend')}}/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
               <script src="{{asset('public/contents/backend')}}/assets/plugins/datatables/jszip.min.js"></script>
               <script src="{{asset('public/contents/backend')}}/assets/plugins/datatables/pdfmake.min.js"></script>
               <script src="{{asset('public/contents/backend')}}/assets/plugins/datatables/vfs_fonts.js"></script>
               <script src="{{asset('public/contents/backend')}}/assets/plugins/datatables/buttons.html5.min.js"></script>
               <script src="{{asset('public/contents/backend')}}/assets/plugins/datatables/buttons.print.min.js"></script>
               <script src="{{asset('public/contents/backend')}}/assets/plugins/datatables/buttons.colVis.min.js"></script>
               <!-- Responsive examples -->
               <script src="{{asset('public/contents/backend')}}/assets/plugins/datatables/dataTables.responsive.min.js"></script>
               <script src="{{asset('public/contents/backend')}}/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

               <!-- Datatable init js -->
               <script src="{{asset('public/contents/backend')}}/assets/pages/datatables.init.js"></script>
               <!-- Sweet-Alert  -->
              <script src="{{asset('public/contents/backend')}}/assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
              <script src="{{asset('public/contents/backend')}}/assets/pages/sweet-alert.init.js"></script>

               <!-- App js -->

               <script src="{{asset('public/contents/backend')}}/assets/js/app.js"></script>

              <script src="{{asset('public/contents/backend')}}/ckeditor/ckeditor.js"></script>
              <script src="{{asset('public/contents/backend')}}/ckeditor/samples/js/sample.js"></script>


              <!-- INPUT CHOOSE  -->
              <script src="{{asset('public/contents/backend')}}/assets/js/selectize.min.js"></script>
              <!-- choose keywork -->
              <script>
              $('.input-tags').selectize({
                plugins: ['remove_button'],
                persist: false,
                create: true,
                render: {
                  item: function(data, escape) {
                    return '<div>"' + escape(data.text) + '"</div>';
                  }
                },

              });
              </script>


              <script>
              CKEDITOR.replace( 'editor', {
                extraPlugins: 'imageuploader'
              });
              CKEDITOR.plugins.add( 'imageuploader', {
            init: function( editor ) {
            editor.config.filebrowserBrowseUrl = 'http://www.clippingpathaid.com/public/contents/backend/ckeditor/plugins/imageuploader/imgbrowser.php';
            }
            });
              </script>

    </body>

</html>
