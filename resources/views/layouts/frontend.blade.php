<!DOCTYPE html>
<html lang="en">
<head>
    <?php $general=DB::table('generals')->first(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @if(Request::is("/"))
          {{$general->site_title}}
        @else
       <?php  $title=Request::path();
         $link = explode('/',$title);
        $link1 = end($link);
        $slug = str_slug($link1, " ");
        
        echo ucwords($slug).' | Clipping Path Aid';
       
       ?>
        @endif
        
       
        
   </title>
    
    <meta name="description" content="{{$general->metacontent}}">
    <meta name="keywords" content="{{$general->metakeyword}}">

    <link rel="icon" href="{{asset('public/contents/frontend')}}/images/favicon.png" type="image/icon">
    <link rel="stylesheet" href="{{asset('public/contents/frontend')}}/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="{{asset('public/contents/frontend')}}/fonts/font-icon/flaticon.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

  <link href="{{asset('public/contents/backend')}}/assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{asset('public/contents/frontend')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('public/contents/frontend')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('public/contents/frontend')}}/css/slick.css">
    <link rel="stylesheet" href="{{asset('public/contents/frontend')}}/css/venobox.css">
    <link rel="stylesheet" href="{{asset('public/contents/frontend')}}/css/twentytwenty.css">
    <link rel="stylesheet" href="{{asset('public/contents/frontend')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('public/contents/frontend')}}/css/device.min.css">

    <!-- Sweet-Alert  -->
   <script src="{{asset('public/contents/backend')}}/assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
   <script src="{{asset('public/contents/backend')}}/assets/pages/sweet-alert.init.js"></script>


   <script src="{{asset('public/contents/frontend')}}/js/jquery-v1.12.4.js"></script>
   

</head>
<body>
    <?php $headerinfo=DB::table('headers')->first(); ?>

    <header>
        <div class="header-top hide">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-8 p-0 mail">
                        <ul>
                            <li><a href="#"><i class="fa fa-envelope"></i>{{$headerinfo->email}}</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> call us: {{$headerinfo->phone}}</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 text-right sign-in p-0">
                        <ul>
                            <li><a href="#"><i class="fa fa-sign-out"></i>Login</a></li>
                            <li><a href="#"><i class="fa fa-sign-in"></i>Sign Up</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-2 text-right social d-sm-none d-md-block d-lg-block p-0">
                        <ul>
                          @if($soicalinfo->facebook)
                          <li><a href="{{$soicalinfo->facebook}}"><i class="fa fa-facebook"></i></a></li>
                          @endif

                          @if($soicalinfo->twitter)
                          <li><a href="{{$soicalinfo->twitter}}"><i class="fa fa-twitter"></i></a></li>
                          @endif

                          @if($soicalinfo->google_plus)
                          <li><a href="{{$soicalinfo->google_plus}}"><i class="fa fa-google-plus"></i></a></li>
                          @endif

                          @if($soicalinfo->pinterest)
                          <li><a href="{{$soicalinfo->pinterest}}"><i class="fa fa-pinterest"></i></a></li>
                          @endif

                          @if($soicalinfo->youtube)
                          <li><a href="{{$soicalinfo->youtube}}"><i class="fa fa-youtube"></i></a></li>
                          @endif

                          @if($soicalinfo->dribbble)
                          <li><a href="{{$soicalinfo->dribbble}}"><i class="fa fa-dribbble"></i></a></li>
                          @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo-area hide">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 p-0">
                        <a href="{{route('index')}}"><img src="{{asset('public/contents/uploads/common')}}/{{$headerinfo->header_logo}}" class="img-fluid" alt=""></a>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 text-right p-0">
                        <ul>
                            <li><a href="{{url($buttonlink->trial_period)}}">Trial Period</a></li>
                            <li><a href="{{url($buttonlink->get_quote)}}">get a quote</a></li>
                            <li><a href="{{url($buttonlink->faq)}}">FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-12 p-0">
                        <nav class="navbar navbar-expand-md navbar-light p-0">
                          <a class="navbar-brand d-sm-none d-md-none d-lg-none d-xl-none" href="{{route('index')}}">
                              <img src="{{asset('public/contents/uploads/common')}}/{{$headerinfo->header_logo}}" class="img-fluid cm-logo" alt="">
                              <img src="{{asset('public/contents/uploads/common')}}/{{$headerinfo->header_logo}}" class="img-fluid d-sm-none mobile-logo" alt="">
                          </a>
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>

                          <div class="collapse navbar-collapse mainmenu" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                              @foreach($header as $getmenu)
                              @if($getmenu->menu_dispaly==1)
                              <li class="nav-item mobile_none">
                                <a class="nav-link" href="{{url($getmenu->url)}}"><i class="{{$getmenu->icon}}"></i>{{$getmenu->title}}</a>

                                @if($getmenu->dropdown=='on')
                                <div class="megamenu">
                                    <div class="row">
                                      @foreach($servicecat as $catname)
                                        <div class="col-lg-3 col-md-3">
                                            <h3>{{$catname->title}}</h3>

                                            <ul>
                                              <?php $servicename=DB::table('services')->where('fk_servicecat',$catname->id)->get(); ?>
                                                @foreach($servicename as $getservicename)
                                                <li><a href="{{route('single_service',$getservicename->slug)}}"><i class="fa fa-chevron-right"></i>{{$getservicename->name}}</a></li>
                                                @endforeach
                                            </ul>

                                        </div>
                                      @endforeach
                                    </div>
                                </div>
                                @endif
                              </li>

                                  <li class="mobile_nav">
                                    <span>
                                        <div id="accordionMain">
                                          <div class="card">
                                            <div class="card-header" id="headingOneParent">
                                              <a href="{{url($getmenu->url)}}">
                                              <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOneParent{{$getmenu->id}}" aria-expanded="true" aria-controls="collapseOneParent{{$getmenu->id}}">
                                                  {{$getmenu->title}}
                                                </button>
                                              </h5>
                                              </a>
                                            </div>
                                                @if($getmenu->dropdown=='on')
                                            <div id="collapseOneParent{{$getmenu->id}}" class="collapse" aria-labelledby="headingOneParent{{$getmenu->id}}" data-parent="#accordionMain">
                                              <div class="card-body">
                                                <div id="accordionNav">

                                                @foreach($servicecat as $catname)
                                                  <div class="card">
                                                    <div class="card-header" id="headingOneNav{{$catname->id}}">
                                                      <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOneNav{{$catname->id}}" aria-expanded="false" aria-controls="collapseOneNav{{$catname->id}}">
                                                          <h5>{{$catname->title}}</h5>
                                                        </button>
                                                      </h5>
                                                    </div>
                                                    <div id="collapseOneNav{{$catname->id}}" class="collapse" aria-labelledby="headingOneNav{{$catname->id}}" data-parent="#accordionNav">
                                                      <div class="card-body">
                                                        <ul>
                                                          <?php $servicename=DB::table('services')->where('fk_servicecat',$catname->id)->get(); ?>
                                                            @foreach($servicename as $getservicename)
                                                            <li><a href="{{route('single_service',$getservicename->slug)}}"> {{$getservicename->name}}</a></li>
                                                            @endforeach
                                                        </ul>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  @endforeach
                                                </div>
                                              </div>
                                            </div>
                                            @endif
                                          </div>

                                        </div>
                                    </span>
                                  </li>


                              @endif
                              @endforeach




                            </ul>
                            <form action="{{route('search')}}" method="post" class="d-md-none d-lg-block">
                               {{ csrf_field() }}
                                <input type="search" class="search" placeholder="enter Search" name="search" required>
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                          </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>






    @yield('contents')

    <?php $getfooter=DB::table('footers')->first();?>

    <footer>
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-12 footer-menu">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <a href="{{route('index')}}"><img src="{{asset('public/contents/uploads/common')}}/{{$getfooter->footer_logo}}" class="img-fluid" alt=""></a>
                            </div>
                            <div class="col-lg-6 d-none d-sm-none d-md-none d-lg-block d-xl-block">
                                <ul class="footer-navs">
                                  <?php $x=0;?>
                                  @foreach($menu as $footermenu)
                                  <?php $x++;?>

                                  @if($footermenu->menu_dispaly==0)

                                    <li><a class="<?php if($x==1){echo 'active';} ?>" href="{{url($footermenu->url)}}">{{$footermenu->title}}</a></li>
                                  @endif
                                   @endforeach

                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 text-right">
                                <a class="btn-linked" href="{{$buttonlink->request_us}}">Request Us To Get<br>Quick Estimate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-md-6 order-sm-2 order-md-2 order-lg-1">
                                <address>
                                    <h3>Address</h3>
                                    <h4>Bangladesh Office:</h4>
                                <p> Gorilla Home(2nd Floor), Gulshan Avenue, Gulshan-1,Dhaka-1212, Bangladesh</p>
                                    <h4>USA Office:</h4>
                                  <p>152 West, 36 St (5FL) <br> New York, NY-10018. USA 
                                  <br>Ph: +1 (718) 416-5730
                                  </p>
                                    <h4>UK Office:</h4>
                                    <p>75 Hounslow Rd,SNELLAND,LN3 5PF
                                    <br>
                                    Ph:+1 347 221 8682</p>
                                </address>
                            </div>
                            <div class="col-lg-7 order-md-1 order-sm-1 order-lg-2 md-gape mobile-service">
                                <div class="row">
                                    <div class="col-12">
                                        <h3>Services</h3>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <ul class="footer-service">
                                            <li><a href="https://clippingpathaid.com/clipping-path-service"><i class="fa fa-circle"></i>Clipping Path Service</a></li>
                                            <li><a href="https://clippingpathaid.com/multiple-clipping-path-service"><i class="fa fa-circle"></i>Color/Multi Clipping Path</a></li>
                                            <li><a href="https://clippingpathaid.com/image-masking-service"><i class="fa fa-circle"></i>Image Masking Service</a></li>
                                            <li><a href="https://clippingpathaid.com/photoshop-shadow-creation-service"><i class="fa fa-circle"></i>Drop Shadow Service</a></li>
                                            <li><a href="https://clippingpathaid.com/photo-retouching-services"><i class="fa fa-circle"></i>Image Retouching Service</a></li>
                                            <ul class="d-md-none">
                                                <li><a href="https://clippingpathaid.com/neck-joint-service"><i class="fa fa-circle"></i>Neck Joint</a></li>
                                                <li><a href="https://clippingpathaid.com/photo-color-correction-services"><i class="fa fa-circle"></i>Color Correction</a></li>
                                            </ul>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <ul class="footer-service">
                                            <li><a href="https://clippingpathaid.com/raster-to-vector-conversion-service"><i class="fa fa-circle"></i>Raster to Vector Conversion</a></li>
                                            <li><a href="https://clippingpathaid.com/product-photo-editing-services"><i class="fa fa-circle"></i>Product Editing</a></li>
                                            <li><a href="https://clippingpathaid.com/image-manipulation-service"><i class="fa fa-circle"></i>Image Manipulation</a></li>
                                            <li><a href="https://clippingpathaid.com/jewellry-retouching-services"><i class="fa fa-circle"></i>Jewellry Retouching</a></li>
                                            <li><a href="https://clippingpathaid.com/neck-joint-service"><i class="fa fa-circle"></i>Neck Joint</a></li>
                                            <ul class="d-md-none">
                                                <li><a href="https://clippingpathaid.com/background-removal-service"><i class="fa fa-circle"></i>Background Removal</a></li>
                                                <li><a href="https://clippingpathaid.com/brochure-service"><i class="fa fa-circle"></i>Brochure</a></li>
                                            </ul>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 d-sm-none d-md-block d-lg-block">
                                        <ul class="footer-service">
                                            <li><a href="https://clippingpathaid.com/background-removal-service"><i class="fa fa-circle"></i>Background Removal</a></li>
                                            <li><a href="https://clippingpathaid.com/brochure-service"><i class="fa fa-circle"></i>Brochure</a></li>
                                            <li><a href="https://clippingpathaid.com/ecommerce-image-service"><i class="fa fa-circle"></i>ecommerce image</a></li>
                                            <li><a href="https://clippingpathaid.com/photo-restoration-service"><i class="fa fa-circle"></i>Photo Restoration</a></li>
                                            <li><a href="https://clippingpathaid.com/photo-color-correction-services"><i class="fa fa-circle"></i>Color Correction</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-md-6 order-sm-3 order-md-3 order-lg-3 payment text-md-right text-lg-left">
                                <h3>We Accept</h3>
                                <img src="{{asset('public/contents/frontend')}}/images/payment-system.png" class="img-fluid" alt="">
                                <h4 class="social">Social Media</h4>
                                  <ul>
                                    @if($soicalinfo->facebook)
                                    <li><a href="{{$soicalinfo->facebook}}"><i class="fa fa-facebook"></i></a></li>
                                    @endif

                                    @if($soicalinfo->twitter)
                                    <li><a href="{{$soicalinfo->twitter}}"><i class="fa fa-twitter"></i></a></li>
                                    @endif

                                    @if($soicalinfo->google_plus)
                                    <li><a href="{{$soicalinfo->google_plus}}"><i class="fa fa-google-plus"></i></a></li>
                                    @endif

                                    @if($soicalinfo->pinterest)
                                    <li><a href="{{$soicalinfo->pinterest}}"><i class="fa fa-pinterest"></i></a></li>
                                    @endif

                                    @if($soicalinfo->youtube)
                                    <li><a href="{{$soicalinfo->youtube}}"><i class="fa fa-youtube"></i></a></li>
                                    @endif

                                    @if($soicalinfo->dribbble)
                                    <li><a href="{{$soicalinfo->dribbble}}"><i class="fa fa-dribbble"></i></a></li>
                                    @endif
                                  </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right text-center">
            <p>{{$getfooter->copyright}}</a></p>
        </div>
    </footer>

    <i class="fa fa-chevron-up up-btn"></i>
    <script src="{{asset('public/contents/frontend')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('public/contents/frontend')}}/js/venobox.min.js"></script>
    <script src="{{asset('public/contents/frontend')}}/js/slick.min.js"></script>



    <script src="{{asset('public/contents/frontend')}}/js/jquery.twentytwenty.js"></script>
    <script src="{{asset('public/contents/frontend')}}/js/jquery.event.move.js"></script>
    <script src="{{asset('public/contents/frontend')}}/js/jClocksGMT.js"></script>
    <script src="{{asset('public/contents/frontend')}}/js/jquery.rotate.js"></script>
    <script src="{{asset('public/contents/frontend')}}/js/custom.js"></script>
    <script>
    $(function(){
      $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.5});
      $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.3, orientation: 'vertical'});
        $('.carousel').carousel({
          interval: 5000
        })
    });
    </script>
    
    
    
    
    
    
    
    
    
    
   <script id="dsq-count-scr" src="//clippingpathaid.disqus.com/count.js" async></script> 
    
    
    
    
    

</body>
</html>
