<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;

class ProductController extends Controller
{
    function products(){
        $products = DB::table("products")->get();
        return view('backend.pages.dashboard.products', [
            'products' => $products
        ]);
    }// end method
    function create(){
        return view('backend.pages.dashboard.productCreate');
    }// end method

    function store(Request $request){
        $request->validate([
            'product_name' => 'required|string',
            'quantity' => 'required|integer',
            'price' => 'required|integer'
        ]);
        DB::table('products')->insert([
            'product_name' => $request->input('product_name'),
            'quantity' => $request->input('quantity'),
            'price' => $request->input('price')
        ]);
        Toastr::success('Product created successfull', 'Title', ["positionClass" => "toast-top-center"]);
        return redirect()->route('product.page');
    }// end method
    function Edit($id){
        $products = DB::table('products')->find($id);
        return view('backend.pages.dashboard.productEdit',['products'=>$products]);
    }// end method
    function Update(Request $request,$id){
        $request->validate([
            'product_name' => 'required|string',
            'quantity' => 'required|integer',
            'price' => 'required|integer'
        ]);
        DB::table('products')->where('id', $id)->update([
            'product_name' => $request->input('product_name'),
            'quantity' => $request->input('quantity'),
            'price' => $request->input('price')
        ]);
        Toastr::success('Product Updated successfull', 'Title', ["positionClass" => "toast-top-center"]);
        return redirect()->route('product.page');
    }// end method
    function Delete($id){
        DB::table('products')->where('id', $id)->delete();
        return redirect()->route('product.page');
    }
}
