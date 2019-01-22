@extends('layouts.backend')
@section('contents')

<div class="content">
  <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Dashboard</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">
                            Welcome to Lexa Dashboard
                        </li>
                    </ol>
                    <h4 style="color:green">
                      @if(Session('success'))
                       {{ session('success') }}
                      @endif
                    </h4>

                    <div class="state-information d-none d-sm-block">
                        <div class="state-graph">
                            <div id="header-chart-1"></div>
                            <div class="info">Balance $ 2,317</div>
                        </div>
                        <div class="state-graph">
                            <div id="header-chart-2"></div>
                            <div class="info">Item Sold 1230</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <a href="{{URL::to('/clear-cache')}}" class="btn btn-info">Clear Cache</a>
        <!--<a href="{{URL::to('/optimize')}}" class="btn btn-warning">Optimize</a>-->
        <!--<a href="{{URL::to('/route-cache')}}" class="btn btn-success">Route Cache</a>-->
        <a href="{{URL::to('/config-cache')}}" class="btn btn-danger">Config-cache</a>
        <a href="{{URL::to('/view-clear')}}" class="btn btn-danger">View Clear</a>

    </div> <!-- container-fluid -->
</div> <!-- content -->



@endsection
