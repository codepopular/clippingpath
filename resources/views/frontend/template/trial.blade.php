<section class="services" id="free-trial">
    <div class="container">
        <div class="row">
          @if (Session('status'))
          <script type="text/javascript">
          swal(
              ' Send Successfully!',
              'We will get back to you soon',
              'success'
            )
          </script>
          @endif


          <form class="" action="{{route('trial.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-lg-12 trial">
                <div class="row">
                    <div class="col-lg-12 p-0">
                        <div class="row mmr0">
                            <div class="col-12 p-0">
                                <h2>Get a Free Trial Now</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12 p-0">
                                        <h4>NAME<span>*</span></h4>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" class="trial-text {{ $errors->has('name') ? 'error_clipping' : '' }}" name="name" placeholder="Please enter your name" value="{{old('name')}}">
                                        @if ($errors->has('name'))
                                        <ul class="parsley-errors-list filled" id="parsley-id-17">
                                          <li class="parsley-required">{{ $errors->first('name') }}</li>
                                        </ul>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right right-field">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12 p-0">
                                        <h4>E-MAIL<span>*</span></h4>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="email" class="trial-text {{ $errors->has('email') ? 'error_clipping' : '' }}" name="email" placeholder="Please enter your email" value="{{old('email')}}">
                                          @if ($errors->has('email'))
                                          <ul class="parsley-errors-list filled" id="parsley-id-17">
                                            <li class="parsley-required">{{ $errors->first('email') }}</li>
                                          </ul>
                                          @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 message">
                        <h4>JOB DESCRIPTION<span>*</span></h4>
                        <textarea class="trial-text {{ $errors->has('des') ? 'error_clipping' : '' }}"  placeholder="Please enter job Description" name="des">{{old('des')}}</textarea>
                        @if ($errors->has('des'))
                        <ul class="parsley-errors-list filled" id="parsley-id-17">
                          <li class="parsley-required">{{ $errors->first('des') }}</li>
                        </ul>
                        @endif
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12 p-0">
                                        <h4>UPLOAD FILE<span>*</span></h4>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="file" class="{{ $errors->has('des') ? 'error_clipping' : '' }}" name="photo">
                                        @if ($errors->has('photo'))
                                        <ul class="parsley-errors-list filled" id="parsley-id-17">
                                          <li class="parsley-required">{{ $errors->first('photo') }}</li>
                                        </ul>
                                        @endif
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="file" class="" name="photo1">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="file" class="" name="photo2">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 form-group" style="margin:10px 0px">
                              <div class="captcha">
                                <span>{!! captcha_img('flat') !!}</span>
                                <a href="#" class="btn btn-success" onclick="myFunction()"><i class="fa fa-refresh" id="refresh" ></i></a>
                                </div>
                            </div>

                              <div class="form-group col-md-4">
                               <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                                 @if ($errors->has('captcha'))
                                 <ul class="parsley-errors-list filled" id="parsley-id-17">
                                   <li class="parsley-required">{{ $errors->first('captcha') }}</li>
                                 </ul>
                                 @endif
                             </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12  submit p-0">
                <label><input type="checkbox">I agree to the terms & conditions</label>
                <button type="submit">Submit</button>
            </div>
            </form>

        </div>
    </div>
</section>
