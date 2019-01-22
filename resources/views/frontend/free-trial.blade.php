@extends('layouts.frontend')
@section('contents')
    <section id="inner-banner">
        <div class="twentytwenty-container">
             <img src="{{asset('public/contents/frontend/')}}/images/breadcum/free_trail_cover done.jpg" class="img-fluid w-100" alt="After1">
             <img src="{{asset('public/contents/frontend/')}}/images/breadcum/free_trail_cover.jpg" class="img-fluid w-100" alt="Before">
        </div>
    </section>
    <section id="breadcumb">
        <div class="container">
            <div class="row">
                <div class="col-12 p-0">
                    <ul>
                        <li><a href="{{route('index')}}"><i class="fa fa-home"></i>Home</a></li>
                        <li><i class="fa fa-chevron-right"></i><li>
                        <li><a href="#">Free Trial</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


  @include('frontend/template/trial')


  @endsection
