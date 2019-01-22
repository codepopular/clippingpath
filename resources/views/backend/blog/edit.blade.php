@extends('layouts.backend')
@section('contents')

   <br>
   <br>
   <br>
   <br>
                <div class="content">
                  <div class="container-fluid">
                    <div class="row justify-content-md-center">
                          <div class="col-lg-12">
                              <div class="card m-b-20">
                                  <div class="card-body">
                                    <div class="text-center">
                                     <a href="{{route('ourblog.index')}}" class="btn btn-info text-center">All Blog</a>
                                   </div>
                                       @if (Session('status'))
                                               <div class="alert alert-success text-center">
                                                <strong>Blog Updated Successfully</strong>
                                              </div>
                                          @endif
                                      <form action="{{route('ourblog.update',$edit->id)}}" method="post" enctype="multipart/form-data">
                                       @method('PUT')
                                        @csrf

                                        <div class="form-group">
                                            <label>Service Title</label>
                                            <input type="text" class="form-control {{ $errors->has('title') ? 'parsley-error' : '' }}"  value="{{$edit->title}}" name="title">
                                        </div>
                                        @if ($errors->has('title'))
                                        <ul class="parsley-errors-list filled" id="parsley-id-17">
                                          <li class="parsley-required">{{ $errors->first('title') }}</li>
                                        </ul>
                                             @endif
                                        <div class="form-group">
                                            <label>Thumbnail Image</label>
                                            <div>
                                                <input type="file" id="pass2" class="form-control {{ $errors->has('photo') ? 'parsley-error' : '' }}" name="photo" value="{{$edit->photo}}">
                                                @if ($errors->has('photo'))
                                                <ul class="parsley-errors-list filled" id="parsley-id-17">
                                                  <li class="parsley-required">{{ $errors->first('photo') }}</li>
                                                </ul>
                                                @endif
                                                <img height="80" width="200" src="{{asset('public/contents/uploads/blog')}}/{{$edit->photo}}" alt="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Preview image</label>
                                            <div>
                                                <input type="file" id="pass2" class="form-control {{ $errors->has('photo') ? 'parsley-error' : '' }}" name="photo1" value="{{$edit->photo1}}">

                                                @if ($errors->has('photo1'))
                                                <ul class="parsley-errors-list filled" id="parsley-id-17">
                                                  <li class="parsley-required">{{ $errors->first('photo1') }}</li>
                                                </ul>
                                                @endif
                                                <img height="80" width="200" src="{{asset('public/contents/uploads/blog')}}/{{$edit->photo1}}" alt="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Blog description</label>
                                             <textarea rows="8" cols="80" id="editor" name="description">{{$edit->des}}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>status</label>
                                             <select class="form-control" name="status" >
                                               <option value="1">Publish</option>

                                               <option
                                                 @if($edit->status==0)
                                                   selected="selected"
                                                 @endif

                                                class="form-control" value="0">Unpublish</option>
                                             </select>
                                        </div>

                                        <div class="form-group">
                                          <div class="form-group">
                                            <div>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                    Update Blog
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
