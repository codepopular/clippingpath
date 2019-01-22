<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\servicecat;
use Carbon\Carbon;
use Session;
use Image;
class servicecatController extends Controller
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
         return view('backend.servicecat.index', ['servicecat' => servicecat::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       return view('backend.servicecat.create');

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
      ],[
         'title.required' => 'Category Title is required',
      ]);

     $addData=servicecat::create($input);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return view('backend.servicecat.edit', ['edit' => servicecat::findOrFail($id)]);
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
      $getdata=servicecat::findOrFail($id);
        $input = $request->all();
         $this->validate($request,[
           'title' => 'required',
        ]);

        $updatedata=$getdata->fill($input)->save();
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
      $deletedata=servicecat::findOrFail($id);
      $deletedata->delete();
       if($deletedata){
        Session::flash('status','value');
          return redirect()->back();
      }else{
        Session::flash('error','value');
          return redirect()->back();
      }
    }
}
