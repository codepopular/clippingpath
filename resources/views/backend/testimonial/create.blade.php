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
                                       @if (Session('status'))
                                               <div class="alert alert-success text-center">
                                                <strong>Testimonial Added Successfully</strong>
                                              </div>
                                          @endif
                                      <form  action="{{route('testimonial.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                          <div class="form-group">
                                              <label>Name</label>
                                              <input type="text" class="form-control {{ $errors->has('name') ? 'parsley-error' : '' }}"  placeholder="Type Client Name" name="name">
                                              @if ($errors->has('name'))
                                              <ul class="parsley-errors-list filled" id="parsley-id-17">
                                                <li class="parsley-required">{{ $errors->first('name') }}</li>
                                              </ul>
                                             @endif
                                          </div>



                                          <div class="form-group">
                                              <label>Designation</label>
                                              <input type="text" class="form-control {{ $errors->has('designation') ? 'parsley-error' : '' }}"  placeholder="Type Designation" name="designation">
                                              @if ($errors->has('designation'))
                                              <ul class="parsley-errors-list filled" id="parsley-id-17">
                                                <li class="parsley-required">{{ $errors->first('designation') }}</li>
                                              </ul>
                                             @endif
                                          </div>

                                          <div class="form-group">
                                              <label>Client FeedBack</label>
                                              <textarea name="des" rows="8" cols="80" placeholder="Client FeedBack"></textarea>
                                              @if ($errors->has('des'))
                                              <ul class="parsley-errors-list filled" id="parsley-id-17">
                                                <li class="parsley-required">{{ $errors->first('des') }}</li>
                                              </ul>
                                             @endif
                                          </div>

                                          <div class="form-group">
                                              <label>Client Image</label>
                                              <div>
                                                  <input type="file" id="pass2" class="form-control {{ $errors->has('photo') ? 'parsley-error' : '' }}" name="photo">

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
                                                   <option value="0">Unpublish</option>
                                                 </select>
                                            </div>

                                          <div class="form-group">
                                            <div class="form-group">
                                              <div>
                                                  <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                      Add Testimonial
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
