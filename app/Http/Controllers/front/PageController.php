<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function mainpage(){
        $categories=Categorie::where('status',0)->get();
        return view('front/welcome',compact('categories'));
    }
}
