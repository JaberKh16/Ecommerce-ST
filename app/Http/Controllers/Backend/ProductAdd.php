<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\AddProduct;
use Intervention\Image\Facades\Image;
use File;
class ProductAdd extends Controller{
    function addproducts(){
        return view('backend.pages.products.addProduct');
    }
    function insertData(Request $request){
        if($request->image){
            $image = $request->file('image');
            $customimage =rand().".".$image->getClientOriginalExtension();
            $location = public_path("image/product/".$customimage);
            Image::make($image)->save($location);
        }
        $add = new AddProduct;
        $add->name = $request->name;
        $add->title = $request->title;
        $add->image = $customimage;
        $add->des = $request->des;
        $add->price = $request->price;
        $add->status = $request->status;
        $add->save();
        return redirect()->route('manage');
        
    }
        function manage(){
        $datashow = AddProduct::all();
        return view('backend.pages.products.manage',compact('datashow'));
        }

        function delete($id){
            $datashow = AddProduct::find($id);
            if(File::exists("image/product/".$datashow->image)){
                File::delete("image/product/".$datashow->image);
            }
            $datashow->delete();
            return back();
        }

        function editpriduct($id){
        $edit = AddProduct::find($id);
        return view('backend.pages.products.editpriduct',compact('edit'));
        }

        function updateproduct(Request $request, $id){
            $customimage="";
            $update = AddProduct::find($id);
            if(File::exists("image/product/".$update->image)){
                File::delete("image/product/".$update->image);
                if($request->image){
                $image = $request->file('image');
                $customimage =rand().".".$image->getClientOriginalExtension();
                $location = public_path("image/product/".$customimage);
                Image::make($image)->save($location);
            }
            }
            $update->name = $request->name;
            $update->title = $request->title;
            $update->image = $customimage;
            $update->des = $request->des;
            $update->price = $request->price;
            $update->status = $request->status;
            $update->update();
            return redirect()->route('manage');
        }
        
}