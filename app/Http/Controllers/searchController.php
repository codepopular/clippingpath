<?php

namespace App\Http\Controllers;
use App\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
class searchController extends Controller
{
    public function index(){
      $sresult = Input::get ( 'search' );
      $serach = service::where('title','LIKE','%'.$sresult.'%')->orWhere('description','LIKE','%'.$sresult.'%')->paginate(6);
      if (count ( $serach ) > 0){

          return view('frontend.search',compact('serach','sresult'));
      }else{
        $sresult = Input::get ( 'search' );
         return view('frontend.search',compact('sresult'));
      }


    }
}
