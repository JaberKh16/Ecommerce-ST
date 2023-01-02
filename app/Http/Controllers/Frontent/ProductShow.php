<?php

namespace App\Http\Controllers\Frontent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\AddProduct;

class ProductShow extends Controller
{
    function home(){
        $datashow = AddProduct::all();
        return view('frontent.index',compact('datashow'));
    }

    function productdetail($id){
        $datashow = AddProduct::find($id);
        return view('frontent.pages.productdetails',compact('datashow'));
    }



    
}