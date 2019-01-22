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
                                          @if (Session('status'))
                                                  <div class="alert alert-danger text-center">
                                                   <strong>Email Deleted Successfully</strong>
                                                 </div>
                                             @endif
                                            <ul class="message-list">
                                               @foreach($get_trial as $trial_info)

                                                <li class="{{$trial_info->status==0 ? 'unread' : ''}}">
                                                  <a href="{{route('trial.show',$trial_info->id)}}">
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk19{{$trial_info->id}}">
                                                            <label for="chk19{{$trial_info->id}}" class="toggle"></label>
                                                        </div>

                                                       <p class="title">{{$trial_info->name}}, me </p><span class="star-toggle fa fa-star-o"></span>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <div class="subject">Trial info &nbsp;–&nbsp; <span class="teaser">{{$trial_info->des}}</span>
                                                        </div>
                                                        <div class="date">{{$trial_info->created_at->format('D, M: h:i:s A')}}</div>
                                                    </div>
                                                    </a>
                                                </li>
                                                @endforeach

                                            </ul>
                                        </div> <!-- card -->

                                        <div class="row m-t-20">
                                            <div class="col-7">

                                            </div>
                                            <div class="col-5">
                                                <div class="btn-group float-right">
                                                  {{$get_trial->links()}}
                                                </div>
                                            </div>
                                        </div>

                                    </div> <!-- end Col-9 -->

                                </div>

                            </div><!-- End row -->

                    </div> <!-- container-fluid -->

  @endsection
