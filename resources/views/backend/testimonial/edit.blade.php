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
                                     <a href="{{route('testimonial.index')}}" class="btn btn-info text-center">All Testimonial</a>
                                   </div>
                                       @if (Session('status'))
                                               <div class="alert alert-success text-center">
                                                <strong>Testimonial Updated Successfully</strong>
                                              </div>
                                          @endif
                                      <form action="{{route('testimonial.update',$edit->id)}}" method="post" enctype="multipart/form-data">
                                       @method('PUT')
                                        @csrf
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control {{ $errors->has('name') ? 'parsley-error' : '' }}"  value="{{$edit->name}}" name="name">
                                            @if ($errors->has('name'))
                                            <ul class="parsley-errors-list filled" id="parsley-id-17">
                                              <li class="parsley-required">{{ $errors->first('name') }}</li>
                                            </ul>
                                           @endif
                                        </div>



                                        <div class="form-group">
                                            <label>Designation</label>
                                            <input type="text" class="form-control {{ $errors->has('designation') ? 'parsley-error' : '' }}"  value="{{$edit->designation}}" name="designation">
                                            @if ($errors->has('designation'))
                                            <ul class="parsley-errors-list filled" id="parsley-id-17">
                                              <li class="parsley-required">{{ $errors->first('designation') }}</li>
                                            </ul>
                                           @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Client FeedBack</label>
                                            <textarea name="des" rows="8" cols="80" placeholder="Client FeedBack">{{$edit->des}}</textarea>
                                            @if ($errors->has('des'))
                                            <ul class="parsley-errors-list filled" id="parsley-id-17">
                                              <li class="parsley-required">{{ $errors->first('des') }}</li>
                                            </ul>
                                           @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Client Image</label>
                                            <div>
                                                <input type="file" id="pass2" class="form-control {{ $errors->has('photo') ? 'parsley-error' : '' }}" name="photo" value="{{$edit->photo}}">
                                                <img src="{{asset('public/contents/uploads/testimonial')}}/{{$edit->photo}}" alt="" height="100" width='150'>
                                                @if ($errors->has('photo'))
                                                <ul class="parsley-errors-list filled" id="parsley-id-17">
                                                  <li class="parsley-required">{{ $errors->first('photo') }}</li>
                                                </ul>
                                                     @endif

                                            </div>
                                        </div>
                                         <div class="form-group">
                                              <label>status</label>
                                               <select class="form-control" name="status" >
                                                 <option value="1">Publish</option>

                                                 <option
                                                  @if($edit->status==0)
                                                 selected="selected"
                                                   @endif
                                                  value="0">Unpublish</option>

                                               </select>
                                          </div>
                                          <div class="form-group">
                                            <div class="form-group">
                                              <div>
                                                  <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                      Update Testimonial
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
