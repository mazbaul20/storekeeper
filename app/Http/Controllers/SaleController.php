<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;

class SaleController extends Controller
{
    function SalePage(){
        $products = DB::table("products")->get();
        return view('backend.pages.dashboard.sale',['products'=>$products]);
    }//end method
    function SaleStore(Request $request){
        $request->validate([
            'customer_name' => 'required|string',
            'product_id' => 'required|integer',
            'quantity' => 'required|integer'
        ]);

        // get product information from the products table
        $product = DB::table('products')->where('id', $request->input('product_id'))->first();
        $p_quantity = $product->quantity;
        $t_quantity = $request->input('quantity');
        
        if ($p_quantity < 1) {
            // Quantity is less than 1
            Toastr::warning('Stock Out', 'Title',["positionClass"=>"toast-top-center"]);
            return redirect()->back();
        }elseif ($p_quantity < $t_quantity){
            // For low Stock
            Toastr::warning('Low Stock', 'Title', ["positionClass" => "toast-top-center"]);
            return redirect()->back();
        }else{
            // Calculate sale quantity
            $update_quantity = $p_quantity - $t_quantity;

            // Calculate total price
            $totalPrice = $product->price * $request->input('quantity');

            // Insert data into the transactions table
            DB::table('transactions')->insert([
                'customer_name' => $request->input('customer_name'),
                'product_id' => $product->id,
                'product_name' => $product->product_name,
                'quantity' => $request->input('quantity'),
                'unit_price' => $product->price,
                'total_price' => $totalPrice
            ]);

            DB::table('products')->where('id', $product->id)->update([
                'quantity' => $update_quantity
            ]);
            Toastr::success('Successfull','Title',["positionClass" => "toast-top-center"]);
            return redirect()->route('transactions.page');
        }
    }
}
