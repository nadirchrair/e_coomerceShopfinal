<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Http\Requests\storeProductRequest;
use App\Http\Requests\updateProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('admin.products.products',['produit'=>Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
$data['categorie']=Categorie::all();
        return view('admin.products.insert',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(storeProductRequest $request)
{
    // Validate the incoming request


    // Save the product to the database
    try {
        $validate = $request->validated();

        $image = $request->file('image')->store('public/assets/uploads/Products');
        $product = new Product();
        $product->categorie_id =$request->categorie_id;
        $product->name =$request->name;
        $product->slug = $request->slug;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->selling_price = $request->selling_price;
        $product->qty = $request->qty;
        $product->tax = $request->tax;
        $product->status = $request->status ? '1' : '0';
        $product->trend = $request->trend ? '1' : '0';
        $product->meta_title =$request->meta_title;
        $product->meta_keywords = $request->meta_keywords;
        $product->meta_descrption = $request->meta_descrption;
        $product->image = $image;
        $product->save();

        toastr()->success(trans("messages_trans.success_save"), 'Congrats', ['timeOut' => 5000]);

        return redirect()->route('products.index');

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
    public function edit(Product $product)
    {
        $data['product']=$product;
        $data['categorie']=Categorie::all();
        return view('admin.products.updateproduit',$data);

    }

    /**
     * Update the specified resource in storage.
    */

    public function update(updateProductRequest $request, Product $product)
    {
        try {
            $image=$product->image;
            if ($request->hasFile('image')){
                Storage::delete($product->image);
                $image = $request->file('image')->store('public/assets/uploads/Products');

            }
            $product->update([
            'categorie_id'=>$request->categorie_id,
            'name' =>$request->name,
            'slug' => $request->slug,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'price' => $request->price,
            'selling_price' => $request->selling_price,
            'qty' => $request->qty,
            'tax' => $request->tax,
            'status' => $request->status ? '1' : '0',
            'trend' => $request->trend ? '1' : '0',
            'meta_title' =>$request->meta_title,
            'meta_keywords' => $request->meta_keywords,
            'meta_descrption' => $request->meta_descrption,
            'image' => $image,]);
          //  $product->save();

            toastr()->success(trans("update succes"), 'Congrats', ['timeOut' => 5000]);

            return redirect()->route('products.index');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Storage::delete($product->image);
        $product->delete();
        toastr()->success(trans("delete succes"), 'Congrats', ['timeOut' => 5000]);
        return redirect()->route('products.index');

    }
    }