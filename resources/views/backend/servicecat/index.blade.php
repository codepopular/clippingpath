@extends('layouts.backend')
@section('contents')


                <div class="content">
                  <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-20">
                                    <div class="card-body">
                                      <div class="text-center ">
                                       <a href="{{route('servicecat.create')}}" class="btn btn-info">Add Service Category</a>
                                     </div>
                                     <div class="row justify-content-md-center " style="margin-top:10px">
                                       <div class="col-md-6 ">
                                         @if (Session('status'))
                                                 <div class="alert alert-danger text-center">
                                                  <strong>Service Category Successfully</strong>
                                                </div>
                                            @endif
                                      </div>
                                    </div>

                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Title</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                              <?php $no=0;?>
                                            @foreach($servicecat as $getdata)
                                              <?php $no++;?>
                                            <tr>
                                                <td>{{$no}}</td>
                                                <td>{{$getdata->title}}</td>

                                                <td>
                                              
                                                  <a href="{{route('servicecat.edit',$getdata->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                  <form class="delete-form" action="{{action('servicecatController@destroy',$getdata->id)}}" method="post">
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
