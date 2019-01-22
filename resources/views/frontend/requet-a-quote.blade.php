@extends('layouts.frontend')
@section('contents')
<section id="inner-banner" style="background: url({{asset('public/contents/frontend/')}}/images/breadcum/quote.jpg) no-repeat center; background-size: cover;">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-12 p-0">
                    <h1>Pricing</h1>
                </div>
            </div>
        </div>
    </div>
</section>
    <section id="breadcumb">
        <div class="container">
            <div class="row">
                <div class="col-12 p-0">
                    <ul>
                        <li><a href="{{route('index')}}"><i class="fa fa-home"></i>Home</a></li>
                        <li><i class="fa fa-chevron-right"></i><li>
                        <li><a href="#">request-a-quote</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @if (Session('status'))
    <script type="text/javascript">
    swal(
        'Send Successfully!',
        'We will get back to you soon',
        'success'
      )
    </script>
    @endif
    <section id="request-a-quote">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <h2>Request A Quote</h2>
                    <p>Please read the form and fill up the form which is given below to send us your free trial. Delivery of your image will take minimum 12 hours and depending upon the complexity of your received image. Here you can upload your trial images directly. Please fill up the form and type instructions here. The accepted file formats are: JPEG,TIF, PNG, BMP etc.</p>
                </div>
                <form class="" action="{{route('quote.store')}}" method="post" enctype="multipart/form-data">
                  @csrf

                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-12 quote-bg text-center p-0">
                            <div class="overlay">
                                <h5>Fields marked with [<span>*</span>] are required</h5>
                            </div>
                        </div>
                        <div class="col-lg-12 requirement">
                            <div class="row">
                                <div class="col-lg-12 p-0">
                                    <h3><span>1</span>Job requirements</h3>
                                </div>
                                <div class="col-lg-12 job-type">
                                    <div class="row">
                                       <div class="col-lg-2 p0 spl mp0">
                                            <h4>JOB TYPE<span>*</span></h4>
                                        </div>
                                    <div class="col-lg-3 col-md-4 col-sm-4 job mp0">
                                        <label class="check-box">Clipping Path
                                          <input type="checkbox" value="Clipping Path" name="service_type[]">
                                          <span class="checkmark"></span>
                                        </label>
                                        <label class="check-box">Image Masking
                                          <input type="checkbox" value="Image Masking" name="service_type[]">
                                          <span class="checkmark"></span>
                                        </label>
                                        <label class="check-box">Image Retouching
                                          <input type="checkbox" value="Image Retouching" name="service_type[]">
                                          <span class="checkmark"></span>
                                        </label>
                                        <label class="check-box">Shadow Creation
                                          <input type="checkbox" value="Shadow Creation" name="service_type[]">
                                          <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-4 job mp0">
                                       <label class="check-box">Photo Editing
                                          <input type="checkbox" value="Photo Editing" name="service_type[]">
                                          <span class="checkmark"></span>
                                        </label>
                                       <label class="check-box">Vehicles Enhancement
                                          <input type="checkbox" value="Vehicles Enhancement" name="service_type[]">
                                          <span class="checkmark"></span>
                                        </label>
                                       <label class="check-box">Image Manipulation
                                          <input type="checkbox" value="Image Manipulation" name="service_type[]">
                                          <span class="checkmark"></span>
                                        </label>
                                       <label class="check-box">Color Adjustments
                                          <input type="checkbox" value="Color Adjustments" name="service_type[]">
                                          <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-4 job mp0">
                                       <label class="check-box">Mirroe Effects
                                          <input type="checkbox" value="Mirroe Effects" name="service_type[]">
                                          <span class="checkmark"></span>
                                        </label>
                                       <label class="check-box">Exposure Correction
                                          <input type="checkbox" value="Exposure Correction" name="service_type[]">
                                          <span class="checkmark"></span>
                                        </label>
                                       <label class="check-box">Raster To Vector
                                          <input type="checkbox" value="Raster To Vector" name="service_type[]">
                                          <span class="checkmark"></span>
                                        </label>
                                       <label class="check-box">Advertisement
                                          <input type="checkbox" value="Advertisement" name="service_type[]">
                                          <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-2 p0 spl mp0">

                                     </div>
                                        <div class="col-lg-3 col-md-4 col-sm-4 job mp0">
                                    @if ($errors->has('service_type'))
                                    <ul class="parsley-errors-list filled" id="parsley-id-17">
                                      <li class="parsley-required">{{ $errors->first('service_type') }}</li>
                                    </ul>
                                    @endif
                                      </div>
                                    </div>
                                </div>
                                <div class="col-12 trial request-trial">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 job-field mp0">
                                            <div class="row">
                                                <div class="col-lg-4 p-0 mp0">
                                                    <h4>TURNAROUND<span>*</span></h4>
                                                </div>
                                                <div class="col-lg-8 mp0">
                                                    <select class="trial-text" name="turnaround">
                                                        <option value="">Select Turnaround</option>
                                                        <option value="1Hour-3Hour" {{ (old("turnaround") == '1Hour-3Hour' ? "selected":"") }}>1Hour - 3Hour</option>
                                                        <option value="3Hour-6Hour" {{ (old("turnaround") == '3Hour-6Hour' ? "selected":"") }}>3Hour - 6Hour</option>
                                                        <option value="6Hour-12Hour" {{ (old("turnaround") == '6Hour-12Hour' ? "selected":"") }}>6Hour - 12Hour</option>
                                                        <option value="12Hour-24Hour" {{ (old("turnaround") == '12Hour-24Hour' ? "selected":"") }}>12Hour - 24Hour</option>
                                                    </select>
                                                    @if ($errors->has('turnaround'))
                                                    <ul class="parsley-errors-list filled" id="parsley-id-17">
                                                      <li class="parsley-required">{{ $errors->first('turnaround') }}</li>
                                                    </ul>
                                                    @endif
                                                </div>


                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 job-field mp0">
                                            <div class="row">
                                                <div class="col-lg-4 p-0">
                                                    <h4>NEED PATH<span>*</span></h4>
                                                </div>
                                                <div class="col-lg-8 mp0">
                                                    <select class="trial-text" name="need_path">
                                                        <option value="">Select Service</option>
                                                        <?php $path=DB::table('services')->get();?>
                                                        @foreach($path as $service_name)
                                                        <option value="{{$service_name->name}}" {{ (old("need_path") == $service_name->name ? "selected":"") }}>{{$service_name->name}}</option>
                                                        @endforeach
                                                    </select>
                                                      @if ($errors->has('need_path'))
                                                      <ul class="parsley-errors-list filled" id="parsley-id-17">
                                                        <li class="parsley-required">{{ $errors->first('need_path') }}</li>
                                                      </ul>
                                                      @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 job-field mp0">
                                            <div class="row">
                                                <div class="col-lg-4 p-0">
                                                    <h4>QUANTITY<span>*</span></h4>
                                                </div>
                                                <div class="col-lg-8 mp0">
                                                    <select class="trial-text" name="qty">
                                                        <option value="">Select Quantity</option>
                                                        <option value="1-20" {{ (old("qty") == '1-20' ? "selected":"") }}>1-20</option>
                                                        <option value="20-50" {{ (old("qty") == '20-50' ? "selected":"") }}>20-50</option>
                                                        <option value="50-100" {{ (old("qty") == '50-100' ? "selected":"") }}>50-100</option>
                                                        <option value="100-200" {{ (old("qty") == '100-200' ? "selected":"") }}>100-200</option>
                                                        <option value="200-500" {{ (old("qty") == '200-500' ? "selected":"") }}>200-500</option>
                                                        <option value="500-100" {{ (old("qty") == '500-100' ? "selected":"") }}>500-1000</option>
                                                    </select>
                                                    @if ($errors->has('qty'))
                                                    <ul class="parsley-errors-list filled" id="parsley-id-17">
                                                      <li class="parsley-required">{{ $errors->first('qty') }}</li>
                                                    </ul>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 job-field mp0">
                                            <div class="row">
                                                <div class="col-lg-4 p-0">
                                                    <h4>HOW FOUND US <span>*</span></h4>
                                                </div>
                                                <div class="col-lg-8 mp0">
                                                    <select class="trial-text" name="find_us">
                                                        <option value="">Select Media</option>
                                                        <option value="Facebook" {{ (old("find_us") == 'Facebook' ? "selected":"") }}>Facebook</option>
                                                        <option value="Twitter" {{ (old("find_us") == 'Twitter' ? "selected":"") }}>Twitter</option>
                                                        <option value="Search Engine" {{ (old("find_us") == 'Search Engine' ? "selected":"") }}>Search Engine</option>
                                                        <option value="Forum" {{ (old("find_us") == 'Forum' ? "selected":"") }}>Forum</option>
                                                        <option value="Linkedin" {{ (old("find_us") == 'Linkedin' ? "selected":"") }}>Linkedin</option>
                                                        <option value="Others" {{ (old("find_us") == 'Others' ? "selected":"") }}>Others</option>
                                                    </select>
                                                    @if ($errors->has('find_us'))
                                                    <ul class="parsley-errors-list filled" id="parsley-id-17">
                                                      <li class="parsley-required">{{ $errors->first('find_us') }}</li>
                                                    </ul>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 job-field p-0">
                                            <div class="row">
                                                <div class="col-lg-12 mp0">
                                                    <h4>JOB DESCRIPTION<span>*</span></h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-10 job-field message mp0 ">
                                            <div class="row">
                                                <div class="col-lg-12 mp0">
                                                    <textarea class="trial-text" placeholder="Please enter job Description" name="des">{{old('des')}}</textarea>
                                                    @if ($errors->has('des'))
                                                    <ul class="parsley-errors-list filled" id="parsley-id-17">
                                                      <li class="parsley-required">{{ $errors->first('des') }}</li>
                                                    </ul>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-12 requirement-two requirement trial">
                                    <div class="row">
                                        <div class="col-lg-12 p-0">
                                            <div class="row sm0">
                                                <div class="col-12 p-0 seconds">
                                                    <h3 class="d-none d-sm-block"><span>2</span>CONTACT DETAILS & UPLOAD FILES</h3>
                                                    <h3 class="d-sm-none"><span>2</span>CONTACT & UPLOAD FILES</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 request-right mp0">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-6 col-sm-6">
                                                    <div class="row">
                                                        <div class="col-lg-3 p-0">
                                                            <h4>NAME<span>*</span></h4>
                                                        </div>
                                                        <div class="col-lg-9 mp0">
                                                            <input type="text" class="trial-text" name="name" value="{{old('name')}}">
                                                            @if ($errors->has('name'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-17">
                                                              <li class="parsley-required">{{ $errors->first('name') }}</li>
                                                            </ul>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-6 col-sm-6">
                                                    <div class="row">
                                                        <div class="col-lg-3 p-0">
                                                            <h4>ADDRESS<span>*</span></h4>
                                                        </div>
                                                        <div class="col-lg-9 mp0">
                                                            <input type="text" class="trial-text" name="address" value="{{old('address')}}">
                                                            @if ($errors->has('address'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-17">
                                                              <li class="parsley-required">{{ $errors->first('address') }}</li>
                                                            </ul>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-6 col-sm-6">
                                                    <div class="row">
                                                        <div class="col-lg-3 p-0">
                                                            <h4>E-MAIL<span>*</span></h4>
                                                        </div>
                                                        <div class="col-lg-9 mp0">
                                                            <input type="email" class="trial-text" name="email" value="{{old('email')}}">
                                                            @if ($errors->has('email'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-17">
                                                              <li class="parsley-required">{{ $errors->first('email') }}</li>
                                                            </ul>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-6 col-sm-6">
                                                    <div class="row">
                                                        <div class="col-lg-3 p-0">
                                                            <h4>Website<span>*</span></h4>
                                                        </div>
                                                        <div class="col-lg-9 mp0">
                                                            <input type="text" class="trial-text" name="website" value="{{old('website')}}">
                                                            @if ($errors->has('website'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-17">
                                                              <li class="parsley-required">{{ $errors->first('website') }}</li>
                                                            </ul>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 text-right right-field request-right mp0">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-6 col-sm-6">
                                                    <div class="row">
                                                        <div class="col-lg-3 p-0">
                                                            <h4>COMPANY NAME<span>*</span></h4>
                                                        </div>
                                                        <div class="col-lg-9 mp0">
                                                            <input type="text" class="trial-text" name="company" value="{{old('company')}}">
                                                            @if ($errors->has('company'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-17">
                                                              <li class="parsley-required">{{ $errors->first('company') }}</li>
                                                            </ul>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-6 col-sm-6">
                                                    <div class="row">
                                                        <div class="col-lg-3 p-0">
                                                            <h4>PHONE<span>*</span></h4>
                                                        </div>
                                                        <div class="col-lg-9 mp0">
                                                            <input type="number" class="trial-text" name="phone" value="{{old('phone')}}">
                                                            @if ($errors->has('phone'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-17">
                                                              <li class="parsley-required">{{ $errors->first('phone') }}</li>
                                                            </ul>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-6 col-sm-6">
                                                    <div class="row">
                                                        <div class="col-lg-3 p-0">
                                                            <h4>COUNTRY<span>*</span></h4>
                                                        </div>
                                                        <div class="col-lg-9 mp0">
                                                              <input type="text" class="trial-text" name="country" value="{{old('country')}}">
                                                              @if ($errors->has('country'))
                                                              <ul class="parsley-errors-list filled" id="parsley-id-17">
                                                                <li class="parsley-required">{{ $errors->first('country') }}</li>
                                                              </ul>
                                                              @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-6 col-sm-6">
                                                    <div class="row">
                                                        <div class="col-lg-3 p-0">
                                                            <h4>CURRENCY<span>*</span></h4>
                                                        </div>
                                                        <div class="col-lg-9 mp0">
                                                            <select class="trial-text" name="currency">
                                                                <option value="">Select Currency</option>
                                                                <option value="USD" {{ (old("currency") == 'USD' ? "selected":"") }}>$USD</option>
                                                                <option value="EURO" {{ (old("currency") == 'EURO' ? "selected":"") }}>Euro</option>
                                                                <option value="GBP" {{ (old("currency") == 'GBP' ? "selected":"") }}>GBP</option>
                                                                <option value="OTHER" {{ (old("currency") == 'OTHER' ? "selected":"") }}>Other</option>
                                                            </select>
                                                            @if ($errors->has('currency'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-17">
                                                              <li class="parsley-required">{{ $errors->first('currency') }}</li>
                                                            </ul>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mp0">
                                            <div class="row">
                                                <div class="col-lg-12 upload-file">
                                                    <div class="row">
                                                        <div class="col-lg-3 p-0">
                                                            <h4>UPLOAD FILE<span>*</span></h4>
                                                        </div>
                                                        <div class="col-lg-9 mp0">
                                                            <input type="file" class="" name="photo">
                                                            @if ($errors->has('photo'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-17">
                                                              <li class="parsley-required">{{ $errors->first('photo') }}</li>
                                                            </ul>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 captcha">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 p-0">
                                                            <h4>CAPTCHA<span>*</span></h4>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-8 mp0">
                                                              <div class="captcha">
                                                                <span>{!! captcha_img('flat') !!}</span>
                                                                <a href="#" class="btn btn-success" onclick="myFunction()"><i class="fa fa-refresh" id="refresh" ></i></a>
                                                                </div>
                                                                <br>
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
                                    </div>
                                </div>
                                <div class="col-12 submit p-0">
                                    <label><input type="checkbox">I agree to the terms & conditions</label>
                                    <button type="submit">Submit</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </section>

    <section id="free-trial">

    </section>
@endsection
