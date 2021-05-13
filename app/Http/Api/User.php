<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class UserController extends User
{
    public function index()
    {
        return api_success(
            array('data' => User::all())
        );
    }


    public function show($id)
    {
        $brand = User::findOrFail($id);
        return api_success(
            array('data' => $brand->products)
        );
    }   

    public function search(Request $request, $id){
        $product_brand = User::find($id);
        $products = $product_brand->products->where('name', 'like', '%$key_word%');
        return api_success(
            array('data' => $brand->products)
        );
    }
}
