<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product as ProductModel;

class Product extends Controller
{
    public function store()
    {
        return view('products', ['all' => ProductModel::all()]);
    }

    public function create(Request $req)
    {
        $validate = $req->validate([
            'name' => ['required', 'max:255'],
            'amount' => ['required', 'digits_between:1,11'],
            'price' => ['required', 'digits_between:1,11']
        ]);

        ProductModel::create($validate);

        return back();
    }
}
