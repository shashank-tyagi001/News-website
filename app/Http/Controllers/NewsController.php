<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\Contact;
use App\Models\MenuItem;
use App\Models\SubMenuItem;
use App\Models\FooterItem;
use App\Models\Banner;
use App\Models\Iframe;
use App\Models\SocialMedia;
use App\Models\SubFooterItem;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class NewsController extends Controller
{


   public function index()
   {
      $registers = Register::all();
       return view('index',['registers',$registers]);
   }

   public function singlePage($id)
   {
         $register = DB::table('registers')->find($id);
         return view('singlePage', compact('register'));
   }

   public function contact()
   {
    return view('contact');
   }

   public function storeContact(Request $request)
   {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);
        $contact = Contact::create($validatedData);
        return response()->json(['success'=>true,'data'=>$contact],201);
   }


   public function addNews()
   {
    return view('addNews');
   }


//Function to save the data in the database of Add News
   public function added(Request $request)
   {
       $validator = Validator::make($request->all(), [
           'fname' => 'required|min:5',
           'lname' => 'required',
           'email' => 'required|unique:registers,email',
           'title' => 'required',
           'area' => 'required',
           'description' => 'required|max:255',
           'image' => 'required|file|image|mimes:jpg,png,jpeg|max:2048'
       ]);
       if ($validator->passes()) {
           $register = new Register;
           $register->fname = $request->fname;
           $register->lname = $request->lname;
           $register->email = $request->email;
           $register->title = $request->title;
           $register->area = $request->area;
           $register->description = $request->description;
           if ($request->hasFile('image')) {
               $image = $request->file('image');
               $imageName = time() . '.' . $image->getClientOriginalExtension();
               $image->move(public_path('uploads/newsImage'), $imageName);
               $register->image = $imageName;
           }
           $register->save();
           return redirect('addNews')->with('success', 'News will be added');
       } else {
           return redirect()->back()->withErrors($validator)->withInput();
       }
   }


 // Function to show the data at index Page
   public function showNews()
   {
     $register = Register::all();
     return view('index',['registers' => $register]);
   }


   //Function for show the database table
   public function list()
   {
    $register = Register::get();
     return view('list',['registers' => $register]);
   }

   //Functionfor show the Update data on form
   public function edit($id)
   {
    $register = Register::find($id);
    return view('updateNews' ,['registers' => $register]);
   }


   //Function for Update the Content
   public function updateNews(Request $request,$id)
   {
    $request = new \Illuminate\Http\Request;
      $register = Register::find($id);
      $register->fname = $request->fname;
      $register->lname = $request->lname;
      $register->email = $request->email;
      $register->title = $request->title;
      $register->area = $request->area;
      $register->description = $request->description;
      if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/newsImage'), $imageName);
        $register->image = $imageName;
    }
    $register->save();
      return redirect('list')->with('success', 'News will be updated');
   }


   //Function for delete the content
   public function deleteNews($id)
   {
    $register = Register::find($id);
    $register->delete();
    return redirect('list')->with('success', 'Content Will be deleted');
   }

   //Function for the latestNews
   public function latestNews()
   {
    {
        $newskey=env('NEWS_API_KEY');
        $response = Http::get('https://newsapi.org/v2/top-headlines?country=us&apiKey='.$newskey);
        $news = $response->json();
        $newsdata = $news['articles'];
        return view('/latestNews',compact('newsdata'));
    }
   }

   //Function for sports category and Tag
   public function sports()
   {
    $register = Register::all();
    return view('sports',['registers'=>$register]);
   }

   //Function for entertainment
   public function entertainment()
   {
    $register = Register::all();
    return view('entertainment',['registers'=>$register]);
   }

   public function technology()
   {
    $register = Register::all();
    return view('technology',['registers'=>$register]);
   }


   public function business()
   {
    $register = Register::all();
    return view('business',['registers'=>$register]);
   }

   public function listApi()
   {
    return Register::all();
   }


    public function saveContacts(Request $request){

       $request =  Request::create('/api/addApi/', 'POST',[
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        $response = Route::dispatch($request);
        return redirect()->back()->with('success','contact saved!');
    }

    public function search($name)
    {
        return Contact::where("name","like","%".$name."%")->get();
    }



    public function testData(Request $request)
    {
        $rules = array(
            "name" => "required",
            "email" => "required"
        );

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails())
        {
            return response()->json($validator->errors(),401);
        }else{
                $contact = new Contact;
                $contact->name = $request->name;
                $contact->email = $request->email;
                $contact->subject = $request->subject;
                $contact->message = $request->message;
                $result = $contact->save();
                if($result)
                {
                 return ["Result" => "Data Saved Successfully"];
                }else{
                 return ["Result" => "Data Not saved Successfully"];
                }

        }}

        public function sportsApi()
        {
            return view('sportsApi');
        }

        public function businessApi()
        {
            return view('businessApi');
        }


        public function technologyApi()
        {
            return view('technologyApi');
        }

        public function entertainmentApi()
        {
            return view('entertainmentApi');
        }

        //Dynamic Menus
        public function menuItem()
        {
            return view('CMD\MenuItem');
        }

        public function menuStore(Request $request)
        {
            MenuItem::create([
                'name' => $request->name,
                'status' => $request->status,
                'link' => $request->link
            ]);
            return redirect()->back();
        }

        //Dynamic SubMenus
        public function subMenuItem()
        {
            $menuItems = MenuItem::where('status','Enabled')->get();
            return view('CMD\SubMenuItem',compact('menuItems'));
        }

        public function subMenuStore(Request $request)
        {
            SubMenuItem::create([
                'name' => $request->name,
                'menu_item_id' => $request->menu_item_id,
                'status' => $request->status,
                'link' => $request->link
            ]);
            return redirect()->back();
        }

        //Dynamic Footer Menu
        public function footerItem()
        {
            return view('CMD\FooterItem');
        }

        public function footerStore(Request $request)
        {
            FooterItem::create([
                'name' => $request->name,
                'status' => $request->status,
                'link' => $request->link
            ]);
            return redirect()->back();
        }

        //Dynamic Footer SubMenu
        public function subFooterItem()
        {
            $footerItems = FooterItem::where('status','Enabled')->get();
            return view('CMD\SubFooterItem',compact('footerItems'));
        }

        public function subFooterStore(Request $request)
        {
            SubFooterItem::create([
                'name' => $request->name,
                'footer_item_id' => $request->footer_item_id,
                'status' => $request->status,
                'link' => $request->link
            ]);
            return redirect()->back();
        }

        //Banner
        public function banner()
        {
            return view('CMD\Banner');
        }

        public function bannerStore(Request $request)
        {
            if ($request->hasFile('banner')) {
                $image = $request->file('banner');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/newsImage'), $imageName);
            }
            // Create a new Banner instance and fill its attributes
            $banner = new Banner();
            $banner->heading = $request->heading;
            $banner->description = $request->description;
            // If a banner file was uploaded, assign its filename to the 'banner' attribute
            if (isset($imageName)) {
                $banner->banner = $imageName;
            }
            // Save the banner to the database
            $banner->save();
            return redirect()->back();
        }

        //Social Media
        public function socialMedia()
        {
            $media = DB::table('social_media')->get();
            return view('CMD.SocialMedia',compact('media'));
        }

        public function socialStore(Request $request)
        {
            SocialMedia::create([
                 'icon' => $request->icon,
                 'link' => $request->link
            ]);
            return redirect()->back()->compact();
        }

        //Youtube and Map
        public function iframe()
        {
            $youtube = DB::table('iframes')->where('iframe','Youtube')->get();
            return view('CMD.Iframe',compact('youtube'));
        }

        public function iframeStore(Request $request)
        {
            Iframe::create([
               'iframe' => $request->frame,
               'link' => $request->link
            ]);
            $youtube = DB::table('iframes')->where('iframe', 'Youtube')->first();
            if ($youtube !== null) {
                $newLink = $youtube->link;
                DB::table('iframes')->where('iframe', 'Youtube')->update(['link' => $newLink]);
            }
            $map = DB::table('iframes')->where('iframe','Map')->first();
            if($map !== null){
                $newestlink = $map->link;
                DB::table('iframes')->where('iframe','Map')->update(['link' => $newestlink]);
            }
            return redirect()->back();
        }

        //Search Engine
        public function searchEngine(Request $request)
        {
            $search = $request->input('search');
            if($search === null || $search === ''){
               return "Search is empty";
            }else{
                $find = DB::table('registers')->where('area', 'like', "%$search%")->get();
            }
            return view('SearchEngine',compact('find'));
        }

    
}
