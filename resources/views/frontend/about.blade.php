@extends('layouts.frontend')
@section('contents')
    <section id="inner-banner">
        <div class="twentytwenty-container">
             <img src="{{asset('public/contents/frontend/')}}/images/breadcum/About-1.jpg" class="img-fluid w-100" alt="After1">
             <img src="{{asset('public/contents/frontend/')}}/images/breadcum/About-2.jpg" class="img-fluid w-100" alt="Before">
        </div>
    </section>
    <section id="breadcumb">
        <div class="container">
            <div class="row">
                <div class="col-12 p-0">
                    <ul>
                        <li><a href="{{route('index')}}"><i class="fa fa-home"></i>Home</a></li>
                        <li><i class="fa fa-chevron-right"></i><li>
                        <li><a href="#">About</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="about_pages">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-0 first-content">
                    <h2>Welcome To Clipping Path Aid</h2>
                    <h5>We are an Outsourcing Team dedicated to your satisfaction! We can provide you with a variety of services customized to your needs.</h5>
                    <p><strong>Clipping Path Aid</strong> is a professional image editing & Graphics Design Services provider located in Southeast Asia,Bangladesh. Our company has more than 150+ Photo Manipulation Artists (PMA) working in 3 different shifts, 24 hours a day.Clipping Path Aid provides quality image editing services set to meet the worldwide professional standards. Clipping Path Aid is one of the best quality clipping path service providers in Bangladesh. </p>
                </div>
                <div class="col-12 hard-work">
                    <div class="row">
                        <div class="col-lg-6 pl-0 mpr0 mpl0">
                            <img src="{{asset('public/contents/frontend/')}}/images/about/about.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pr-0 mpl0 p0">
                            <h2>We work hard for your satisfaction</h2>
                            <p>Our services range from basic clipping to expert designing for an attractive visual product which is at par with excellence. The following are our most valued services: </p>
                            <ul class="left-part">
                                <li><a href="#"><i class="fa fa-circle"></i>Clipping Path</a></li>
                                <li><a href="#"><i class="fa fa-circle"></i>Image Masking</a></li>
                                <li><a href="#"><i class="fa fa-circle"></i>Image Retouching</a></li>
                                <li><a href="#"><i class="fa fa-circle"></i>Shadow Creation</a></li>
                                <li><a href="#"><i class="fa fa-circle"></i>Photo Editing</a></li>
                                <li><a href="#"><i class="fa fa-circle"></i>Vehicles Enhancement</a></li>
                            </ul>
                            <ul class="right-part">
                                <li><a href="#"><i class="fa fa-circle"></i>Image Manipulation</a></li>
                                <li><a href="#"><i class="fa fa-circle"></i>Color Adjustments</a></li>
                                <li><a href="#"><i class="fa fa-circle"></i>Mirror Effects</a></li>
                                <li><a href="#"><i class="fa fa-circle"></i>Multi Clipping Path</a></li>
                                <li><a href="#"><i class="fa fa-circle"></i>Exposure Correction</a></li>
                                <li><a href="#"><i class="fa fa-circle"></i>Image Compositing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 p-0 second-content">
                    <p>Clipping Path Best Us has established itself as a professional clipping path service provider working 24 hours a day and 7 days a week. With over 150 skilled graphic designers, we are capable of providing clients with 24/7 service while ensuring quality and timely delivery of all orders. Thus, we ensure the best service in any part of the world and your satisfaction is our priority.</p>
                </div>
                <div class="col-12 p-0 mission-vission">
                    <div class="row mmr0">
                        <div class="col-lg-4 col-sm-6 mp0">
                            <img src="{{asset('public/contents/frontend/')}}/images/about/mission.jpg" class="img-fluid d-none d-sm-block" alt="">
                            <h4>Our Mission</h4>
                            <p>Raise the bar for professional photographers around the world. Inspire visual artists around the world. Create value for our clients and make a difference in our industry.Provide quality image editing and designing services for clients across the world. </p>
                            <img src="{{asset('public/contents/frontend/')}}/images/about/mission.jpg" class="img-fluid d-sm-none" alt="">
                        </div>
                        <div class="col-lg-4 col-sm-6 mp0">
                            <img src="{{asset('public/contents/frontend/')}}/images/about/history.jpg" class="img-fluid d-none d-sm-block" alt="">
                            <h4>Our History</h4>
                            <p>We have a grand and enriched working history after we started our journey in 2015. Since then, we are providing our clients with 100% satisfaction and quality works. In the meantime, we have recruited and trained over 100 to become expert</p>
                            <img src="{{asset('public/contents/frontend/')}}/images/about/history.jpg" class="img-fluid d-sm-none" alt="">
                        </div>
                        <div class="col-lg-4 col-sm-12 col-md-6 offset-md-3 offset-lg-0 mp0">
                            <img src="{{asset('public/contents/frontend/')}}/images/about/vission.jpg" class="img-fluid d-none d-sm-block" alt="">
                            <h4>Our Vission</h4>
                            <p>Make a great place to work where people are inspired to reach their potential.Set up and take care of a network of customers and professional relationships, together creating perpetual value. To be highly effective, lean, </p>
                            <img src="{{asset('public/contents/frontend/')}}/images/about/vission.jpg" class="img-fluid d-sm-none" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="quick-estimate">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 p-0">
                    <h2>We make your pictures work for you.</h2>
                    <h5>Quick turnaround & competitive prices.</h5>
                </div>
                <div class="col-lg-3 col-md-4 pr-0 text-right">
                    <a class="btn-linked" href="{{$buttonlink->get_quote}}">QUICK ESTIMATE <i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section id="working-process">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-0">
                   <h2>We Follow a Working Process</h2>
                    <img src="{{asset('public/contents/frontend/')}}/images/working-process.jpg" class="img-fluid w-100" alt="">
                </div>
            </div>
        </div>
    </section>


@endsection
