<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Product;
class WebsiteController extends Controller
{
    public function index()
    {
        $data['products']=Product::where('trend',1)->get();
        $data['categorie']=Categorie::where('is_popular',1)->get();

        return view('website.index',$data);
    }
public function allcategories(){
    $data['categorie']=Categorie::all();
    return view('website.allcat',$data);

}
public function get_categorie($slug){

    $categorie=Categorie::where('slug',$slug)->first();
    if ($categorie) {
        // The 'Categorie' object exists, so you can access its properties safely
        return view('website.getcat',['categorie'=>$categorie]);
    } else {
        // Handle the case where no 'Categorie' object is found (e.g., redirect or display an error message)
        return redirect()->back(); // Replace 'not_found_route' with the appropriate route or action.
    }
}

}