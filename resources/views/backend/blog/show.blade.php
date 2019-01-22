@extends('layouts.backend')
@section('contents')


                <div class="content" >
                  <div class="container-fluid">

                        <div class="row justify-content-md-center">

                            <div class="col-md-12">

                                <div class="card m-b-20" style="margin-top:50px">
                                    <div class="card-body">
                                      <div class="text-center">
                                       <a href="{{route('ourblog.index')}}" class="btn btn-info text-center">All Blog</a>
                                     </div>
                                        <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;margin-top:20px">

                                            <td>  {!!$show->des!!}</td>

                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->



                    </div> <!-- container-fluid -->
                </div> <!-- content -->


  @endsection
