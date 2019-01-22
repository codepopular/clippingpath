<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// delete cache

//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return redirect()->back()->with('success','Successfully Clear Cache facade value.');
});
//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
      return redirect()->back()->with('success','Successfully Reoptimized.');
});

//Clear Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return redirect()->back()->with('success','Successfully Clear Route cache.');
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
      return redirect()->back()->with('success','Successfully Clear View cache.');
});
//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return redirect()->back()->with('success','Successfully Clear Config cache.');
});





Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'websiteController@index')->name('index');

Auth::routes();





/***************Backend*******************/


/*********** slider **********/

Route::resource('slider','sliderController');
Route::resource('customer','customerCotroller');
Route::resource('sample','sampleController');
Route::resource('menu','menuController');
Route::resource('servicemenu','servicemenuController');

Route::resource('servicecat','servicecatController');
Route::resource('service','serviceController');


Route::resource('testimonial','testimonialController');
Route::resource('ourblog','blogController');

Route::resource('trial','trialController');
Route::get('trial1','trialController@sendmail');


Route::resource('quote','quoteController');


Route::any('serach','searchController@index')->name('search');

Route::get('/about-us','websiteController@about_us')->name('about_us');

Route::get('/free-trial','websiteController@free_trial')->name('free_trial');

Route::get('/faq','websiteController@faq')->name('faq');

Route::get('/requet-a-quote','websiteController@quote')->name('quote');

Route::get('/privacy-policy','websiteController@privacy_policy')->name('privacy-policy');

Route::get('/pricing','websiteController@pricing')->name('pricing');

Route::get('/blog','websiteController@blog')->name('blog');

Route::get('blog/{blog_url}','websiteController@blog_single')->name('blog_single');

Route::get('/contact','websiteController@contact')->name('contact');


Route::resource('myuser','myuserController');


Route::post('useremail','customermailController@index')->name('customermail');


Route::resource('setting', 'settingController');

Route::post('header/{id}', 'settingController@header')->name('header');

Route::post('buttonlink/{id}', 'settingController@buttonlink')->name('buttonlink');

Route::post('footer/{id}', 'settingController@footer')->name('footer');



Route::resource('socialicon','socialController');

Route::get('service1','websiteController@service')->name('service');
Route::get('/{slug}','websiteController@single_service')->name('single_service');


// capcha Controller
