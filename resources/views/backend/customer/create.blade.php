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
                                                <strong>Customer Added Successfully</strong>
                                              </div>
                                          @endif
                                      <form  action="{{route('customer.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                          <div class="form-group">
                                              <label>Name</label>
                                              <input type="text" class="form-control {{ $errors->has('name') ? 'parsley-error' : '' }}"  placeholder="Type customer name" name="title">
                                          </div>

                                          <div class="form-group">
                                              <label>Customer Image</label>
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
                                            <label class="col-sm-2 col-form-label">Customer URL</label>
                                            <div class="col-sm-10">
                                              <input type="url" name="link" class="form-control">
                                            </div>
                                        </div>

                                          <div class="form-group">
                                            <div class="form-group">
                                              <div>
                                                  <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                      Add Customer
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
