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
                                                <strong>Menu Added Successfully</strong>
                                              </div>
                                          @endif
                                      <form  action="{{route('menu.store')}}" method="post">
                                        @csrf
                                          <div class="form-group">
                                              <label>Menu Title</label>
                                              <input type="text" class="form-control {{ $errors->has('title') ? 'parsley-error' : '' }}"  placeholder="Enter Menu Title" value="{{old('title')}}" name="title">
                                              @if ($errors->has('title'))
                                                <ul class="parsley-errors-list filled" id="parsley-id-17">
                                                <li class="parsley-required">{{ $errors->first('title') }}</li>
                                              </ul>
                                             @endif
                                          </div>
                                          <div class="form-group">
                                              <labela>Menu Url</label>
                                              <input type="text" class="form-control {{ $errors->has('url') ? 'parsley-error' : '' }}"  placeholder="Type menu url" name="url"  value="{{old('url')}}" >
                                              @if ($errors->has('url'))
                                                <ul class="parsley-errors-list filled" id="parsley-id-17">
                                                <li class="parsley-required">{{ $errors->first('url') }}</li>
                                              </ul>
                                             @endif
                                          </div>

                                          <div class="form-group">
                                              <labela>Sirial Number</label>
                                              <input type="number" class="form-control {{ $errors->has('menu_si') ? 'parsley-error' : '' }}"  value="<?php echo $max+1; ?>" name="menu_si" max="20">
                                              @if ($errors->has('menu_si'))
                                                <ul class="parsley-errors-list filled" id="parsley-id-17">
                                                <li class="parsley-required">{{$errors->first('menu_si')}}</li>
                                              </ul>
                                             @endif
                                          </div>

                                          <div class="form-group">
                                              <labela>Icon</label>
                                              <input type="text" class="form-control {{ $errors->has('icon') ? 'parsley-error' : '' }}" placeholder="flaticon-home-page"  value="{{old('icon')}}" name="icon" >
                                              @if ($errors->has('icon'))
                                                <ul class="parsley-errors-list filled" id="parsley-id-17">
                                                <li class="parsley-required">{{$errors->first('icon')}}</li>
                                              </ul>
                                             @endif
                                             <ul class="parsley-errors-list filled">
                                             <li class="parsley-required"><a href="https://fontawesome.com/v4.7.0/icons/" target="__">icon list</a> </li>
                                           </ul>
                                          </div>



                                          <div class="form-group">
                                            <label class="col-sm-5 col-form-label">Display Menu</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="menu_dispaly">
                                                    <option class="form-control" value="1">Header</option>
                                                    <option class="form-control" value="0">Footer</option>
                                                </select>
                                            </div>
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
                                            <label class="col-sm-5 col-form-label">Enable Dropdown</label>
                                            <div class="col-sm-7">
                                                <input type="checkbox" id="switch5" switch="success" name="dropdown"/>
                                                <label for="switch5" data-on-label="Yes"data-off-label="No"></label>
                                            </div>
                                        </div>
                                          <div class="form-group">
                                            <div class="form-group">
                                              <div>
                                                  <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                      Add Menu
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
