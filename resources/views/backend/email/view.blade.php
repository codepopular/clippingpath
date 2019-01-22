@extends('layouts.backend')
@section('contents')

                 <!-- Start content -->
                <div class="content">
                  <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Inbox</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Email</a></li>
                                        <li class="breadcrumb-item active">Inbox</li>
                                    </ol>

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
                        <div class="row">
                                <div class="col-12">
                                    <!-- Left sidebar -->
                                        @include('backend.template.email')
                                    <!-- End Left sidebar -->


                                    <!-- Right Sidebar -->
                                    <div class="email-rightbar mb-3">

                                        <div class="card">
                                            <div class="btn-toolbar p-3" role="toolbar">
                                                <div class="btn-group">

                                                </div>
                                                <form class="delete-form" action="{{action('trialController@destroy',$show->id)}}" method="post">
                                                  @method("DELETE")
                                                     @csrf
                                                    <button type="submit" class="btn btn-danger waves-effect waves-light"  onclick="return confirm('are you sure want to delete data')"><i class="far fa-trash-alt"></i></button>
                                                </form>

                                            </div>
                                            <div class="card-body">

                                                <div class="media m-b-30">
                                                    <img class="d-flex mr-3 rounded-circle thumb-md" src="{{asset('public/contents/backend')}}/assets/images/users/user-1.jpg" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h4 class="font-14 m-0">{{$show->name}}</h4>
                                                        <small class="text-muted">{{$show->email}}</small>
                                                    </div>
                                                </div>

                                                  {!! $show->des !!}
                                                <hr/>

                                                <div class="row">
                                                    @if(isset($show->photo))
                                                    <div class="col-xl-2 col-6">
                                                        <div class="card m-b-20">
                                                            <img class="card-img-top img-fluid" src="{{asset('public/contents/uploads/trial')}}/{{$show->photo}}" alt="Card image cap">
                                                            <div class="p-t-10 p-b-10 text-center">
                                                                <a href="{{asset('public/contents/uploads/trial')}}/{{$show->photo}}" class="text-muted font-600" download>
                                                                 Download
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        @endif
                                                      @if(isset($show->photo1))
                                                    <div class="col-xl-2 col-6">
                                                        <div class="card m-b-20">
                                                            <img class="card-img-top img-fluid" src="{{asset('public/contents/uploads/trial')}}/{{$show->photo1}}" alt="Card image cap">
                                                            <div class="p-t-10 p-b-10 text-center">
                                                                <a href="{{asset('public/contents/uploads/trial')}}/{{$show->photo1}}" class="text-muted font-600" download>
                                                                 Download
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                      @endif
                                                    @if(isset($show->photo2))
                                                    <div class="col-xl-2 col-6">
                                                        <div class="card m-b-20">
                                                            <img class="card-img-top img-fluid" src="{{asset('public/contents/uploads/trial')}}/{{$show->photo2}}" alt="Card image cap">
                                                            <div class="p-t-10 p-b-10 text-center">
                                                                <a href="{{asset('public/contents/uploads/trial')}}/{{$show->photo2}}" class="text-muted font-600" download>
                                                                 Download
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    @endif



                                                </div>

                                                <a href="{{route('trial.edit',$show->id)}}" class="btn btn-secondary waves-effect m-t-30"><i class="mdi mdi-reply"></i> Reply</a>
                                            </div>

                                        </div>

                                    </div> <!-- end Col-9 -->

                                     <a href="{{URL::to('trial1')}}">main</a>
                                </div>

                            </div><!-- End row -->

                    </div> <!-- container-fluid -->

  @endsection
