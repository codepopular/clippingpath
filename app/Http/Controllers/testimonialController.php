<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\testimonial;
use Image;
use Session;
class testimonialController extends Controller
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
          $testimonial=testimonial::get();
          return view('backend.testimonial.index',compact('testimonial'));
      }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           return view('backend.testimonial.create');
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
         'designation' => 'required',
         'des' => 'required|max:255',
         'photo' =>  ' required|mimes:jpeg,jpg,png,gif|max:3024',
         'status' => 'required',
      ],[
         'name.required' => 'name is required',
         'designation.required' => 'Designation is required',
         'des.required' => 'Description is required',
         'photo.required' => 'Photo is required',
         'photo.max' => ' Maximum Upload File size 2MB',
         'photo.mimes' => 'image format allow only jpeg,jpg,png,gif',
      ]);

         if($request->hasFile('photo')){
           $image=$request->file('photo');
           $imageName='client_'.'_'.time().'.'.$image->getClientOriginalExtension();
           Image::make($image)->save(base_path('public/contents/uploads/testimonial/'.$imageName));
            $input['photo']=$imageName;
       }

     $addslider=testimonial::create($input);
      if($addslider){
       Session::flash('status','value');
         return redirect()->back();
     }else{
       Session::flash('error','value');
         return redirect()->back();
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
      return view('backend.testimonial.show', ['show' => testimonial::findOrFail($id)]);
  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.testimonial.edit', ['edit' => testimonial::findOrFail($id)]);
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
      $getdata=testimonial::where('id', $id)->FirstorFail();

        $input = $request->all();

        $this->validate($request,[
          'name' => 'required',
          'designation' => 'required',
          'des' => 'required|max:255',
          'photo' =>  'mimes:jpeg,jpg,png,gif|max:3024',
          'status' => 'required',
       ],[
          'name.required' => 'name is required',
          'designation.required' => 'Designation is required',
          'des.required' => 'Description is required',
          'photo.max' => ' Maximum Upload File size 2MB',
          'photo.mimes' => 'image format allow only jpeg,jpg,png,gif',
       ]);
        // check exsist file
       if(!empty($_FILES['photo']['name'])){
           if($request->hasFile('photo')){
             $image=$request->file('photo');
             $imageName='client_'.'_'.time().'.'.$image->getClientOriginalExtension();
             Image::make($image)->save(base_path('public/contents/uploads/testimonial/'.$imageName));
              $input['photo']=$imageName;

              // image unlink
              if (file_exists(public_path().'/contents/uploads/testimonial/'.$getdata->photo)) {
                  unlink(public_path().'/contents/uploads/testimonial/'.$getdata->photo);
                    $updatedata=$getdata->fill($input)->save();

              }else{
               return redirect()->back();
              }

         }
       }else{
          $updatedata=$getdata->fill($input)->save();
       }

         if($updatedata){
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
      $getdata=testimonial::findOrFail($id);
      $getdata->delete();
      if (file_exists(public_path().'/contents/uploads/testimonial/'.$getdata->photo)) {
          unlink(public_path().'/contents/uploads/testimonial/'.$getdata->photo);
        }
       if($getdata){
        Session::flash('status','value');
          return redirect()->back();
      }else{
        Session::flash('error','value');
          return redirect()->back();
      }
    }
}
