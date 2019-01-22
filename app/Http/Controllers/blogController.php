<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
use Carbon\Carbon;
use Session;
use Image;
  use Victorybiz\GeoIPLocation\GeoIPLocation;
class blogController extends Controller
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
          // $geoip = new \Victorybiz\GeoIPLocation\GeoIPLocation();
          //  echo $geoip->getCountry();

     return view('backend.blog.index', ['blog' => blog::orderBy('id','ASC')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog.create');
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
         'title' => 'required|unique:blogs,title|min:5|max:255',
         'photo' =>  ' required|mimes:jpeg,jpg,png,gif|max:2024',
         'photo1' =>  ' required|mimes:jpeg,jpg,png,gif|max:2024',
         'des'    =>  'required'
      ],[
         'title.required' => 'Service title is required',
         'photo.required' => 'Service image is required',
         'photo.max' => ' Maximum Upload File size 2MB',
         'photo.mimes' => 'image format allow only jpeg,jpg,png,gif',
         'photo1.max' => ' Maximum Upload File size 2MB',
        'photo1.required' => 'Service image is required',
         'photo1.mimes' => 'image format allow only jpeg,jpg,png,gif',
          'des.required'    =>  'Blog Derscription Must be Required'
      ]);
        // Before image upload with unique name
         if($request->hasFile('photo')){
           $image=$request->file('photo');
           $imageName='blogthumbail'.'_'.time().'.'.$image->getClientOriginalExtension();
           Image::make($image)->save(base_path('public/contents/uploads/blog/'.$imageName));
            $input['photo']=$imageName;
        }
      // After image upload with unique name
         if($request->hasFile('photo1')){
           $image=$request->file('photo1');
           $imageName='blogpreview'.'_'.time().'.'.$image->getClientOriginalExtension();
           Image::make($image)->save(base_path('public/contents/uploads/blog/'.$imageName));
            $input['photo1']=$imageName;
        }

     $addData=blog::create($input);
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
       return view('backend.blog.show', ['show' => blog::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       return view('backend.blog.edit', ['edit' => blog::findOrFail($id)]);
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
      $getdata=blog::where('id', $id)->FirstorFail();
        $input = $request->all();
        $slug = str_slug($input['title'], "-");
        $input['slug']=$slug;

        $this->validate($request,[
         'title' => 'required|min:5|max:255',
         'photo' =>  ' mimes:jpeg,jpg,png,gif|max:2024',
         'photo1' =>  ' mimes:jpeg,jpg,png,gif|max:2024',

      ],[
         'title.required' => 'Service title is required',
         'photo.max' => ' Maximum Upload File size 2MB',
         'photo.mimes' => 'image format allow only jpeg,jpg,png,gif',
         'photo1.max' => ' Maximum Upload File size 2MB',
         'photo1.mimes' => 'image format allow only jpeg,jpg,png,gif',
          'des.required'    =>  'Blog Derscription Must be Required'
      ]);
        // check exsist file
       if(!empty($_FILES['photo']['name'])){
           if($request->hasFile('photo')){
             $image=$request->file('photo');
             $imageName='Before_'.'_'.time().'.'.$image->getClientOriginalExtension();
             Image::make($image)->save(base_path('public/contents/uploads/blog/'.$imageName));
              $input['photo']=$imageName;

              // image unlink
              if (file_exists(public_path().'/contents/uploads/blog/'.$getdata->photo)) {
                  unlink(public_path().'/contents/uploads/blog/'.$getdata->photo);
                    $updatedata=$getdata->fill($input)->save();

              }else{
               return redirect()->back();
              }

         }
       }elseif(!empty($_FILES['photo1']['name'])){
           if($request->hasFile('photo1')){
             $image1=$request->file('photo1');
             $imageName1='After_'.'_'.time().'.'.$image1->getClientOriginalExtension();
             Image::make($image1)->save(base_path('public/contents/uploads/blog/'.$imageName1));
              $input['photo1']=$imageName1;

              // image unlink
              if (file_exists(public_path().'/contents/uploads/blog/'.$getdata->photo1)) {
                  unlink(public_path().'/contents/uploads/blog/'.$getdata->photo1);
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
      $deletedata=blog::findOrFail($id);
      $deletedata->delete();
       if($deletedata){
         if (file_exists(public_path().'/contents/uploads/blog/'.$deletedata->photo)) {
             unlink(public_path().'/contents/uploads/blog/'.$deletedata->photo);
        }
         if (file_exists(public_path().'/contents/uploads/blog/'.$deletedata->photo1)) {
             unlink(public_path().'/contents/uploads/blog/'.$deletedata->photo1);
        }
        Session::flash('status','value');
          return redirect()->back();
      }else{
        Session::flash('error','value');
          return redirect()->back();
      }

    }
}
