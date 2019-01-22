@extends('layouts.backend')
@section('contents')

   <br>
   <br>
   <br>
   <br>
                <div class="content">
                  <div class="container-fluid">
                    <div class="row justify-content-md-center">
                          <div class="col-lg-6">
                              <div class="card m-b-20">
                                  <div class="card-body">
                                    <div class="text-center">
                                     <a href="{{route('servicecat.index')}}" class="btn btn-info text-center">All Service Category</a>
                                   </div>
                                       @if (Session('status'))
                                               <div class="alert alert-success text-center">
                                                <strong>Servie Category Updated Successfully</strong>
                                              </div>
                                          @endif
                                      <form action="{{route('servicecat.update',$edit->id)}}" method="post">
                                       @method('PUT')
                                        @csrf
                                        <div class="form-group">
                                            <label>Service Category Title</label>
                                            <input type="text" class="form-control {{ $errors->has('title') ? 'parsley-error' : '' }}"  value="{{$edit->title}}" name="title">
                                            @if ($errors->has('title'))
                                              <ul class="parsley-errors-list filled" id="parsley-id-17">
                                              <li class="parsley-required">{{ $errors->first('title') }}</li>
                                            </ul>
                                           @endif
                                        </div>



                                        <div class="form-group">
                                          <div class="form-group">
                                            <div>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                    Update Category
                                                </button>
                                            </div>
                                        </div>
                                        </div>
                                      </form>

                                  </div>
                              </div>
                          </div> <!-- end col -->

                      </div>

                    </div> <!-- container-fluid -->
                </div> <!-- content -->


  @endsection
