@extends('layouts.frontend')
@section('contents')
    <section id="inner-banner" style="background: url({{asset('public/contents/frontend/')}}/images/blog/blog-banner.jpg) no-repeat center; background-size: cover;">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 p-0">
                        <h1>Blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="breadcumb">
        <div class="container">
            <div class="row">
                <div class="col-12 p-0">
                    <ul>
                        <li><a href="{{route('index')}}"><i class="fa fa-home"></i>Home</a></li>
                        <li><i class="fa fa-chevron-right"></i><li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="blog_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <img src="{{asset('public/contents/uploads/blog')}}/{{$blog_single->photo1}}" class="img-fluid" alt="">
                    <span>{{$blog_single->title}}</span>
                    <h6>{{$blog_single->created_at->format('M-d-Y')}}</h6>
                    <aricale class="shamim_hasan">{!! $blog_single->des !!}</aricale>
                    
                    
                    
                    <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://clippingpathaid.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
            
                    
                </div>
                <div class="col-lg-3">
                    <div class="catagory">
                        <h3>CATEGORY</h3>
                        <ul>
                            <?php $p=0;?>
                              <?php $servicename=DB::table('services')->where('status',1)->orderBy('id','ASC')->get()->take(9); ?>
                              @foreach($servicename as $getservicename)
                              <?php $p++;?>
                              <li>
                                <a class="<?php if($p==1){echo 'active';} ?>" href="{{route('single_service',$getservicename->slug)}}">
                                <i class="fa fa-chevron-right">
                                </i> {{$getservicename->name}}</a>
                              </li>
                            @endforeach
                          </ul>


                        </ul>
                    </div>
                    <div class="top_post">
                        <h3>Top Post</h3>
                        <ul>
                          @foreach($sidebarlog as $bloginfo)
                            <li><a href="{{ route('blog_single',$bloginfo->slug) }}">
                                <img src="{{asset('public/contents/uploads/blog')}}/{{$bloginfo->photo}}" alt="">
                                <h5>{{$bloginfo->title}}</h5>
                                <span>{{$bloginfo->created_at->format('M-d-Y')}}</span>
                            </a></li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
