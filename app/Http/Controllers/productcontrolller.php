<?php

namespace App\Http\Controllers;

use App\Models\Products;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class productcontrolller extends Controller
{
    public function addproduct(Request $req)
    {
        $formdata_produc = $req->validate([
            "productname" => ['required', 'min:3'],
            "description" => ['required'],
            "price" => ['required'],
            "oldprice" => ['required'],
            "image" => ['required'],
        ]);
        $formdata_produc['image'] = $req->file('image')->store('product-images', 'public');
        Products::create($formdata_produc);
        return back()->with('message', 'Product Added Successfully');
    }

    public function findproduct($id)
    {
        $productfind = Products::find($id);
        return view('pages.user.single-product', compact('productfind'));
    }
}
