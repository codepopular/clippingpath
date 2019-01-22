<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\service;
use App\servicecat;
use Carbon\Carbon;
use Session;
use Image;

class serviceController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('backend.service.index', ['service' => service::orderBy('id','DESC')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('backend.service.create', ['category' => servicecat::get()]);
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
        $slug = str_slug($input['title'], "-");
        $input['slug']=$slug;
        $this->validate($request,[
         'name' => 'required',
         'title' => 'required|unique:services,title|min:5|max:255',
         'photo' =>  ' required|mimes:jpeg,jpg,png,gif|max:2024',
         'photo1' =>  ' required|mimes:jpeg,jpg,png,gif|max:2024',
      ],[
         'name.required' => 'Service name is required',
         'title.required' => 'Service title is required',
         'photo.required' => 'Service image is required',
         'photo.max' => ' Maximum Upload File size 2MB',
         'photo.mimes' => 'image format allow only jpeg,jpg,png,gif',
         'getcat.require' => ' Maximum Upload File size 2MB',
         'photo1.max' => ' Maximum Upload File size 2MB',
         'photo1.mimes' => 'image format allow only jpeg,jpg,png,gif',
      ]);
        // Before image upload with unique name
         if($request->hasFile('photo')){
           $image=$request->file('photo');
           $imageName='before'.'_'.time().'.'.$image->getClientOriginalExtension();
           Image::make($image)->save(base_path('public/contents/uploads/service/'.$imageName));
            $input['photo']=$imageName;
        }
      // After image upload with unique name
         if($request->hasFile('photo1')){
           $image=$request->file('photo1');
           $imageName='after'.'_'.time().'.'.$image->getClientOriginalExtension();
           Image::make($image)->save(base_path('public/contents/uploads/service/'.$imageName));
            $input['photo1']=$imageName;
        }

     $addData=service::create($input);
      if($addData){
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
       return view('backend.service.show', ['show' => service::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          return view('backend.service.edit', ['edit' => service::findOrFail($id)]);
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
      $getdata=service::where('id', $id)->FirstorFail();

        $input = $request->all();
        $slug = str_slug($input['title'], "-");
        $input['slug']=$slug;
         $this->validate($request,[
           'photo' =>  'mimes:jpeg,jpg,png,gif|max:2024',
           'photo1' =>  'mimes:jpeg,jpg,png,gif|max:2024',
        ],[
           'photo.max' => ' Maximum Upload File size 2MB',
           'photo1.max' => ' Maximum Upload File size 2MB',
           'photo.mimes' => 'image format allow only jpeg,jpg,png,gif',
           'photo1.mimes' => 'image format allow only jpeg,jpg,png,gif',
        ]);
        // check exsist file
       if(!empty($_FILES['photo']['name'])){
           if($request->hasFile('photo')){
             $image=$request->file('photo');
             $imageName='Before_'.'_'.time().'.'.$image->getClientOriginalExtension();
             Image::make($image)->save(base_path('public/contents/uploads/service/'.$imageName));
              $input['photo']=$imageName;

              // image unlink
              if (file_exists(public_path().'/contents/uploads/service/'.$getdata->photo)) {
                  unlink(public_path().'/contents/uploads/service/'.$getdata->photo);
                    $updatedata=$getdata->fill($input)->save();

              }else{
               return redirect()->back();
              }

         }
       }elseif(!empty($_FILES['photo1']['name'])){
           if($request->hasFile('photo1')){
             $image1=$request->file('photo1');
             $imageName1='After_'.'_'.time().'.'.$image1->getClientOriginalExtension();
             Image::make($image1)->save(base_path('public/contents/uploads/service/'.$imageName1));
              $input['photo1']=$imageName1;

              // image unlink
              if (file_exists(public_path().'/contents/uploads/service/'.$getdata->photo1)) {
                  unlink(public_path().'/contents/uploads/service/'.$getdata->photo1);
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
      // Data delete code
      $deletedata=service::findOrFail($id);
      $deletedata->delete();
       if($deletedata){
         if (file_exists(public_path().'/contents/uploads/service/'.$deletedata->photo)) {
             unlink(public_path().'/contents/uploads/service/'.$deletedata->photo);
        }
         if (file_exists(public_path().'/contents/uploads/service/'.$deletedata->photo1)) {
             unlink(public_path().'/contents/uploads/service/'.$deletedata->photo1);
        }
        Session::flash('status','value');
          return redirect()->back();
      }else{
        Session::flash('error','value');
          return redirect()->back();
      }

    }
}
