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
                                                <strong>Sample work Added Successfully</strong>
                                              </div>
                                          @endif
                                      <form  action="{{route('sample.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                          <div class="form-group">
                                              <label>Title</label>
                                              <input type="text" class="form-control {{ $errors->has('title') ? 'parsley-error' : '' }}"  placeholder="Type Sample work title" name="title">
                                          </div>
                                          <div class="form-group">
                                              <labela>category</label>
                                              <input type="text" class="form-control {{ $errors->has('cat_name') ? 'parsley-error' : '' }}"  placeholder="Type Sample work Category" name="cat_name">
                                          </div>

                                          <div class="form-group">
                                              <label>Sample Image</label>
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
                                              <labela>work link</label>
                                              <input type="text" class="form-control {{ $errors->has('link') ? 'parsley-error' : '' }}"  placeholder="Type Sample work link" name="link">
                                          </div>

                                          <div class="form-group">
                                            <label class="col-sm-2 col-form-label">Status</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="status">
                                                    <option class="form-control" value="1">Pulish</option>
                                                    <option class="form-control" value="0">Unpublish</option>
                                                </select>
                                            </div>
                                        </div>

                                          <div class="form-group">
                                            <div class="form-group">
                                              <div>
                                                  <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                      Add Sample work
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
