<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\beforeAfter;
use App\Models\Categorie;
use App\Models\Feedback;
use App\Models\Products;
use App\Models\SiteConfig;
use App\Models\Slider;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function mainpage(){
        $categories=Categorie::where('status',0)->get();
      $site_config=SiteConfig::where('id',1)->first();
      $before_column=beforeAfter::where('id',1)->first();
      $slider=Slider::where('id',1)->first();
        return view('front/welcome',compact('categories','site_config','before_column','slider'));
    }
    public function projectPage(Request $request){
        $projects=Products::where('category_id',$request->category_id)->get();
        $site_config=SiteConfig::where('id',1)->first();
        return view('front/project',compact('projects','site_config'));
    }

    public function feedback(Request $request){
            $message= new Feedback();
            $message->name = $request->name;
            $message->email = $request->email;
            $message->phoneNumber = $request->phoneNumber;
            $message->description = $request->description;
            $message->save();
            return to_route('mainpage');
    }
}
