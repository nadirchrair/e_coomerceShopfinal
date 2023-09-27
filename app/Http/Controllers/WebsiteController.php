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







}