<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', [NewsController::class, 'showNews'])->name('index');

Route::get('singlePage/{id?}', [NewsController::class, 'singlePage'])->name('singlePage');

Route::get('contact', [NewsController::class, 'contact'])->name('contact');
Route::post('storeContact', [NewsController::class, 'storeContact'])->name('storeContact');

Route::get('addNews', [NewsController::class, 'addNews'])->name('addNews');
Route::post('added', [NewsController::class, 'added'])->name('added');


Route::get('list',[NewsController::class,'list'])->name('list');

Route::post('/updateNews/{id}',[NewsController::class,'updateNews'])->name('updateNews');
Route::get('/edit/{id}',[NewsController::class,'edit'])->name('edit');
Route::get('/deleteNews/{id}',[NewsController::class,'deleteNews'])->name('deleteNews');

Route::get('latestNews',[NewsController::class,'latestNews'])->name('latestNews');

Route::get('sports',[NewsController::class,'sports'])->name('sports');
Route::get('business',[NewsController::class,'business'])->name('business');
Route::get('technology',[NewsController::class,'technology'])->name('technology');
Route::get('entertainment',[NewsController::class,'entertainment'])->name('entertainment');

//used api routes
Route::post('savecontact-api',[NewsController::class,"saveContacts"])->name('savecontact-api');
Route::get('sportsApi',[NewsController::class,'sportsApi'])->name('sportsApi');
Route::get('businessApi',[NewsController::class,'businessApi'])->name('businessApi');
Route::get('technologyApi',[NewsController::class,'technologyApi'])->name('technologyApi');
Route::get('entertainmentApi',[NewsController::class,'entertainmentApi'])->name('entertainmentApi');

//Menu Item
Route::get('MenuItem',[NewsController::class,'menuItem'])->name('MenuItem');
Route::post('MenuStore',[NewsController::class,'menuStore'])->name('MenuStore');

//SubMenu Item
Route::get('SubMenuItem',[NewsController::class,'subMenuItem'])->name('SubMenuItem');
Route::post('SubMenuStore',[NewsController::class,'subMenuStore'])->name('SubMenuStore');

//FooterMenu Item
Route::get('FooterItem',[NewsController::class,'footerItem'])->name('FooterItem');
Route::post('FooterStore',[NewsController::class,'footerStore'])->name('FooterStore');

//SubFooter Item
Route::get('SubFooterItem',[NewsController::class,'subFooterItem'])->name('SubFooterItem');
Route::post('SubFooterStore',[NewsController::class,'subFooterStore'])->name('SubFooterStore');

//Banner For Ads
Route::get('Banner',[NewsController::class,'banner'])->name('Banner');
Route::post('BannerStore',[NewsController::class,'bannerStore'])->name('BannerStore');

//Social media
Route::get('SocialMedia',[NewsController::class,'socialMedia'])->name('SocialMedia');
Route::post('SocialStore',[NewsController::class,'socialStore'])->name('SocialStore');

//Iframes of youtube and map
Route::get('Iframe',[NewsController::class,'iframe'])->name('Iframe');
Route::post('iframeStore',[NewsController::class,'iframeStore'])->name('iframeStore');

//Search Engine
 Route::get('SearchEngine',[NewsController::class,'searchEngine'])->name('SearchEngine');

 //Dashboard
 Route::get('Dashboard',[DashboardController::class,'dashboard'])->name('Dashboard');
 Route::get('MainPage',[DashboardController::class,'mainPage'])->name('MainPage');

 //testing Purpose
 Route::get('getApi',[DashboardController::class,'getApi'])->name('getApi');
