@extends('layouts.backend')
@section('contents')

<br>
<br>
<br>
<br>


<div class="content" style="margin-top:20px">
          <div class="container-fluid">
                <!-- end row -->
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card m-b-20">
                          <div class="card-body" style="border:1px solid #cecece">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                              <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Generel setting</a>
                              <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Header Setting</a>
                              <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Button Link</a>
                              <a class="nav-link" id="v-pills-shamim-tab" data-toggle="pill" href="#v-pills-shamim" role="tab" aria-controls="v-pills-shamim" aria-selected="false">Social Profile</a>
                              <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Footer</a>
                            </div>
                         </div>


                         <div class="card m-b-20" >
                            <div class="card-body" style="height:150px">
                              <div class="text-center">
                               @if(Session('socialupdate'))
                                  <h6 style="color:green">Social Information update Successfully</h6>
                               @endif
                             </div>

                              <div class="text-center">
                               @if(Session('update_header'))
                                  <h6 style="color:green">Header Information update Successfully</h6>
                               @endif
                             </div>
                              <div class="text-center">
                               @if(Session('updatefooter'))
                                  <h6 style="color:green">Footer Information update Successfully</h6>
                               @endif
                             </div>

                              <div class="text-center">
                               @if(Session('infoupdated'))
                                  <h6 style="color:green">General Information update Successfully</h6>
                               @endif
                             </div>

                              <div class="text-center">
                               @if(Session('updatebutton'))
                                  <h6 style="color:green">Button links Information update Successfully</h6>
                               @endif
                             </div>

                           </div>
                         </div>






                      </div>
                   </div> <!-- end call md -->
                   <div class="col-lg-9">
                       <div class="card m-b-20">
                           <div class="card-body">
                             <div class="tab-content" id="v-pills-tabContent">

                               <!--============================================================================================
                                         Genearal Setting
                            ===================================================================================================-->
                               <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                   <?php $general=DB::table('generals')->first();?>
                                     <form class="" action="{{route('setting.update',$general->id)}}" method="post">
                                       @method('PUT')
                                        @csrf

                                   <div class="form-group">
                                     <div class="col-4">Site Title</div>
                                       <div class="col-12">
                                        <input type="text" name="site_title" value="{{$general->site_title}}" class="form-control">
                                        @if ($errors->has('site_title'))
                                        <ul class="parsley-errors-list filled" id="parsley-id-17">
                                          <li class="parsley-required">{{ $errors->first('site_title') }}</li>
                                        </ul>
                                       @endif
                                       </div>
                                     </div>
                                     <br>
                                   <div class="form-group">
                                     <div class="col-4">Meta Content</div>
                                       <div class="col-12">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="metacontent">{{$general->metacontent}}</textarea>
                                        @if ($errors->has('metacontent'))
                                        <ul class="parsley-errors-list filled" id="parsley-id-17">
                                          <li class="parsley-required">{{ $errors->first('metacontent') }}</li>
                                        </ul>
                                       @endif
                                       </div>
                                     </div>
                                     <br>

                                       <div class="form-group">
                                       <div class="col-4">Meta keyword</div>
                                         <div class="col-12">
                                           <input type="text" id="input-tags" class="input-tags demo-default" value="{{$general->metakeyword}}" name="metakeyword">
                                           @if ($errors->has('metakeyword'))
                                           <ul class="parsley-errors-list filled" id="parsley-id-17">
                                             <li class="parsley-required">{{ $errors->first('metakeyword') }}</li>
                                           </ul>
                                          @endif
                                         </div>
                                       </div>

                                       <div class="form-group">
                                         <div class="col-4">Google Map</div>
                                           <div class="col-12">
                                            <input class="form-control" id="exampleFormControlTextarea1" rows="3" name="map" value="{{$general->map}}">
                                            @if ($errors->has('map'))
                                            <ul class="parsley-errors-list filled" id="parsley-id-17">
                                              <li class="parsley-required">{{ $errors->first('map') }}</li>
                                            </ul>
                                           @endif
                                           </div>
                                         </div>
                                         <br>

                                         <div class="form-group">
                                            <iframe width="100%" height="300" src="{{$general->map}}" frameborder="0" style="border:0" allowfullscreen></iframe>
                                         </div>

                                       <div class="text-center">
                                       <button type="submit" class="btn btn-info waves-effect waves-light">
                                         Update Information
                                       </button>
                                       </div>

                                     </form>
                               </div>

                               <!--============================================================================================
                                         HEADER SETTING
                            ===================================================================================================-->

                               <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                                 <?php $headerinfo=DB::table('headers')->first(); ?>
                                 <form class="" action="{{action('settingController@header',$headerinfo->id)}}" method="post" enctype="multipart/form-data">
                                   @csrf
                                 <div class="form-group">
                                 <div class="col-4">Phone</div>
                                   <div class="col-12">
                                    <input type="email" name="email" value="{{$headerinfo->email}}" class="form-control">
                                   </div>
                                 </div>
                                 <div class="form-group">
                                 <div class="col-4">Email</div>
                                   <div class="col-12">
                                    <input type="text" name="phone" value="{{$headerinfo->phone}}" class="form-control">
                                   </div>
                                 </div>

                                 <div class="col-4">Header Logo</div>
                                   <div class="col-8">
                                     <input type="file" value="{{$headerinfo->header_logo}}" name="header_logo"/> <br>
                                       <img src="{{asset('public/contents/uploads/common')}}/{{$headerinfo->header_logo}}" alt="" height="100">
                                   </div>

                                   <div class="text-center">
                                   <button type="submit" class="btn btn-primary waves-effect waves-light">
                                     Update Information
                                   </button>
                                   </div>
                                 </form>


                               </div>

                               <!--============================================================================================
                                         BUTTON LINK
                            ===================================================================================================-->

                               <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                 <?php  $button_info=DB::table('buttonlinks')->first();?>
                                   <form class="" action="{{action('settingController@buttonlink',$button_info->id)}}" method="post">

                                     @csrf
                                   <div class="form-group">
                                     <div class="col-4">Trial Period</div>
                                       <div class="col-12">
                                        <input type="text" name="trial_period" value="{{$button_info->trial_period}}" class="form-control">
                                       </div>
                                   </div>

                                   <div class="form-group">
                                     <div class="col-4">get a quote</div>
                                       <div class="col-12">
                                        <input type="text" name="get_quote" value="{{$button_info->get_quote}}" class="form-control">
                                       </div>
                                   </div>
                                   <div class="form-group">
                                     <div class="col-4">FAQ</div>
                                       <div class="col-12">
                                        <input type="text" name="faq" value="{{$button_info->faq}}" class="form-control">
                                       </div>
                                   </div>

                                   <div class="form-group">
                                     <div class="col-4">Request Us To Get</div>
                                       <div class="col-12">
                                        <input type="text" name="request_us" value="{{$button_info->request_us}}" class="form-control">
                                       </div>
                                   </div>

                                   <div class="form-group">
                                     <div class="col-4">About Read More</div>
                                       <div class="col-12">
                                        <input type="text" name="about_more" value="{{$button_info->about_more}}" class="form-control">
                                       </div>
                                   </div>
                                   <div class="form-group">
                                     <div class="col-4">Service Read More Link</div>
                                       <div class="col-12">
                                        <input type="text" name="service_more" value="{{$button_info->service_more}}" class="form-control">
                                       </div>
                                   </div>

                                   <div class="form-group">
                                     <div class="col-4">Simple project Read More Link</div>
                                       <div class="col-12">
                                        <input type="text" name="simple_project_more" value="{{$button_info->simple_project_more}}" class="form-control">
                                       </div>
                                   </div>

                                   <div class="text-center">
                                   <button type="submit" class="btn btn-info waves-effect waves-light">
                                     Update Information
                                   </button>
                                   </div>

                                 </form>

                               </div>


                               <!--============================================================================================
                                        SOCIAL PROIFLE
                            ===================================================================================================-->
                               <div class="tab-pane fade" id="v-pills-shamim" role="tabpanel" aria-labelledby="v-pills-shamim-tab">

                                 <form class="" action="{{route('socialicon.update',$social->id)}}" method="post">
                                   @method('PUT')
                                    @csrf
                                 <div class="text-center">
                                 <button type="submit" class="btn btn-info waves-effect waves-light">
                                   Update Information
                                 </button>
                                 </div>


                           <h4><label>Social Profile</label></h4>
                              <div class="form-group">
                              <div class="col-4">Facebook Url</div>
                                <div class="col-12">
                                 <input type="url" name="facebook" value="{{$social->facebook}}" class="form-control">
                                </div>
                              </div>


                              <div class="form-group">
                              <div class="col-4">Twitter Url</div>
                                <div class="col-12">
                                 <input type="url" name="twitter" value="{{$social->facebook}}" class="form-control">
                                </div>
                              </div>

                              <div class="form-group">
                              <div class="col-4">linkedin Url</div>
                                <div class="col-12">
                                 <input type="url" name="linkedin" value="{{$social->linkedin}}" class="form-control">
                                </div>
                              </div>

                              <div class="form-group">
                              <div class="col-4">Google Plus</div>
                                <div class="col-12">
                                 <input type="url" name="google_plus" value="{{$social->google_plus}}" class="form-control">
                                </div>
                              </div>

                              <div class="form-group">
                              <div class="col-4">Pinterest</div>
                                <div class="col-12">
                                 <input type="url" name="pinterest" value="{{$social->pinterest}}" class="form-control">
                                </div>
                              </div>

                              <div class="form-group">
                              <div class="col-4">Youtube</div>
                                <div class="col-12">
                                 <input type="url" name="youtube" value="{{$social->youtube}}" class="form-control">
                                </div>
                              </div>

                              <div class="form-group">
                              <div class="col-4">Dribble</div>
                                <div class="col-12">
                                 <input type="url" name="dribbble" value="{{$social->dribbble}}" class="form-control">
                                </div>
                              </div>
                              </form>
                               </div>

                               <!--============================================================================================
                                      FOOTER SETTING
                            ===================================================================================================-->

                               <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                     <?php $footerinfo=DB::table('footers')->first(); ?>
                                     <form class="" action="{{action('settingController@footer',$footerinfo->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                     <div class="form-group">
                                       <div class="col-4">Footer Logo</div>
                                         <div class="col-12">
                                          <input type="file" name="footer_logo" value="{{$footerinfo->footer_logo}}" class="form-control">
                                          @if ($errors->has('footer_logo'))
                                          <ul class="parsley-errors-list filled" id="parsley-id-17">
                                            <li class="parsley-required">{{ $errors->first('footer_logo') }}</li>
                                          </ul>
                                         @endif
                                         <img src="{{asset('public/contents/uploads/common')}}/{{$footerinfo->footer_logo}}" alt="" height="100">
                                         </div>
                                     </div>
                                       <div class="form-group">
                                         <div class="col-4">Copyright</div>
                                           <div class="col-12">
                                            <input type="text" name="copyright" value="{{$footerinfo->copyright}}" class="form-control">
                                           </div>

                                         </div>
                                       <div class="text-center">
                                       <button type="submit" class="btn btn-info waves-effect waves-light">
                                         Update Information
                                       </button>
                                       </div>
                                   </form>
                               </div>
                             </div>
                          </div>
                      </div>
                  </div>
            </div>
       </div>
</div>



























  @endsection
