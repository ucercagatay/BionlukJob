<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function switchCategory(Request $request,$id){
        $category=Categorie::find($request->id);
        $category->status=1;
        $category->save();
        return to_route('admin.show.category');
    }
}
