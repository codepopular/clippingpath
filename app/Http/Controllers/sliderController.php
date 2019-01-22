<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\slider;
use Carbon\Carbon;
use Session;
use Image;

class sliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   public function __construct(){
       $this->middleware('auth');
   }


    public function index()
    {
        $sliders=slider::get();
        return view('backend.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.addslider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $input = $request->all();
      $this->validate($request,[
         'name' => 'required',
        'photo' =>  ' required|mimes:jpeg,jpg,png,gif|max:3024',
         'status' => 'required',
     ],[
        'photo.required' => 'Slider image is required',
        'photo.max' => ' Maximum Upload File size 2MB',
        'photo.mimes' => 'image format allow only jpeg,jpg,png,gif',
     ]);

        if($request->hasFile('photo')){
          $image=$request->file('photo');
          $imageName='slider_'.'_'.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->save(base_path('public/contents/uploads/slider/'.$imageName));
           $input['photo']=$imageName;
      }

    $addslider=slider::create($input);
     if($addslider){
      Session::flash('status','value');
        return redirect(route('slider.create'));
    }else{
      Session::flash('error','value');
        return redirect('slider.create');
    }

  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return view('backend.slider.viewslider', ['viewslider' => slider::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     return view('backend.slider.edit', ['edit' => slider::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    $getslider=slider::where('id', $id)->FirstorFail();

      $input = $request->all();

       $this->validate($request,[
          'name' => 'required',
         'photo' =>  'mimes:jpeg,jpg,png,gif|max:3024',
          'status' => 'required',
      ],[
         'photo.max' => ' Maximum Upload File size 2MB',
         'photo.mimes' => 'image format allow only jpeg,jpg,png,gif',
      ]);
      // check exsist file
     if(!empty($_FILES['photo']['name'])){
         if($request->hasFile('photo')){
           $image=$request->file('photo');
           $imageName='slider_'.'_'.time().'.'.$image->getClientOriginalExtension();
           Image::make($image)->save(base_path('public/contents/uploads/slider/'.$imageName));
            $input['photo']=$imageName;

            // image unlink
            if (file_exists(public_path().'/contents/uploads/slider/'.$getslider->photo)) {
                unlink(public_path().'/contents/uploads/slider/'.$getslider->photo);
                  $updateslider=$getslider->fill($input)->save();

            }else{
             return redirect()->back();
            }

       }
     }else{
        $updateslider=$getslider->fill($input)->save();
     }

       if($updateslider){
        Session::flash('status','value');
          return redirect()->back();
      }else{
        Session::flash('error','value');
          return redirect()->back();
      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      $deleteslider=slider::findOrFail($id);
      $deleteslider->delete();
      if (file_exists(public_path().'/contents/uploads/slider/'.$deleteslider->photo)) {
          unlink(public_path().'/contents/uploads/slider/'.$deleteslider->photo);
        }
       if($deleteslider){
        Session::flash('status','value');
          return redirect()->back();
      }else{
        Session::flash('error','value');
          return redirect()->back();
      }

    }




}
