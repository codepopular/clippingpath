@extends('layouts.frontend')
@section('contents')
<section id="inner-banner" style="background: url({{asset('public/contents/frontend/')}}/images/breadcum/price.jpg) no-repeat center; background-size: cover;">
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
                        <li><a href="#">Pricing</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing-table" class="price-page">
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
                                            <p>$3.99</p>
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
please request a quote or free trial.</p>
                   <a class="btn-linked" href="{{$buttonlink->get_quote}}">Request a Quote</a>
                   <a class="btn-linked" href="{{$buttonlink->trial_period}}">Free trial</a>
                </div>
            </div>
        </div>
    </section>

@endsection
