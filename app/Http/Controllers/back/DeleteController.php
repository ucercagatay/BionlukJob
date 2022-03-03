<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function switchCategory(Request $request,$id){
        $category=Categorie::find($request->id);
        if($category->status==0){        $category->status=1;
        }
        else{
            $category->status = 0;
        }
        $category->save();
        return to_route('admin.show.categories');
    }
}
