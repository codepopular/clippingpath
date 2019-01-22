<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sample;
use Carbon\Carbon;
use Session;
use Image;
class sampleController extends Controller
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
      return view('backend.sample.index', ['samples' => sample::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('backend.sample.create');
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
         'photo' =>  ' required|mimes:jpeg,jpg,png,gif|max:3024',
      ],[
         'photo.required' => 'Sample image is required',
         'photo.max' => ' Maximum Upload File size 2MB',
         'photo.mimes' => 'image format allow only jpeg,jpg,png,gif',
      ]);

         if($request->hasFile('photo')){
           $image=$request->file('photo');
           $imageName='sample'.'_'.time().'.'.$image->getClientOriginalExtension();
           Image::make($image)->save(base_path('public/contents/uploads/sample/'.$imageName));
            $input['photo']=$imageName;
       }
      // insert data
     $addcustomer=sample::create($input);
      // message show
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
         return view('backend.sample.show', ['show' => sample::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       return view('backend.sample.edit', ['edit' => sample::findOrFail($id)]);
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

      $getdata=sample::where('id', $id)->FirstorFail();

        $input = $request->all();

         $this->validate($request,[
           'photo' =>  'mimes:jpeg,jpg,png,gif|max:2024',
        ],[
           'photo.max' => ' Maximum Upload File size 2MB',
           'photo.mimes' => 'image format allow only jpeg,jpg,png,gif',
        ]);
        // check exsist file
       if(!empty($_FILES['photo']['name'])){
           if($request->hasFile('photo')){
             $image=$request->file('photo');
             $imageName='sample_'.'_'.time().'.'.$image->getClientOriginalExtension();
             Image::make($image)->save(base_path('public/contents/uploads/sample/'.$imageName));
              $input['photo']=$imageName;

              // image unlink
              if (file_exists(public_path().'/contents/uploads/sample/'.$getdata->photo)) {
                  unlink(public_path().'/contents/uploads/sample/'.$getdata->photo);
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
      $getdata=sample::findOrFail($id);
      $getdata->delete();
      if (file_exists(public_path().'/contents/uploads/sample/'.$getdata->photo)) {
          unlink(public_path().'/contents/uploads/sample/'.$getdata->photo);
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
