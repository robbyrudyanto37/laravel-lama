<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsCatalog extends Controller
{

public function productscatalog(){
        $productscatalog = Products::all(); //select * from Products
        return view('content.products', compact('productscatalog'));
    }
}