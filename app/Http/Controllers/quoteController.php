<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quote;
use Session;
use Image;
class quoteController extends Controller
{
    
  public function __construct()
    {
        $this->middleware('auth', ['only' => ['index']]);
    }
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('backend.quote.index',['get_quote' => quote::orderBy('id','DESC')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        // Avoid html tags
      $input['des']=strip_tags($request->des);
      $input['name']=strip_tags($request->name);
      $input['address']=strip_tags($request->address);
      $input['website']=strip_tags($request->website);
      $input['phone']=strip_tags($request->phone);
      $input['country']=strip_tags($request->country);
      $input['currency']=strip_tags($request->currency);



      $this->validate($request,[
        'photo' =>  ' required|mimes:jpeg,jpg,png,gif|max:3024',
        'service_type' =>  'required|max:255',
        'turnaround' =>  'required',
        'need_path' =>  'required',
        'qty' =>  'required',
        'find_us' =>  'required',
        'des' =>  'required|max:255',
        'name' =>  'required',
        'address' =>  'required',
        'website' =>  'required',
        'company' =>  'required',
        'phone' =>  'required',
        'country' =>  'required',
        'currency' =>  'required',
        'captcha' => 'required|captcha',
     ],[

        'service_type.required' => 'Service is required',
        'turnaround.required' => 'turnaround is required',
        'need_path.required' => 'Need Path is required',
        'qty.required' => 'This filled is required',
        'find_us.required' => 'This filled is required',
        'des.required' => 'The Quote Description is required',
        'name.required' => 'Name is required',
        'address.required' => 'Address is required',
        'email.required' => 'Email is required',
        'website.required' => 'Website is required',
        'company.required' => 'Company is required',
        'phone.required' => 'Phone is required',
        'country.required' => 'country is required',
        'currency.required' => 'currency is required',
        // image
        'photo.required' => 'Quote image is required',
        'photo.max' => ' Maximum Upload File size 2MB',
        'photo.mimes' => 'image format allow only jpeg,jpg,png,gif',
        // captcha
        'captcha.required' => 'Captcha validate required',
        'captcha.captcha' => 'Type Correct Capcha',

     ]);


      // image uplaod
      if($request->hasFile('photo')){
        $image=$request->file('photo');
        $imageName='sample'.'_'.time().'.'.$image->getClientOriginalExtension();
        Image::make($image)->save(base_path('public/contents/uploads/quote/'.$imageName));
         $input['photo']=$imageName;
     }

     // array to string
     $getservice = implode(', ', $_POST['service_type']);
     $input['service_type']=$getservice;

     // insert data
    $addquote=quote::create($input);

      // message show
      if($addquote){
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
         return view('backend.quote.show',['show' => quote::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
      $deletedata=quote::findOrFail($id);
      $deletedata->delete();
      if (file_exists(public_path().'/contents/uploads/quote/'.$deletedata->photo)) {
          unlink(public_path().'/contents/uploads/quote/'.$deletedata->photo);
        }
       if($deletedata){
        Session::flash('status','value');
          return redirect()->back();
      }else{
        Session::flash('error','value');
          return redirect()->back();
      }
    }

}
