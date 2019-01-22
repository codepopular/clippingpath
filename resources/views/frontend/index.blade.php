@extends('layouts.frontend')
@section('contents')
<section id="banner">
    <div id="banner-slide">
      @foreach($slider as $getslider)
        <div class="banner-item">
            <img src="{{asset('public/contents/uploads/slider')}}/{{$getslider->photo}}" class="img-fluid w-100" alt="slider">
        </div>
      @endforeach

    </div>
</section>

<section id="what_we_do">
    <div class="container pl-sm-0">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2><span>expert our</span>What we can do</h2>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 p5 text-center">
                <div class="direction">
                    <img src="{{asset('public/contents/frontend')}}/images/l-icon-1.png" class="img-fluid" alt="">
                    <img src="{{asset('public/contents/frontend')}}/images/l-icon-1-h.png" class="img-fluid after" alt="">
                    <h4>Need FTP Account?</h4>
                    <p>Big size, large quantity image transfer</p>
                    <a class="btn-linked" href="#" data-toggle="modal-s-bad" data-target=".bd-example-modal-lg" class="btn-linked" href="#">Video Instruction</a>
                    <!-- Large modal -->
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Need FTP Account</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <!--<div class="modal-body">-->
                          <!--  <iframe width="100%" height="450" src="https://www.youtube.com/embed/_jBmo3GAVV4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                          <!--</div>-->

                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 p5 text-center">
                <div class="direction">
                    <img src="{{asset('public/contents/frontend')}}/images/l-icon-2.png" class="img-fluid" alt="">
                    <img src="{{asset('public/contents/frontend')}}/images/l-icon-2-h.png" class="img-fluid after" alt="">
                    <h4>100% Satisfaction</h4>
                    <p>Reasonable price guaranteed. <span>Try Our Service Today</span></p>
                    <a class="btn-linked" href="#">Place an Order</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 p5 text-center">
                <div class="direction">
                    <img src="{{asset('public/contents/frontend')}}/images/l-icon-3.png" class="img-fluid" alt="">
                    <img src="{{asset('public/contents/frontend')}}/images/l-icon-3-h.png" class="img-fluid after" alt="">
                    <h4>Web Upload Account?</h4>
                    <p>Any size any quantity image transfer</p>
                    <a class="btn-linked" href="#" data-toggle="modal-s-bad" data-target=".bd-example-modal-lg-two">Video Instruction</a>
                    <div class="modal fade bd-example-modal-lg-two" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitleTwo">Web Upload Account</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <!--<div class="modal-body">-->
                          <!--  <iframe width="100%" height="450" src="https://www.youtube.com/embed/XH23-_ZPCqc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                          <!--</div>-->
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 p5 text-center">
                <div class="direction">
                    <img src="{{asset('public/contents/frontend')}}/images/l-icon-4.png" class="img-fluid" alt="">
                    <img src="{{asset('public/contents/frontend')}}/images/l-icon-4-h.png" class="img-fluid after" alt="">
                    <h4>Requirements</h4>
                    <p>Big size, large quantity image transfer</p>
                    <a class="btn-linked" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 pl-0 order-1 order-md-1 order-sm-1 order-lg-0 mpr0">
                <div class="row mmr0">
                    <div class="col-12 strength-md">
                        <h2><span>expert our</span>Our Strength</h2>
                    </div>
                    <div class="col-12 strength mp0">
                        <ul>
                            <li>
                                <div class="text">
                                    <i class="flaticon-business"></i>
                                    <h5>75+ Skilled</h5>
                                    <span>Graphic Designers</span>
                                </div>
                            </li>
                            <li>
                                <div class="text">
                                    <i class="flaticon-support"></i>
                                    <h5>24/7-365</h5>
                                    <span>Client Support</span>
                                </div>
                            </li>
                            <li>
                                <div class="text">
                                    <i class="flaticon-professional-profile-with-image"></i>
                                    <h5>20+ Professional</h5>
                                    <span>Quality Controller</span>
                                </div>
                            </li>
                            <li>
                                <div class="text">
                                    <i class="flaticon-photo"></i>
                                    <h5>3000+ Image</h5>
                                    <span>Processing Per Day</span>
                                </div>
                            </li>
                            <li>
                                <div class="text">
                                    <i class="flaticon-speedometer"></i>
                                    <h5>High Speed</h5>
                                    <span>Internet Connection</span>
                                </div>
                            </li>
                            <li>
                                <div class="text">
                                    <i class="flaticon-transport"></i>
                                    <h5>Three Shifts</h5>
                                    <span>Duty Plan</span>
                                </div>
                            </li>
                            <li>
                                <div class="text">
                                    <i class="flaticon-send-mail"></i>
                                    <h5>Quick Time</h5>
                                    <span>Delivery Turnaround</span>
                                </div>
                            </li>
                            <li>
                                <div class="text">
                                    <i class="flaticon-guarantee"></i>
                                    <h5>Guarantee</h5>
                                    <span>Your Satisfaction</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 pr-0 order-0 order-sm-0 order-md-0 order-lg-1 pl0 spl mp0 m-about">
                <h2><span>expert our</span>About Clipping path</h2>
                <p>We have and still serve many small and medium-sized companies and corporations in North America and Europe by supporting large-scale image editing and graphic design needs. We provide and are capable of providing large-scale support. </p>
                <h3>Online Photo Editor & Restoration Services</h3>
                <p>We are based on Dhaka, Bangladesh (GMT +6). Bangladesh is one of the best destinations for the low-cost graphic designer at a fraction of the normal cost. Therefore, we can provide you the rock bottom price for large-scale B2B support without compromising the quality of life the people in Bangladesh.   </p>
                <a class="btn-linked" href="{{$buttonlink->about_more}}">Read More <i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</section>

<section id="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2><span>expert our</span>Our Services</h2>
            </div>
            <div class="col-12">
                <div class="row">
                  @foreach($service as $getservice)
                    <div class="col-lg-3 col-md-4 text-center p-0">
                        <div class="service-item">
                            <div class="twentytwenty-container">
                                 <img src="{{asset('public/contents/uploads/service')}}/{{$getservice->photo}}" class="img-fluid" alt="After1">
                                 <img src="{{asset('public/contents/uploads/service')}}/{{$getservice->photo1}}" class="img-fluid" alt="Before">
                            </div>
                            <a href="{{ route('single_service',$getservice->slug) }}"><div class="service-content">
                                <h3>  {{ str_limit($getservice->title, 52,'') }}</h3>
                                <span class="btn-linked">Read More</span>
                            </div></a>
                        </div>
                    </div>
                  @endforeach

                </div>
            </div>
            <div class="col-12 more-project text-center">
                <a class="btn-linked" href="{{$buttonlink->service_more}}">More Project <i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</section>

<section id="why-chose-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 pl0">
                <div class="row">
                    <div class="col-lg-12">
                        <h2><span>expert our</span>why choose us</h2>
                    </div>
                    <div class="col-12">
                        <div id="accordion">
                          <div class="card">
                            <div class="card-header active" id="headingOne">
                              <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  <span class="flaticon-frame-landscape"></span>Quality & Commitment
                                </button>
                              </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                              <div class="card-body">
                                <p>Your satisfaction is our highest priority. we have an hard-line commitment to producing your most quality work and services, whereas meeting the best level of moral standards and performance in our jobs.</p>
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingTwo">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 <span class="flaticon-retouch-1"></span>Best Price & Excellent Service
                                </button>
                              </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                              <div class="card-body">
                                <p>Clipping Path Aid offers you the right value that you just need. We assure you may get the foremost competitive value at an economic rate with utmost quality that you would like. for selecting the most effective possibility simply undergo our value menu, inform North American country and be our valued prospects.</p>
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingThree">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  <span class="flaticon-help"></span>Fast Delivery Guarantee
                                </button>
                              </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                              <div class="card-body">
                                <p>We are greatly attentive to the very fact that point earns money. briefly schedule or within the time of emergencies, Clipping Path Aid continuously cares regarding it slow span. we'll deliver our service as we have a tendency to commit that’s needless to say.</p>
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingFour">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                  <span class="flaticon-management"></span>Upload Platform
                                </button>
                              </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                              <div class="card-body">
                                <p>Our valued clients enjoy individual FTP accounts that sharing theirfiles become easy either in case of download or upload. We have dedicated server of our own which sole purpose is to provide speedy service securing quality of the given project..</p>
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingFive">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                  <span class="flaticon-cube"></span>24/7 Live Support
                                </button>
                              </h5>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                              <div class="card-body">
                                <p>We are 24/7 active in 365 days that our clients find us any moments at their service. You can knock us any moment because we are always live for you to act at your call. Your satisfaction is our goal and ensure supreme service is our business policy.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 offset-lg-1 sm-test">
                <div class="row">
                    <div class="col-lg-12 mp0">
                        <h2><span>expert our</span>Testimonial</h2>
                    </div>
                    <div class="col-lg-12 text-center testimonial p-0">

                        <div class="row mmr0 testimonial-slide">

                          @foreach($testimonial as $getdata)
                            <div class="col-12">
                                <i class="fa fa-quote-right"></i>
                                <p>{{$getdata->des}}</p>
                                <img src="{{asset('public/contents/uploads/testimonial')}}/{{$getdata->photo}}" class="img-fluid" alt="">
                                <h4>{{$getdata->name}}</h4>
                                <span>{{$getdata->designation}}</span>
                            </div>
                          @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="pricing-table">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2><span>expert our</span>Pricing table</h2>
            </div>

            <div class="col-lg-12">
                <div id="priceaccordion">
                  <div class="card">
                    <div class="card-header active" id="priceheadingSix">
                      <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#pricecollapseOne" aria-expanded="true" aria-controls="pricecollapseOne">
                          Clipping Path Service
                        </button>
                      </h5>
                    </div>

                    <div id="pricecollapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#priceaccordion">
                      <div class="card-body">
                        <div class="row">
                            <div class="col-12 price-name">
                                <div class="row">
                                    <div class="col-sm-8 d-none d-sm-block">
                                        <p>Service Name</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p>Starting Price</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 bg-lights">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p>Basic Clipping Path</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p>$0.39</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 bg-darks">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p>Simple Clipping Path</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p>$0.89</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 bg-lights">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p>Compound Clipping Path</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p>$2.50</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 bg-darks">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p>Complex Clipping Path</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p>$3.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 bg-lights">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p>Multi Clipping Path</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p>$5.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 bg-darks">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p>Super Complex Clipping Path</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p>$7.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="priceheadingTwo">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#pricecollapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                         Clipping Path with Shadow
                        </button>
                      </h5>
                    </div>
                    <div id="pricecollapseTwo" class="collapse" aria-labelledby="priceheadingTwo" data-parent="#priceaccordion">
                      <div class="card-body">
                        <div class="row">
                            <div class="col-12 price-name">
                                <div class="row">
                                    <div class="col-sm-8 d-none d-sm-block">
                                        <p>Service Name</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p>Starting Price</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 bg-lights">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p>Original Shadow / Natural Shadow</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p>$1.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 bg-darks">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p>Reflection Shadow</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p>$1.49</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 bg-lights">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p>Drop Shadow</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p>$1.79</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="priceheadingThree">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#pricecollapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Masking
                        </button>
                      </h5>
                    </div>
                    <div id="pricecollapseThree" class="collapse" aria-labelledby="priceheadingThree" data-parent="#priceaccordion">
                      <div class="card-body">
                        <div class="row">
                            <div class="col-12 price-name">
                                <div class="row">
                                    <div class="col-sm-8 d-none d-sm-block">
                                        <p>Service Name</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p>Starting Price</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 bg-lights">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p>Hair Masking</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p>$3.50</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 bg-darks">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p>Transparent Masking</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p>$2.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="priceheadingFour">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#pricecollapseFour" aria-expanded="false" aria-controls="collapseFour">
                          Color Correction
                        </button>
                      </h5>
                    </div>
                    <div id="pricecollapseFour" class="collapse" aria-labelledby="priceheadingFour" data-parent="#priceaccordion">
                      <div class="card-body">
                        <div class="row">
                            <div class="col-12 price-name">
                                <div class="row">
                                    <div class="col-sm-8 d-none d-sm-block">
                                        <p>Service Name</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p>Starting Price</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 bg-lights">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p>Color Correction</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p>$2.99</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="priceheadingFive">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#pricecollapseFive" aria-expanded="false" aria-controls="pricecollapseFive">
                          Raster to Vector
                        </button>
                      </h5>
                    </div>
                    <div id="pricecollapseFive" class="collapse" aria-labelledby="priceheadingFive" data-parent="#priceaccordion">
                      <div class="card-body">
                        <div class="row">
                            <div class="col-12 price-name">
                                <div class="row">
                                    <div class="col-sm-8 d-none d-sm-block">
                                        <p>Service Name</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p>Starting Price</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 bg-lights">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p>Raster to Vector</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p>$9.99</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="priceheadingSix">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#pricecollapseSix" aria-expanded="false" aria-controls="pricecollapseSix">
                          Graphics Design
                        </button>
                      </h5>
                    </div>
                    <div id="pricecollapseSix" class="collapse" aria-labelledby="priceheadingSix" data-parent="#priceaccordion">
                      <div class="card-body">
                        <div class="row">
                            <div class="col-12 price-name">
                                <div class="row">
                                    <div class="col-sm-8 d-none d-sm-block">
                                        <p>Service Name</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p>Starting Price</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 bg-lights">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p>Simple Graphics Design</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p>$60.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>


            <div class="col-12 text-center price-request">
                <p>The above prices are for clipping path service only. If you need any other service
please request a quote.</p>
               <a class="btn-linked" href="{{$buttonlink->get_quote}}">Get a quote</a>
            </div>
        </div>
    </div>
</section>

<section id="video-part">
    <div class="video-overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>We take our task with high priority and,<br>ensure of the project or its costs.</h3>
                    <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://youtu.be/GnQzI9CRiKI">
                        <i class="fa fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="sample-project">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center s-t-head">
                <h2><span>expert our</span>Samples Projects</h2>
                <p>Browse our recent projects with all of our services</p>
            </div>
            <div class="col-12 p-0">
                <div class="row mmr0">
                    <div class="col-12">
                        <div class="row">
                          @foreach($sample as $getsample)
                            <div class="col-lg-4 col-md-6 col-sm-6 text-center">
                               <div class="sample">
                                    <img src="{{asset('public/contents/uploads/sample')}}/{{$getsample->photo}}" class="img-fluid" alt="">
                                    <div class="sample-overlay">
                                        <div class="sample-text">
                                            <h4>{{$getsample->title}}</h4>
                                            <p>{{$getsample->cat_name}}</p>
                                            <a href="{{$getsample->link}}" target="_blank"><i class="fa fa-link"></i></a>
                                           <a class="venobox" data-gall="gallery01" target="_blank" href="{{asset('public/contents/uploads/sample')}}/{{$getsample->photo}}">
                                               <i class="fa fa-search-plus"></i>
                                           </a>
                                        </div>
                                    </div>
                               </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center more-sample">
                <a class="btn-linked" href="{{$buttonlink->simple_project_more}}">More PROJECTS <i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</section>

<section id="working-process">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-0">
               <h2>We Follow a Working Process</h2>
                <img src="{{asset('public/contents/frontend')}}/images/working-process.jpg" class="img-fluid w-100" alt="">
            </div>
        </div>
    </div>
</section>

<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2><span>expert our</span>clipping path blog</h2>
            </div>
            <div class="col-12">
                <div class="row blog-slide">
                  @foreach($blog as $getblog)
                    <div class="col-6 blog-text">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 p-0">
                                <img src="{{asset('public/contents/uploads/blog')}}/{{$getblog->photo}}" class="img-fluid" alt="post-1">
                            </div>
                            <div class="col-lg-6 col-md-12 post">
                                <h5>{{$getblog->created_at->format('M-Y-d')}}</h5>
                                <h3>{{$getblog->title}}</h3>
                                <em>by Admin</em>
                                <?php $data=strip_tags($getblog->des);?>
                                  <p>{{ str_limit($data,150,'..') }}</p>
                                <a href="{{ route('blog_single',$getblog->slug) }}" tabindex="0"> Read more</a>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</section>

<section id="partners">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
            <?php  $partners=DB::table('customers')->get(); ?>
                <ul class="partner-slide">
                  @foreach($partners as $parner)
                    <li><a href="{{$parner->link}}" target="{{$parner->link ? '__' : ''}}"><img src="{{asset('public/contents/uploads/customer')}}/{{$parner->photo}}" class="img-fluid" alt=""></a></li>
                  @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- time area -->
<section id="time_zone" class="hidden-xs">
    <div class="container">
       <div class="row">
           <div class="col-md-3 text-center">
               <div id="clock_hou"></div>
           </div>
           <div class="col-md-3 text-center">
               <div id="clock_india"></div>
           </div>
           <div class="col-md-3 text-center">
               <div id="clock_korea"></div>
           </div>
           <div class="col-md-3 text-center">
               <div id="clock_uk"></div>
           </div>
       </div>
    </div>
</section>
<!-- time area -->



@endsection
