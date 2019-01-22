<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;
use Carbon\Carbon;
use Session;
use Image;
class menuController extends Controller
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
         return view('backend.menu.index', ['menus' => menu::orderBy('menu_si','ASC')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $max=menu::max('menu_si');

       return view('backend.menu.create',compact('max'));
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
               'url' => 'required',
               'menu_si' => 'required|unique:menus',
               'icon' => 'required',
            ],[
               'title.required' => 'Menu name is required',
               'url.required' => 'Menu URL is required',
               'menu_si.required' => 'Menu sirial is required',
               'menu_si.unique' => 'Menu sirial number already exsist try another number',
                'icon.required' => 'Menu icon is required',
            ]);

           $addData=menu::create($input);
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
     return view('backend.menu.edit', ['edit' => menu::findOrFail($id)]);
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
    $getdata=menu::findOrFail($id);
      $input = $request->all();
       $this->validate($request,[
         'title' => 'required',
         'url' => 'required',
         'title.required' => 'Menu name is required',
         'url.required' => 'Menu URL is required',
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
      $deletedata=menu::findOrFail($id);
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
