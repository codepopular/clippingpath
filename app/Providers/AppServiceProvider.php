<?php

namespace App\Providers;
use App\menu;
use App\servicecat;
use App\service;
use App\slider;
use App\customer;
use App\sample;
use App\blog;
use App\trial;
use App\social;
use App\buttonlink;
use App\general;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

      $servicecat=servicecat::orderBy('id','ASC')->get();
      $header=menu::orderBy('menu_si','ASC')->get();
       view::share('header',$header);

      $menu=menu::orderBy('menu_si','DESC')->get();
       view::share('menu',$menu);


      $servicecat=servicecat::orderBy('id','ASC')->get();
       view::share('servicecat',$servicecat);

       // UNREAD MESSAGE
      $get_trial=trial::orderBy('id','DESC')->where('status',0)->get();
      $unred=trial::where('status',0)->get()->count();
      $total=trial::count();
       view::share('unred',$unred);
       view::share('get_trial',$get_trial);
       view::share('total',$total);

      // get soical Information

        $soicalinfo=social::FirstorFail();
        view::share('soicalinfo',$soicalinfo);

        $buttonlink=buttonlink::FirstorFail();
        view::share('buttonlink',$buttonlink);

        $general=general::FirstorFail();
        view::share('general',$general);


       // count
        // slider count
       $allslider=slider::get()->count();
        view::share('allslider',$allslider);

        // customer count
       $customerall=customer::get()->count();
        view::share('customerall',$customerall);


        // service page count
       $serviceall=service::get()->count();
        view::share('serviceall',$serviceall);


        // service page count
       $blogall=blog::get()->count();
        view::share('blogall',$blogall);


        // service page count
       $sampleall=sample::get()->count();
        view::share('sampleall',$sampleall);





      Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
