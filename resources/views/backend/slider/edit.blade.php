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
                                     <a href="{{route('slider.index')}}" class="btn btn-info text-center">All Slider</a>
                                   </div>
                                       @if (Session('status'))
                                               <div class="alert alert-success text-center">
                                                <strong>Slider Updated Successfully</strong>
                                              </div>
                                          @endif
                                      <form action="{{route('slider.update',$edit->id)}}" method="post" enctype="multipart/form-data">
                                       @method('PUT')
                                        @csrf
                                          <div class="form-group">
                                              <label>Name</label>
                                              <input type="text" class="form-control {{ $errors->has('name') ? 'parsley-error' : '' }}"  value="{{$edit->name}}" name="name">
                                          </div>

                                          <div class="form-group">
                                              <label>Slider Image</label>
                                              <div>
                                                  <input type="file" id="pass2" class="form-control {{ $errors->has('photo') ? 'parsley-error' : '' }}" name="photo" value="{{$edit->photo}}">

                                                  @if ($errors->has('photo'))
                                                  <ul class="parsley-errors-list filled" id="parsley-id-17">
                                                    <li class="parsley-required">{{ $errors->first('photo') }}</li>
                                                  </ul>
                                                 	     @endif
                                                  <img width="150px" height="150px" src="{{asset('public/contents/uploads/slider')}}/{{$edit->photo}}" alt="slider">
                                              </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-sm-2 col-form-label">Status</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="status">
                                                    <option class="form-control" value="1">Pulish</option>

                                                    <option
                                                      @if($edit->status==0)
                                                        selected="selected"
                                                      @endif

                                                     class="form-control" value="0">Unpublish</option>
                                                </select>
                                            </div>
                                        </div>

                                          <div class="form-group">
                                            <div class="form-group">
                                              <div>
                                                  <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                      Update Slider
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
