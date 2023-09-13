<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\storeCategorieRequest;
use App\Models\Categorie;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.category.index');
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
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
//        return view('admin.category.edit');

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}