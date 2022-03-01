<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowController extends Controller
{
    public function showDashboard(){
        return view('panel/home');
    }
    public function showCategories(){
        $categories=Categorie::where('status',0)->get();
        return view('panel/show/categories',compact('categories'));
    }
        public function showProducts(){
        $products=Products::all();
        return view('panel/show/showProducts',compact('products'));
        }
        public function pasifCategories(){
            $categories=Categorie::where('status',1)->get();
            return view('panel/show/pasifCategories',compact('categories'));
        }
}
