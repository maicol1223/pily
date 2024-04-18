<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support;
use Carbon\Carbon;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view("products.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("products.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    
        $product=Product::create($request->all());
        $image = $request->file('image');
        $slug = str::slug($request->nombre);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/products'))
            {
                mkdir('uploads/products',0777,true);
            }
            $image->move('uploads/products',$imagename);
        }else{
            $imagename = "";
        }

        $products = new Product();
			$products->id = $request->id;
			$products->name = $request->name;
			$products->description = $request->description;
			$products->amount = $request->amount;
			$products->price = $request->price;
            $products->status = $request->status;
            $products->image = $imagename;
			$product->save();
            return redirect()->route('products.index')->with('successMsg','El registro se guardó exitosamente');

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