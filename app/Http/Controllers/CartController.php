<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\Detail_Transaction;

class CartController extends Controller
{
    public function add(Request $request, $id) {
        $request->validate([
            "qty" => "required"
        ]);

        Cart::create([
            "customer_id" => Auth::id(),
            "product_id" => $id,
            "qty" => $request->qty
        ]);

        return redirect()->back()->with("success", "success add product to cart");
    }

    public function clear() {
        foreach (Auth::user()->carts as $key => $value) {
            $value->delete();
        }

        return redirect()->back()->with("success", "success clear all carts");
    }

    public function checkout() {
        $code = [];
    
        foreach (Auth::user()->carts as $key => $value) {
            $transaction = Transaction::create([
                "customer_id" => Auth::id(),
                "date" => date("Y-m-d"),
                "code_transaction" => "INV/" . date("Ymd") . "--"
            ]);

            $transaction->update([
                "code_transaction" => "INV/" . date("Ymd") . \str_pad($transaction->id, 3, "0", \STR_PAD_LEFT)
            ]);

            Detail_Transaction::create([
                "product_id" => $value->product_id,
                "qty" => $value->qty,
                "transaction_id" => $transaction->id
            ]);

            $code[] = $transaction->code_transaction;

            Product::find($value->product_id)->update([
                "stock" => Product::find($value->product_id)->stock - $value->qty
            ]);

            $value->delete();
        }

        if(!sizeof($code)) {
            return redirect()->back();
        }

        return redirect()->route("customer.carts.summary")->with("success-checkout", $code);
    }

    public function summary() {
        return view("customers.pages.summary");
    }
}
