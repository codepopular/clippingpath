@extends('layouts.backend')
@section('contents')


                <div class="content">
                  <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-20">
                                    <div class="card-body">
                                      <div class="text-center ">
                                       <a href="{{route('slider.create')}}" class="btn btn-info">Add Slider</a>
                                     </div>
                                     <div class="row justify-content-md-center " style="margin-top:10px">
                                       <div class="col-md-6 ">
                                         @if (Session('status'))
                                                 <div class="alert alert-danger text-center">
                                                  <strong>Slider Deleted Successfully</strong>
                                                </div>
                                            @endif
                                      </div>
                                    </div>

                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Photo</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                              <?php $no=0;?>
                                            @foreach($sliders as $slider)
                                              <?php $no++;?>
                                            <tr>
                                                <td>{{$no}}</td>
                                                <td>{{$slider->name}}</td>
                                                <td><img height="80" width="200" src="{{asset('public/contents/uploads/slider')}}/{{$slider->photo}}" alt=""></td>
                                                <td>
                                                  @if($slider->status==1)
                                                  <a href="#" class="btn btn-info" >active</a>
                                                  @else
                                                  <a href="#" class="btn btn-primary">Deactive</a>
                                                  @endif
                                                </td>
                                                <td>
                                                  <a href="{{route('slider.show',$slider->id)}}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                                  <a href="{{route('slider.edit',$slider->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                  <form class="delete-form" action="{{action('sliderController@destroy',$slider->id)}}" method="post">
                                                    @method("DELETE")
                                                       @csrf
                                                  <button type="submit" class="btn btn-danger waves-effect waves-light" onclick="return confirm('are you sure want to delete data')"><i class="fa fa-trash"></i></button>
                                                  </form>


                                                </td>


                                            </tr>
                                            @endforeach;
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->


                    </div> <!-- container-fluid -->
                </div> <!-- content -->


  @endsection
