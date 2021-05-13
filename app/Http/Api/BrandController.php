<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function index()
    {
        return api_success(
            array('data' => Brand::all())
        );
    }


    public function show($id)
    {
        $brand = Brand::findOrFail($id);
        return api_success(
            array('data' => $brand->products)
        );
    }

    public function search(Request $request){
        $key_word = $request->input('q');
        $products = Brand::where('name', 'like', "%$key_word%")->get();
        return api_success(
            array('data' => $products)
        );
    }
}
