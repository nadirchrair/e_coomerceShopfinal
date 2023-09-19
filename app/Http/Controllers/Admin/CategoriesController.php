<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\storeCategorieRequest;
use App\Http\Requests\updateCatgorieRequest;
use App\Models\Categorie;
use Illuminate\Support\Facades\Storage;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Categorie::select('id', 'name', 'image', 'is_shopping', 'is_popular')->get();

        return view('admin.category.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(storeCategorieRequest $request)
    {
         try {
            $validate = $request->validated();

            $image = $request->file('image')->store('public/assets/uploads/Category');
            $category = new Categorie();
            $category->name = ['ar' => $request->name_ar, 'en' => $request->name_en];
            $category->slug = $request->slug;
            $category->description = ['ar' => $request->description_ar, 'en' => $request->description_en];
            $category->is_shopping = $request->is_shopping ? '1' : '0';
            $category->is_popular = $request->is_popular ? '1' : '0';
            $category->meta_title = ['ar' => $request->meta_title_ar, 'en' => $request->meta_title_en];
            $category->meta_description = ['ar' => $request->meta_description_ar, 'en' => $request->meta_description_en];
            $category->meta_keywords = $request->meta_keywords;
            $category->image = $image;
            $category->save();

            toastr()->success(trans("messages_trans.success_save"), 'Congrats', ['timeOut' => 5000]);

            return redirect()->route('categorie.index');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }





    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = Categorie::where('id',$id)->first();
        //return view('admin.category.show',['singlecat'=>$data]);
        //dd(route('categorie.index'));
        dd($data);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

     //   $data= $category;
       $data = Categorie::where('id',$id)->first();

        return view('admin.category.edit',['category'=>$data]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateCatgorieRequest $request,Categorie $category)
    {

try{

    $image=$category->image;

if ($request->hasFile('image')){
    Storage::delete('image');
    $image = $request->file('image')->store('public/assets/uploads/Category');

}
    $category->update([

        'name' => ['ar' => $request->name_ar, 'en' => $request->name_en],
        'slug' => $request->slug,
        'description' => ['ar' => $request->description_ar, 'en' => $request->description_en],
        'is_shopping' => $request->is_shopping ? '1' : '0',
        'is_popular' => $request->is_popular ? '1' : '0',
        'meta_title' => ['ar' => $request->meta_title_ar, 'en' => $request->meta_title_en],
        'meta_description' => ['ar' => $request->meta_description_ar, 'en' => $request->meta_description_en],
        'meta_keywords' => $request->meta_keywords ,
        'image'=>$image,
    ]);

    toastr()->success(trans("update succes"), 'Congrats', ['timeOut' => 5000]);
    return redirect()->route('categorie.index');
}
catch (\Exception $e) {
    return redirect()->back()->withErrors(['error' => $e->getMessage()]);
}

//        return $request ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $category)
    {
        Storage::delete($category->image);
        $category->delete();
        return redirect()->route('categorie.index');
    }

}