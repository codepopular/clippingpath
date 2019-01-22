<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\trial;
use Image;
use Session;
class trialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
     
     public function __construct()
    {
        $this->middleware('auth', ['only' => ['index']]);
    }
     
     
    public function index()
    {
     $get_trial=trial::orderBy('id','DESC')->paginate(15);
      return view('backend.email.email-inbox',compact('get_trial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('backend.email.compose');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input =$request->all();

        // project sql injection
        $input['name']=strip_tags($request->name);
        $input['des']=strip_tags($request->des);

        $this->validate($request,[
         'name' => 'required',
         'email' => 'required',
         'des' => 'required',
         'photo' =>  ' required|mimes:jpeg,jpg,png,gif|max:2024',
         'photo1' =>  'mimes:jpeg,jpg,png,gif|max:2024',
         'photo2' =>  'mimes:jpeg,jpg,png,gif|max:2024',
          'captcha' => 'required|captcha',
      ],[
         'name.required' => 'Name is required',
         'email.required' => 'Email is required',
         'des.required' => 'Description is required',
         'photo.required' => 'Minimum 1 Image is Required',
         'photo.max' => ' Maximum Upload File size 2MB',
         'photo.mimes' => 'image format allow only jpeg,jpg,png,gif',
         'photo1.max' => ' Maximum Upload File size 2MB',
         'photo1.mimes' => 'image format allow only jpeg,jpg,png,gif',
         'photo2.mimes' => 'image format allow only jpeg,jpg,png,gif',
         'photo2.max' => ' Maximum Upload File size 2MB',
         // captcha
         'captcha.required' => 'Captcha validate required',
         'captcha.captcha' => 'Type Correct Capcha',

      ]);
        // Before image upload with unique name
         if($request->hasFile('photo')){
           $image=$request->file('photo');
           $imageName='trialimage'.'_'.time().'.'.$image->getClientOriginalExtension();
           Image::make($image)->save(base_path('public/contents/uploads/trial/'.$imageName));
            $input['photo']=$imageName;
        }
      // After image upload with unique name
         if($request->hasFile('photo1')){
           $image=$request->file('photo1');
           $imageName='trialimage'.'_'.time().'.'.$image->getClientOriginalExtension();
           Image::make($image)->save(base_path('public/contents/uploads/trial/'.$imageName));
            $input['photo1']=$imageName;
        }

      // After image upload with unique name
         if($request->hasFile('photo2')){
           $image=$request->file('photo2');
           $imageName='trialimage'.'_'.time().'.'.$image->getClientOriginalExtension();
           Image::make($image)->save(base_path('public/contents/uploads/trial/'.$imageName));
            $input['photo2']=$imageName;
        }





       $addData=trial::create($input);
        if($addData){
         Session::flash('status','value');
           return redirect()->back();
       }else{
         Session::flash('error','value');
           return redirect()->back();
       }

    }

  public function sendmail(Request $request){

      $input = $request->all();

      print_r($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $publish=trial::where('status',0)->where('id',$id)->update([
        'status' => 1,
      ]);
       return view('backend.email.view', ['show' => trial::findOrFail($id)]);

    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.email.compose', ['edit' => trial::findOrFail($id)]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */






    public function destroy($id) {
      $deletedata=trial::findOrFail($id);
      $deletedata->delete();
       if($deletedata){
        Session::flash('status','value');
          return redirect(route('trial.index'));
      }else{
        Session::flash('error','value');
          return redirect(route('trial.index'));
      }

    }


















}
