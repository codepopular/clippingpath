<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\service;
use App\slider;
use App\testimonial;
use App\blog;
use App\sample;
class websiteController extends Controller
{
    public function index(){
      $slider=slider::where('status',1)->get();
      $service=service::where('status',1)->orderBy('id','ASC')->get()->take(8);
      $testimonial=testimonial::where('status',1)->orderBy('id','DESC')->get()->take(3);
      $sample=sample::where('status',1)->orderBy('id','DESC')->get()->take(6);
      $blog=blog::where('status',1)->orderBy('id','DESC')->get()->take(6);
      return view('frontend.index',compact('slider','service','testimonial','sample','blog'));
    }



    public function about_us(){
      return view('frontend.about');
    }

    public function free_trial(){
      return view('frontend.free-trial');
    }

    public function faq(){
      return view('frontend.faq');
    }

    public function quote(){
      return view('frontend.requet-a-quote');
    }

    public function privacy_policy(){
      return view('frontend.privacy-policy');
    }

    public function pricing(){
      return view('frontend.pricing');
    }

    public function contact(){
      return view('frontend.contact');
    }

    public function blog(){
     $sidebarlog=blog::where('status',1)->get()->take(6);
     $getblog=blog::where('status',1)->paginate(3);
      return view('frontend.blog',compact('getblog','sidebarlog'));
    }

    public function single_service($slug){
    $single_service=service::where('slug',$slug)->FirstorFail();
     return view('frontend.service-single',compact('single_service'));
    }


    public function blog_single($blog_url){
      $sidebarlog=blog::where('status',1)->get()->take(6);
      $blog_single=blog::where('slug',$blog_url)->FirstorFail();
       return view('frontend.blog-single',compact('blog_single','sidebarlog'));
    }







}
