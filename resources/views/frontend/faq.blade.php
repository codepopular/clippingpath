@extends('layouts.frontend')
@section('contents')
<section id="inner-banner" style="background: url({{asset('public/contents/frontend/')}}/images/breadcum/faq.jpg) no-repeat center; background-size: cover;">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-12 p-0">
                    <h1>FAQ</h1>
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
                        <li><a href="#">Faq</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 asked-details">
                    <h1>Frequently Asked Questions</h1>
                    <p>Welcome to our frequently asked questions (FAQ) page. Here you can find your necessary information regarding our services. We present our detail service and other information. If you do not find your desired information here, you can contact us easily via email or over the phone.</p>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-12 faq-catagory">
                            <h3>General</h3>
                        </div>
                        <div class="col-12">
                            <div class="accordion" id="accordionExample">
                              <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Is there any log in/ sign in option to access in website?
                                    </button>
                                  </h5>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <p>No. You do not need to log in/ sign in at our website to access our information.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingTwo">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link active" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      Is free trial facility available?
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <p>Yes. We do offer a free trial offer up to 2 images so that you can judge our service quality before taking your final decision. You can give your sample images us so that we can provide you the finished task as a demo. </p>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingThree">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      How can I contact you?
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <p>We believe that keeping a close contact with our clients increases a close relationship of trust between us. That’s why we are available 24/7 and 365 days all the year round. You can visit our website’s “contact us” tab from the link given below </p>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingFour">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                      Which image formats do you accept?
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <p>Over the years, we have developed our skill to work with various image formats. We accept images of any file types and sizes (.AI, TIFF, PSD, JPEG, PNG, CR2 etc.). So do not hesitate to send your files, no matter whatever the format is. </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-12 faq-catagory">
                            <h3>General two</h3>
                        </div>
                        <div class="col-12">
                            <div class="accordion" id="accordionExample">
                              <div class="card">
                                <div class="card-header" id="headingFive">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                      Is there any log in/ sign in option to access in website?
                                    </button>
                                  </h5>
                                </div>

                                <div id="collapseFive" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <p>No. You do not need to log in/ sign in at our website to access our information.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingTwo">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      Is free trial facility available?
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <p>Yes. We do offer a free trial offer up to 2 images so that you can judge our service quality before taking your final decision. You can give your sample images us so that we can provide you the finished task as a demo. </p>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingThree">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      How can I contact you?
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <p>We believe that keeping a close contact with our clients increases a close relationship of trust between us. That’s why we are available 24/7 and 365 days all the year round. You can visit our website’s “contact us” tab from the link given below </p>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingFour">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                      Which image formats do you accept?
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <p>Over the years, we have developed our skill to work with various image formats. We accept images of any file types and sizes (.AI, TIFF, PSD, JPEG, PNG, CR2 etc.). So do not hesitate to send your files, no matter whatever the format is. </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-12 faq-catagory">
                            <h3>General</h3>
                        </div>
                        <div class="col-12">
                            <div class="accordion" id="accordionExample">
                              <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Is there any log in/ sign in option to access in website?
                                    </button>
                                  </h5>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <p>No. You do not need to log in/ sign in at our website to access our information.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingTwo">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      Is free trial facility available?
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <p>Yes. We do offer a free trial offer up to 2 images so that you can judge our service quality before taking your final decision. You can give your sample images us so that we can provide you the finished task as a demo. </p>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingThree">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      How can I contact you?
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <p>We believe that keeping a close contact with our clients increases a close relationship of trust between us. That’s why we are available 24/7 and 365 days all the year round. You can visit our website’s “contact us” tab from the link given below </p>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingFour">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                      Which image formats do you accept?
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <p>Over the years, we have developed our skill to work with various image formats. We accept images of any file types and sizes (.AI, TIFF, PSD, JPEG, PNG, CR2 etc.). So do not hesitate to send your files, no matter whatever the format is. </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-12 faq-catagory">
                            <h3>General</h3>
                        </div>
                        <div class="col-12">
                            <div class="accordion" id="accordionExample">
                              <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Is there any log in/ sign in option to access in website?
                                    </button>
                                  </h5>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <p>No. You do not need to log in/ sign in at our website to access our information.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingTwo">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      Is free trial facility available?
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <p>Yes. We do offer a free trial offer up to 2 images so that you can judge our service quality before taking your final decision. You can give your sample images us so that we can provide you the finished task as a demo. </p>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingThree">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      How can I contact you?
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <p>We believe that keeping a close contact with our clients increases a close relationship of trust between us. That’s why we are available 24/7 and 365 days all the year round. You can visit our website’s “contact us” tab from the link given below </p>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingFour">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                      Which image formats do you accept?
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <p>Over the years, we have developed our skill to work with various image formats. We accept images of any file types and sizes (.AI, TIFF, PSD, JPEG, PNG, CR2 etc.). So do not hesitate to send your files, no matter whatever the format is. </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  @endsection
