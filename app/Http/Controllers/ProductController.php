<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(10);

        return view("dashboard.products.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::get();

        return view("dashboard.products.create", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "price" => "required",
            "categorie_id" => "required",
            "description" => "required",
            "stock" => "required",
            "image" => "required|image"
        ]);

        $file = $request->file("image");
        $name_file = $file->getClientOriginalName();

        \Storage::putFileAs("public/uploads", $file, $name_file);

        Product::create([
            "name" => $request->name,
            "price" => $request->price,
            "description" => $request->description,
            "stock" => $request->stock,
            "categorie_id" => $request->categorie_id,
            "image" => "storage/uploads/$name_file"
        ]);

        return redirect()->route("products.index")->with("success", "success create product");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Categorie::get();
        $product = Product::find($id);

        return view("dashboard.products.edit", compact("categories", "product"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "name" => "required",
            "price" => "required",
            "categorie_id" => "required",
            "description" => "required",
            "stock" => "required",
            "image" => "nullable|image"
        ]);

        $product = Product::find($id);

        if($request->file("image")) {
            $file = $request->file("image");
            $name_file = $file->getClientOriginalName();

            \Storage::putFileAs("public/uploads", $file, $name_file);

            $product->update([
                "name" => $request->name,
                "price" => $request->price,
                "description" => $request->description,
                "stock" => $request->stock,
                "categorie_id" => $request->categorie_id,
                "image" => "storage/uploads/$name_file"
            ]);
        } else {
            $file = $request->file("image");
            $name_file = $file->getClientOriginalName();

            \Storage::putFileAs("public/uploads", $file, $name_file);

            $product->update([
                "name" => $request->name,
                "price" => $request->price,
                "description" => $request->description,
                "stock" => $request->stock,
                "categorie_id" => $request->categorie_id,
            ]);
        }

        return redirect()->route("products.index")->with("success", "success update product");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();

        return redirect()->back()->with("success", "success delete product");
    }
}
