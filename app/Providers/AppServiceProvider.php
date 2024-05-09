<?php

namespace App\Providers;

use App\Models\FooterItem;
use Illuminate\Support\ServiceProvider;
use App\Models\MenuItem;
use App\Models\Banner;
use App\Models\Iframe;
use App\Models\SocialMedia;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
          $menuItems = MenuItem::where('status','Enabled')->get();
           view()->share('menuItem',$menuItems);

           $footerItems = FooterItem::where('status' , 'Enabled')->get();
           view()->share('footerItem',$footerItems);

           $banners = Banner::all();
           view()->share('banner',$banners);

           $media = SocialMedia::all();
           view()->share('media',$media);

           $youtube = Iframe::where('iframe','Youtube')->get();
           view()->share('youtube',$youtube);

           $map = Iframe::where('iframe','Map')->get();
           view()->share('map',$map);
    }
}
