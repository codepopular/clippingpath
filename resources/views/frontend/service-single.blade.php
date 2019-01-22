@extends('layouts.frontend')
@section('contents')
<section id="inner-banner" style="background: url({{asset('public/contents/frontend/')}}/images/breadcum/ourservice.jpg) no-repeat center; background-size: cover;">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-12 p-0">
                    <h1>{{$single_service->name}}</h1>
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
                        <li><a href="#">request-a-quote</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="clippingpath">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 pl-0 d-none d-lg-block">
                    <div class="all-service">
                        <h2>Our All Service</h2>
                        @foreach($servicecat as $catname)
                        <h4>{{$catname->title}}</h4>
                        <ul>
                            <?php $servicename=DB::table('services')->where('fk_servicecat',$catname->id)->get(); ?>
                            @foreach($servicename as $getservicename)
                            <li><a href="{{route('single_service',$getservicename->slug)}}"><i class="fa fa-chevron-right"></i> {{$getservicename->name}}</a></li>
                              @endforeach
                        </ul>
                          @endforeach

                    </div>
                </div>
                <div class="col-lg-9 clippingpath-details">
                    <div class="row">
                        <div class="col-lg-12 pr-0 spl mp0">
                            <h1>{{$single_service->title}}</h1>

                        </div>
                        <div class="main-content-service"> <!--start main content service-->

                          {!!  $single_service->description  !!}

                        </div> <!--End main content service-->
                </div>
            </div>
        </div>
    </section>

    @include('frontend/template/trial')

<br>
<br>
  @endsection
