@extends('layouts.frontend')
@section('contents')
    <section id="inner-banner" style="background: url({{asset('public/contents/frontend/')}}/images/about/about-banner.jpg) no-repeat center; background-size: cover;">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 p-0">
                        <h1>Our Privacy Policy</h1>
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
                        <li><a href="#">Privacy-Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="privacy">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 pl-0">
                    <img src="{{asset('public/contents/frontend')}}/images/privacy/privacy.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pr-0">
                    <h2>PRIVACY POLICY AT CLippingpathaid</h2>
                    <p>Clipping Path aid( “Clipping Path aid” or “us”) provides this Privacy Policy to inform you of our policies and procedures regarding the collection, use, disclosure and protection of information that apply to our Service, as well as your choices regarding the collection and use of information.</p>
                    <p>Clippingpath aid may change its policy at any time and it is your responsibility to be aware of the changes which will be made to the policies. All changes will be notified on the particular policy pages.</p>
                </div>
                <div class="col-12 p-0 steps">
                    <h3>STEPS OF PRIVACY POLICY AT Clippingpath aid</h3>
                    <h4>INFORMATION COLLECTION</h4>
                    <p>Any information submitted through website, email or through online communication with clippingpath Path or its authorized personnel will be recorded and kept in company database.</p>
                    <p>Any information submitted through our contact form or email will be regarded as genuine and may be used to verify authenticity of visitors or client.</p>
                </div>
                <div class="col-12 collect p-0">
                    <h4>WHAT INFORMATION WE COLLECT:</h4>
                    <p>We may collect the following information:</p>
                    <ul>
                        <li><i class="fa fa-circle"></i>Your Name</li>
                        <li><i class="fa fa-circle"></i>Your Address</li>
                        <li><i class="fa fa-circle"></i>Demographic information</li>
                        <li><i class="fa fa-circle"></i>Web address</li>
                        <li><i class="fa fa-circle"></i>Contact Information</li>
                    </ul>
                    <h4>WHAT WE DO WITH YOUR INFORMATION</h4>
                    <p>We may use this information to contact you regarding any work you had given, promotional offers or to actually verify authenticity of client as to create a professional environment.</p>
                    <h4>IMAGES OF CLIENTS</h4>
                    <h5>Work Images</h5>
                    <p>The images will be submitted by the client for work will not be used in any form or shared any website or shared with users. The images are properties of our clients.</p>
                    <h5>Free Trial Images</h5>
                    <p>However, free trial images may be used as sample or portfolio of our company or promotional activity of  Clipping Path. If client does not want the free sample to be used then we have to be notified by prior to sending Free trial image(s).</p>
                    <h4>INTEGRITY OF INFORMATION</h4>
                    <p>The information you submit regarding work and contact details will not be shared with anyone outside  Clipping Path</p>
                    <h4>LINKS TO OTHER WEBSITES</h4>
                    <p>Our website usually does not contain any outside links. But it may contain links for interest of visitors in which case Clippingpath aid cannot be held responsible for any information submitted to sites visited through our links.</p>
                    <h3 class="controls">PRIVACY POLICY CONTROL</h3>
                    <p>Clippingpathaid wants to assure your <strong>Privacy policy</strong></p>
                    <p>The information submitted to our company Clippingpath aid, either through website, email or any other electronic and other means will not be shared with any other entity/company without your permission.</p>
                    <p>You may request information submitted to us which we hold under Data Protection Act 1998.</p>
                    <p>Providing correct information about himself or herself is the client’s responsibility. Any incorrect information submitted may be corrected by sending email to info@clippingpathaid.com. We will correct your information.</p>
                </div>
            </div>
        </div>
    </section>


    @endsection
