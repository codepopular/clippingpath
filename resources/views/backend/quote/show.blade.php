@extends('layouts.backend')
@section('contents')


                <div class="content" >
                  <div class="container-fluid">

                        <div class="row justify-content-md-center">

                            <div class="col-8">

                                <div class="card m-b-20" style="margin-top:50px">
                                    <div class="card-body">
                                      <div class="text-center">
                                       <a href="{{route('quote.index')}}" class="btn btn-info text-center">All quote</a>
                                     </div>
                                        <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;margin-top:20px">


                                            <tr>
                                                <th>Photo</th>
                                                <th><img width="100%" height="190px" src="{{asset('public/contents/uploads/quote')}}/{{$show->photo}}" alt="image"></th>
                                            </tr>
                                            <tr>
                                              <td>Title</td>
                                              <td>{{$show->name}}</td>
                                            </tr>
                                            <tr>
                                              <td>Service Type</td>
                                              <td>{{$show->service_type}}</td>
                                            </tr>
                                            <tr>
                                              <td>turnaround</td>
                                              <td>{{$show->turnaround}}</td>
                                            </tr>
                                            <tr>
                                              <td>Path Name</td>
                                              <td>{{$show->need_path}}</td>
                                            </tr>
                                            <tr>
                                              <td>QUANTITY</td>
                                              <td>{{$show->qty}}</td>
                                            </tr>

                                            <tr>
                                              <td>Find Us</td>
                                              <td>{{$show->find_us}}</td>
                                            </tr>
                                            <tr>
                                              <td>DESCRIPTION</td>
                                              <td>{{$show->des}}</td>
                                            </tr>
                                            <tr>
                                              <td>Name</td>
                                              <td>{{$show->name}}</td>
                                            </tr>
                                            <tr>
                                              <td>Address</td>
                                              <td>{{$show->address}}</td>
                                            </tr>

                                            <tr>
                                              <td>Email</td>
                                              <td>{{$show->email}}</td>
                                            </tr>

                                            <tr>
                                              <td>Website</td>
                                              <td>{{$show->website}}</td>
                                            </tr>

                                            <tr>
                                              <td>Company</td>
                                              <td>{{$show->company}}</td>
                                            </tr>

                                            <tr>
                                              <td>Phone</td>
                                              <td>{{$show->phone}}</td>
                                            </tr>

                                            <tr>
                                              <td>COUNTRY</td>
                                              <td>{{$show->country}}</td>
                                            </tr>
                                            <tr>
                                              <td>CURRENCY</td>
                                              <td>{{$show->currency}}</td>
                                            </tr>
                                            <tr>
                                              <td>Photo</td>
                                              <td>{{$show->photo}}</td>
                                            </tr>
                                            <tr>
                                              <td>Created</td>
                                              <td>{{$show->created_at}}</td>
                                            </tr>

                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->



                    </div> <!-- container-fluid -->
                </div> <!-- content -->


  @endsection
