@extends('layouts.backend')
@section('contents')


                <div class="content">
                  <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-20">
                                    <div class="card-body">
                                      <div class="text-center ">
                                       <a href="{{route('testimonial.create')}}" class="btn btn-info">Add Testimonial</a>
                                     </div>
                                     <div class="row justify-content-md-center " style="margin-top:10px">
                                       <div class="col-md-6 ">
                                         @if (Session('status'))
                                                 <div class="alert alert-danger text-center">
                                                  <strong>Testimonial Deleted Successfully</strong>
                                                </div>
                                            @endif
                                      </div>
                                    </div>


                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                            <tbody>
                                              <tr>
                                                <td>Name</td>
                                                <td>Photo</td>
                                                <td>Message</td>
                                                <td>action</td>
                                              </tr>

                                                @foreach($testimonial as $infotest)
                                               <tr>
                                                <td>{{$infotest->name}}</td>
                                                <td><img src="{{asset('public/contents/uploads/testimonial')}}/{{$infotest->photo}}"></td>
                                                <td>{{$infotest->designation}}</td>
                                                <td>
                                                <a href="{{route('testimonial.show',$infotest->id)}}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                                <a href="{{route('testimonial.edit',$infotest->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                <form class="delete-form" action="{{action('testimonialController@destroy',$infotest->id)}}" method="post">
                                                  @method("DELETE")
                                                     @csrf
                                                <button type="submit" class="btn btn-danger waves-effect waves-light" onclick="return confirm('are you sure want to delete data')"><i class="fa fa-trash"></i></button>
                                                </form>
                                                </td>
                                              </tr>

                                              @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->


                    </div> <!-- container-fluid -->
                </div> <!-- content -->


  @endsection
