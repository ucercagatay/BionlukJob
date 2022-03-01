<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Products;
use App\Models\ProductsImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AddController extends Controller
{
    //Kategoriler
    public function addCategory(){
        return view('panel/add/addCategory');
    }
    public function postCategory(Request $request){
        $category = new Categorie();
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->box_text = $request->box_text;
        $category->created_at =now();
            if ($request->hasFile('mainpage_photo')){
                $imageName=$request->name .'.'.$request->mainpage_photo->getClientOriginalExtension();
                $request->mainpage_photo->move(public_path('uploads'),$imageName);
                $category->mainpage_photo = 'uploads/'.$imageName;
            }
            $category->status = 0;
            $category->save();
            return to_route('admin.show.category');
                }
                //Product İşlemleri
            public function addProduct(){
            $categories=Categorie::all();
            return view('panel/add/addProduct',compact('categories'));
            }
            public function postProduct(Request $request){
            $products= new Products();
            $products->category_id=$request->category_id;
            $products->title = $request->title;
            $products->description = $request->description;
            $products->slug=$request->slug;
            $products->status=0;
            $products->created_at =now();
            $products->save();
            return to_route('admin.show.product');
            }
            //image işlemleri
            public function addImages(){
                $products=Products::all();
            return view('panel/add/addİmages',compact('products'));
            }
            public function postImages(Request $request){
        $files= [];
        if ($request->hasFile('image')){
            foreach($request->file('image') as $file){
                $name=time().rand(1,100).'.'.$file->getClientOriginalExtension();
                $file->move(public_path('uploads'),$name);
                $files=$name;
                $file=new ProductsImage();
                $file->product_id=$request->product_id;
                $file->image=$files;
                $file->created_at=now();
                $file->save();
            }
        }

            return to_route('admin.show.category');
            }
}
