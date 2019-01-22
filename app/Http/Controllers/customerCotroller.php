<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
use Carbon\Carbon;
use Session;
use Image;
class customerCotroller extends Controller
{

  public function __construct(){
      $this->middleware('auth');
  }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $customers=customer::get();
      return view('backend.customer.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.customer.create');
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
         'title' => 'required',
         'photo' =>  ' required|mimes:jpeg,jpg,png,gif|max:3024',
      ],[
         'photo.required' => 'Slider image is required',
         'photo.max' => ' Maximum Upload File size 2MB',
         'photo.mimes' => 'image format allow only jpeg,jpg,png,gif',
      ]);

         if($request->hasFile('photo')){
           $image=$request->file('photo');
           $imageName='customer'.'_'.time().'.'.$image->getClientOriginalExtension();
           Image::make($image)->save(base_path('public/contents/uploads/customer/'.$imageName));
            $input['photo']=$imageName;
       }

     $addcustomer=customer::create($input);
      if($addcustomer){
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
         return view('backend.customer.show', ['showcustomer' => customer::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       return view('backend.customer.edit', ['edit' => customer::findOrFail($id)]);
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

          $getslider=customer::where('id', $id)->FirstorFail();

            $input = $request->all();

             $this->validate($request,[
              'title' => 'required',
               'photo' =>  'mimes:jpeg,jpg,png,gif|max:3024',
            ],[
               'photo.max' => ' Maximum Upload File size 2MB',
               'photo.mimes' => 'image format allow only jpeg,jpg,png,gif',
            ]);
            // check exsist file
           if(!empty($_FILES['photo']['name'])){
               if($request->hasFile('photo')){
                 $image=$request->file('photo');
                 $imageName='customer_'.'_'.time().'.'.$image->getClientOriginalExtension();
                 Image::make($image)->save(base_path('public/contents/uploads/customer/'.$imageName));
                  $input['photo']=$imageName;

                  // image unlink
                  if (file_exists(public_path().'/contents/uploads/customer/'.$getslider->photo)) {
                      unlink(public_path().'/contents/uploads/customer/'.$getslider->photo);
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
      $deletecustomer=customer::findOrFail($id);
      $deletecustomer->delete();
      if (file_exists(public_path().'/contents/uploads/customer/'.$deletecustomer->photo)) {
          unlink(public_path().'/contents/uploads/customer/'.$deletecustomer->photo);
        }
       if($deletecustomer){
        Session::flash('status','value');
          return redirect()->back();
      }else{
        Session::flash('error','value');
          return redirect()->back();
      }

    }
}
