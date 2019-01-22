@extends('layouts.frontend')
@section('contents')
<div class="container">
    @if(isset($serach))
      <p style="padding-top:10px">Your search result : <ins>{{$sresult}}</ins></p>
    @foreach($serach as $getservice)
      <div class="col-lg-12 col-md-12 text-center p-0">
          <div class="search-item">
              <a href="{{ route('single_service',$getservice->slug) }}"><div class="service-content">
                  <h3> {{ str_limit($getservice->title, 52,'') }}</h3>
                  <p>  <?php $shamimhasan=strip_tags($getservice->description) ?>
                    {{ str_limit($shamimhasan, 480,'') }}
                  </p>
                  <span class="btn btn-info" style="margin-top:15px">Read More</span>
              </div></a>
          </div>

      </div>
    @endforeach
    <div class="paginaton" style="margin:20px 0px">
      {{ $serach->links() }}
  @else
  <div id="notfound">
    <div class="notfound">
      <div class="notfound-404">
        <h1>404</h1>
      </div>
      <h2>Oops, The Page you are looking for can't be found!</h2>
      <p>Your search result : <ins>{{$sresult}}</ins></p>
      <form class="notfound-search" method="post" action="{{route('search')}}">
         {{ csrf_field() }}
        <input type="text" placeholder="Search..." name="search">
        <button type="submit">Search</button>
      </form>
      <a href="{{route('index')}}"><span class="arrow"></span>Return To Homepage</a>
    </div>
  </div>
  @endif

      <br>
      <br>
    </div>
  </div>
@endsection
