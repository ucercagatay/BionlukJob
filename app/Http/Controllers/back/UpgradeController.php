<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Products;
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
}
