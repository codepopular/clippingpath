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
                  @foreach($getblog as $blogdata)
                  <div class="blog_info">
                <img src="{{asset('public/contents/uploads/blog')}}/{{$blogdata->photo1}}" class="img-fluid" alt="post-1">
                    <span>{{$blogdata->title}}</span>
                    <h6>{{$blogdata->created_at->format('M-Y-d')}}</h6>
                      <p>{!! str_limit($blogdata->des,450,'..') !!}</p>

                      <div class="read_more text-right" style="margin-top:-20px">
                         <a href="{{ route('blog_single',$blogdata->slug) }}" class="btn btn-info">Read More</a>
                      </div>
                </div>
                @endforeach
                <div class="pagination_shamim" style="margin:20px 0px">
                   {{$getblog->links()}}
                </div>
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
                             @foreach($sidebarlog as $blogdata)
                            <li><a href="{{ route('blog_single',$blogdata->slug) }}">
                                  <img src="{{asset('public/contents/uploads/blog')}}/{{$blogdata->photo}}" class="img-fluid" alt="post-1">
                                <h5>{{$blogdata->title}}</h5>
                                <span>April 28, 2017</span>
                            </a></li>
                            @endforeach
                            <li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
