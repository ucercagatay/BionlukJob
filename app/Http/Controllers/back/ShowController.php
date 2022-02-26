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
        $categories=Categorie::all();
        return view('panel/show/categories',compact('categories'));
    }
        public function showProducts(){
        $products=Products::all();
        return view('panel/show/showProducts',compact('products'));
        }
}
