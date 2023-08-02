<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductStoreRequest;

class ProductController extends Controller
{
    public function create($lang) {
        app()->setLocale($lang);
        return view('products.create');
    }

    public function store(ProductStoreRequest $request) {

//        $request->validate([
//           'product' => 'required|min:5|max:7',
//           'price' => 'numeric|required|min:5|max:7',
//        ]);

        dd($request->all());
    }
}
