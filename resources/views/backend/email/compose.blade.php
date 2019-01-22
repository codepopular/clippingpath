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
                                    <!-- Right Sidebar -->
                                         <div class="email-rightbar mb-3">

                                             <div class="card">
                                                 <div class="card-body">

                                                     <form>
                                                         <div class="form-group">
                                                             <input type="email" class="form-control" placeholder="To" value="@if(isset($edit)) {{$edit->email}} @endif" name="email">
                                                         </div>

                                                         <div class="form-group">
                                                             <input type="text" class="form-control" placeholder="Subject" name="subject">
                                                         </div>
                                                         <div class="form-group">
                                                            <textarea name="des" rows="8" cols="80" id="editor"></textarea>
                                                         </div>

                                                         <div class="btn-toolbar form-group mb-0">
                                                             <div class="">
                                                                 <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i class="far fa-save"></i></button>
                                                                 <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i class="far fa-trash-alt"></i></button>
                                                                 <button class="btn btn-primary waves-effect waves-light"> <span>Send</span> <i class="fab fa-telegram-plane m-l-10"></i> </button>
                                                             </div>
                                                         </div>

                                                     </form>

                                                 </div>

                                             </div>

                                         </div> <!-- end Col-9 -->


                                </div>

                            </div><!-- End row -->

                    </div> <!-- container-fluid -->

  @endsection
