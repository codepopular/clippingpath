@extends('layouts.backend')
@section('contents')


                <div class="content" >
                  <div class="container-fluid">

                        <div class="row justify-content-md-center">

                            <div class="col-6">

                                <div class="card m-b-20" style="margin-top:50px">
                                    <div class="card-body">
                                      <div class="text-center">
                                       <a href="{{route('slider.index')}}" class="btn btn-info text-center">All Slider</a>
                                     </div>
                                        <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;margin-top:20px">
                                            <tr>
                                                <th>Photo</th>
                                                <th><img width="100%" height="190px" src="{{asset('public/contents/uploads/slider')}}/{{$viewslider->photo}}" alt="image"></th>
                                            </tr>
                                            <tr>
                                              <td>Title</td>
                                              <td>{{$viewslider->name}}</td>
                                            </tr>
                                            <tr>
                                              <td>Status</td>
                                              <td>
                                                @if($viewslider->status==1)
                                                <a href="#" class="btn btn-info" >active</a>
                                                @else
                                                <a href="#" class="btn btn-primary">Deactive</a>
                                                @endif
                                              </td>
                                            </tr>
                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->



                    </div> <!-- container-fluid -->
                </div> <!-- content -->


  @endsection
