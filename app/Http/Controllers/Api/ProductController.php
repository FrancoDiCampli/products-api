<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return ProductResource::collection(Product::with('branch')->paginate(25));
    }

    public function show(Product $product){
        // return ProductResource::collection(Product::find($id)->with('branch')->first());
        return new ProductResource(Product::where('id',$product->id)->with('branch')->first());
    }
}
