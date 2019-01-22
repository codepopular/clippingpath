<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\service;
use App\slider;
use App\testimonial;
use App\blog;
use App\social;
use App\general;
use App\header;
use App\buttonlink;
use App\footer;
use Image;
use validator;
use Session;

class settingController extends Controller
{
  public function __construct(){
      $this->middleware('auth');
  }
    public function index(){
       $social=social::FirstorFail();
      return view('backend.setting.index',compact('social','general'));
    }








/***************************************************
          GENERAL SETTING
*****************************************************/

    public function update(Request $request, $id)
    {
     $getdata=general::FirstorFail();
      $input = $request->all();

      $this->validate($request,[
         'site_title' =>  'max:100',
         'metacontent' =>  'max:160',
         'metakeyword' =>  'max:255',
      ],[
         'site_title.size' => 'Just enter 160 charcter ',
         'metacontent.size' => 'Just enter 160 charcter ',
      ]);
      $updateinfo=$getdata->fill($input)->save();

         if($updateinfo){
          Session::flash('infoupdated','value');
            return redirect()->back();
        }else{
          Session::flash('error','value');
            return redirect()->back();
        }

    }




    /***************************************************
              HEADER SETTING
    *****************************************************/

    public function header(Request $request, $id)
    {
      $getheader=header::FirstorFail();
      $input = $request->all();

      $this->validate($request,[
         'header_logo' =>  'mimes:jpeg,jpg,png,gif|max:2024',
      ],[
         'header_logo.max' => ' Maximum Upload File size 2MB',
         'header_logo.mimes' => 'image format allow only jpeg,jpg,png,gif',
      ]);
      $updatedata=header::first()->update([
        'email' => $input['email'],
        'phone' => $input['phone'],
        'header_logo' => $getheader->header_logo,
      ]);

      // check exsist file
     if(!empty($_FILES['header_logo']['name'])){
         if($request->hasFile('header_logo')){
           $image=$request->file('header_logo');
           $imageName='headerLogo_'.'_'.time().'.'.$image->getClientOriginalExtension();
           Image::make($image)->save(base_path('public/contents/uploads/common/'.$imageName));

           $updatedata=header::first()->update([
             'header_logo' => $imageName,
           ]);

            // image unlink
            if (file_exists(public_path().'/contents/uploads/common/'.$getheader->header_logo)) {
                unlink(public_path().'/contents/uploads/common/'.$getheader->header_logo);


            }else{
             return redirect()->back();
            }

       }

     }else{
       $updatedata=header::first()->update([
        'email' => $input['email'],
        'phone' => $input['phone'],
        'header_logo' =>$getheader->header_logo,
       ]);
     }

       if($updatedata){
        Session::flash('update_header','value');
          return redirect()->back();
      }else{
        Session::flash('error','value');
          return redirect()->back();
      }

    }





    /***************************************************
              BUTTON LINK
    *****************************************************/


    public function buttonlink(Request $request, $id)
    {
      $getdata=buttonlink::FirstorFail();
       $input = $request->all();

       $updatedata=buttonlink::first()->update($input);
        if($updatedata){
         Session::flash('updatebutton','value');
           return redirect()->back();
       }else{
         Session::flash('error','value');
           return redirect()->back();
       }

    }

        /***************************************************
                  FOOTER SETTING
        *****************************************************/

    public function footer(Request $request, $id)
    {
     $getdata=footer::FirstorFail();
      $input = $request->all();
      $this->validate($request,[
         'footer_logo' =>  'mimes:jpeg,jpg,png,gif|max:2024',
      ],[
         'footer_logo.max' => ' Maximum Upload File size 2MB',
         'footer_logo.mimes' => 'image format allow only jpeg,jpg,png,gif',
      ]);
      $updatedata=footer::first()->update([
        'footer_logo' => $getdata->footer_logo,
        'copyright' => $input['copyright'],
      ]);

      // check exsist file
     if(!empty($_FILES['footer_logo']['name'])){
         if($request->hasFile('footer_logo')){
           $image=$request->file('footer_logo');
           $imageName='footerLogo_'.'_'.time().'.'.$image->getClientOriginalExtension();

           Image::make($image)->save(base_path('public/contents/uploads/common/'.$imageName));

            // image unlink
            if (file_exists(public_path().'/contents/uploads/common/'.$getdata->footer_logo)) {
                unlink(public_path().'/contents/uploads/common/'.$getdata->footer_logo);
                $updatedata=footer::first()->update([
                  'footer_logo' => $imageName,
                ]);

            }else{
             return redirect()->back();
            }

       }

     }else{
       $updatedata=footer::first()->update([
        'copyright' => $input['copyright'],
       ]);
     }

       if($updatedata){
        Session::flash('updatefooter','value');
          return redirect()->back();
      }else{
        Session::flash('error','value');
          return redirect()->back();
      }

    }


}
