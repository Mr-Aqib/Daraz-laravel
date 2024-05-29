<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class categorycontroller extends Controller
{
    public function addCategories(Request $req)
    {
        $formdata = $req->validate([
            "category" => ['min:3', 'max:40', 'string', 'required'],
            "image" => ["mimes:png,jpg,jpeg", 'required'],
        ]);
        $formdata['image'] = $req->file('image')->store('category_images', 'public');
        category::create($formdata);
    }
}