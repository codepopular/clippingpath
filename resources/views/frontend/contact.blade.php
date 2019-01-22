
@extends('layouts.frontend')
@section('contents')

    <section id="inner-banner" style="background: url({{asset('public/contents/frontend/')}}/images/breadcum/Contact_us.jpg) no-repeat center; background-size: cover;">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 p-0">
                        <h1>Contact Us</h1>
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
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Contact Us</h2>
                    <p>You can contact us at any given time with queries or concerns. We are here to help you 24/7 and 365 days of the year. No matter what the nature of your concern is, your satisfaction is our ultimate concern.</p>
                </div>
                <div class="col-12 address">
                    <div class="row">
                        <div class="col-lg-4">
                            <h3>Dhaka Office</h3>
                            <p>Gorilla Home(2nd Floor),Gulshan Avenue,<br>
                            Gulshan-1,Dhaka-1212, Bangladesh<br>
                            Phone: +880160414552</p>
                            <h3>USA Office</h3>
                            <p>152 West, 36 St (5FL) <br>
  									New York, NY-10018. USA <br>
  									Ph: +1 347 221 8682</p>
                            <h3>UK Office</h3>
                            <p>5th Floor, Zone-A, New Broadcasting House<br>
  						             		Portland Place<br>
  									         London W1A 1AA United Kingdom.
  									         <br>Ph:+1 (718) 416-5730  </p>
                        </div>
                        <div class="col-lg-8 form_part">
                          @if (Session('status'))
                          <script type="text/javascript">
                          swal(
                              ' Send Successfully!',
                              'We will get back to you soon',
                              'success'
                            )
                          </script>
                          @endif
                          @if (Session('error'))
                          <script type="text/javascript">
                          swal(
                              'Sorry Please Try Agin',
                              'mabe you are doing mistake somewhere',
                              'error'
                            )
                          </script>
                          @endif
                            <form action="{{route('customermail')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Name" id="" name="name" class="contact-fields {{ $errors->has('name') ? 'error_clipping' : '' }}" value="{{old('name')}}">
                                        @if ($errors->has('name'))
                                        <ul class="parsley-errors-list filled" id="parsley-id-17">
                                          <li class="parsley-required">{{ $errors->first('name') }}</li>
                                        </ul>
                                        @endif
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" placeholder="Email" id="" name="email" class="contact-fields {{ $errors->has('email') ? 'error_clipping' : '' }}" value="{{old('email')}}">
                                        @if ($errors->has('email'))
                                        <ul class="parsley-errors-list filled" id="parsley-id-17">
                                          <li class="parsley-required">{{ $errors->first('email') }}</li>
                                        </ul>
                                        @endif
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" placeholder="Subject" id="" name="subject" class="contact-fields {{ $errors->has('subject') ? 'error_clipping' : '' }}" value="{{old('subject')}}">
                                        @if ($errors->has('subject'))
                                        <ul class="parsley-errors-list filled" id="parsley-id-17">
                                          <li class="parsley-required">{{ $errors->first('subject') }}</li>
                                        </ul>
                                        @endif
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea name="message" placeholder="Message" class="contact-fields {{ $errors->has('message') ? 'error_clipping' : '' }}">{{old('message')}}</textarea>
                                        @if ($errors->has('message'))
                                        <ul class="parsley-errors-list filled" id="parsley-id-17">
                                          <li class="parsley-required">{{ $errors->first('message') }}</li>
                                        </ul>
                                        @endif
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
                                    <div class="col-lg-12 submit">
                                        <button type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

              <script>
              function myFunction() {
                  location.reload();
              }
              </script>
            </div>
        </div>
    </section>


    <section id="contact-map">
        <iframe src="{{$general->map}}" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

    @endsection
