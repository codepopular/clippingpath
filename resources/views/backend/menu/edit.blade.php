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
                                     <a href="{{route('menu.index')}}" class="btn btn-info text-center">All Menu</a>
                                   </div>
                                       @if (Session('status'))
                                               <div class="alert alert-success text-center">
                                                <strong>Menu Updated Successfully</strong>
                                              </div>
                                          @endif
                                      <form action="{{route('menu.update',$edit->id)}}" method="post">
                                       @method('PUT')
                                        @csrf
                                        <div class="form-group">
                                            <label>Menu Title</label>
                                            <input type="text" class="form-control {{ $errors->has('title') ? 'parsley-error' : '' }}"  value="{{$edit->title}}" name="title">
                                            @if ($errors->has('title'))
                                              <ul class="parsley-errors-list filled" id="parsley-id-17">
                                              <li class="parsley-required">{{ $errors->first('title') }}</li>
                                            </ul>
                                           @endif
                                        </div>
                                        <div class="form-group">
                                            <labela>Menu Url</label>
                                            <input type="text" class="form-control {{ $errors->has('url') ? 'parsley-error' : '' }}"  value="{{$edit->url}}" name="url">
                                            @if ($errors->has('url'))
                                              <ul class="parsley-errors-list filled" id="parsley-id-17">
                                              <li class="parsley-required">{{ $errors->first('url') }}</li>
                                            </ul>
                                           @endif
                                        </div>

                                        <div class="form-group">
                                            <labela>Sirial Number</label>
                                            <input type="number" class="form-control {{ $errors->has('menu_si') ? 'parsley-error' : '' }}"  value="{{$edit->menu_si}}" name="menu_si" disabled>
                                        </div>



                                        <div class="form-group">
                                          <label class="col-sm-2 col-form-label">Display Menu</label>
                                          <div class="col-sm-10">
                                              <select class="form-control" name="menu_dispaly">
                                                  <option class="form-control" value="1">Header</option>
                                                  <option
                                                  @if($edit->menu_dispaly==0)
                                                  selected="selected"
                                                  @endif
                                                   class="form-control" value="0">Footer</option>
                                              </select>
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
                                                    Update Menu
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
