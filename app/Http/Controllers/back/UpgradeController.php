<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\beforeAfter;
use App\Models\Categorie;
use App\Models\Products;
use App\Models\SiteConfig;
use App\Models\Slider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class UpgradeController extends Controller
{
    //Kategori Güncelleme
    public function getCategory($id){
        $category=Categorie::where('id',$id)->first();
        return view('panel.update.updateCategory',compact('category'));
    }
    public function postCategory(request $request ,$id){
        $category=Categorie::find($id);
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->box_text=$request->box_text;
        if ($request->hasFile('mainpage_photo')){
            $imageName=$request->name .'.'.$request->mainpage_photo->getClientOriginalExtension();
            $request->mainpage_photo->move(public_path('uploads'),$imageName);
            $category->mainpage_photo = 'uploads/'.$imageName;
        }
        $category->save();
        return to_route('admin.show.category')->withSuccess(1);
    }
    public function getProject($id){
        $categories=Categorie::all();
        $product=Products::where('id',$id)->first();
        return view('panel.update.updateProduct',compact('product','categories'));
    }
    public function postProduct(Request $request,$id){
        $products= Products::find($id);
        $products->category_id=$request->category_id;
        $products->title = $request->title;
        $products->description = $request->description;
        $products->slug=$request->slug;
        $products->created_at =now();
        $products->save();
        return to_route('admin.show.product');
    }

    public function getSiteConfigs(){
        $site_configs=SiteConfig::where('id',1)->first();
        return view('panel.update.updateSiteConfigs',compact('site_configs'));
    }
    public function postSiteConfigs(Request $request){
        $site_config=SiteConfig::where('id',1)->first();
        $site_config->phoneNumber=$request->phoneNumber;
        $site_config->about_us=$request->about_us;
        $site_config->email=$request->email;
        $site_config->adress=$request->adress;
        $site_config->behance_url=$request->behance_url;
        $site_config->twitter_url=$request->twitter_url;
        $site_config->facebook_url=$request->facebook_url;
        $site_config->save();
        return to_route('admin.panel');
    }
    public function getBeforeAfter(){
        return view('panel.update.updateBeforeAfter');
    }
    public function postBeforeAfter(Request $request){
        $column=beforeAfter::where('id',1)->first();
        if ($request->hasFile('photo_1')){
            $imageName='slider1' .'.'.$request->photo_1->getClientOriginalExtension();
            $request->photo_1->move(public_path('uploads'),$imageName);
            $column->photo_1 = 'uploads/'.$imageName;
        }
        if ($request->hasFile('photo_2')){
            $imageName='slider2' .'.'.$request->photo_2->getClientOriginalExtension();
            $request->photo_2->move(public_path('uploads'),$imageName);
            $column->photo_2 = 'uploads/'.$imageName;
        }
        $column->save();
        return to_route('admin.panel');
    }
    public function getSlider(){
        return view('panel.update.updateSlider');
    }
    public function postSlider(Request $request){
        $slider=Slider::where('id',1)->first();
        if ($request->hasFile('photo_1')){
            $imageName='slidermain1' .'.'.$request->photo_1->getClientOriginalExtension();
            $request->photo_1->move(public_path('uploads'),$imageName);
            $slider->photo_1 = 'uploads/'.$imageName;
        }
        if ($request->hasFile('photo_2')){
            $imageName='slidermain2' .'.'.$request->photo_2->getClientOriginalExtension();
            $request->photo_2->move(public_path('uploads'),$imageName);
            $slider->photo_2 = 'uploads/'.$imageName;
        }
        if ($request->hasFile('photo_3')){
            $imageName='slidermain3' .'.'.$request->photo_3->getClientOriginalExtension();
            $request->photo_3->move(public_path('uploads'),$imageName);
            $slider->photo_3 = 'uploads/'.$imageName;
        }
        if ($request->hasFile('photo_4')){
            $imageName='slidermain4' .'.'.$request->photo_4->getClientOriginalExtension();
            $request->photo_4->move(public_path('uploads'),$imageName);
            $slider->photo_4 = 'uploads/'.$imageName;
        }
        if ($request->hasFile('photo_5')){
            $imageName='slidermain5' .'.'.$request->photo_5->getClientOriginalExtension();
            $request->photo_5->move(public_path('uploads'),$imageName);
            $slider->photo_5 = 'uploads/'.$imageName;
        }
        $slider->save();
        return to_route('admin.panel');
    }
}
