<?php

namespace App\Http\Controllers\customer;

use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function landing_page() {
        $products = Product::get()->take(6);

        return view("customers.pages.landing-page", compact("products"));
    }

    public function products() {
        $products = Product::get();
        $categories = Categorie::get();

        return view("customers.pages.products", compact("products", "categories"));
    }

    public function carts() {
        return view("customers.pages.carts");
    }

    public function search(Request $request) {
        $products = [];

        if($request->search) {
            $products = Product::where("name", $request->search)->orWhere("name", "like", "%" . $request->search . "%")->get();
        }

        return view("customers.pages.search", compact("products"));
    }

    public function detail_product(Request $request, $id) {
        $product = Product::find($id);
        $categories = Product::where("categorie_id", $product->categorie_id)->get();
        $products = Product::get()->take(3);

        return view("customers.pages.detail_product", compact("product", "categories", "products"));
    }
}
