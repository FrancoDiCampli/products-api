<?php

namespace App\Http\Controllers\Api;

use App\Models\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BranchResource;

class BranchController extends Controller
{
    public function index(){
        return BranchResource::collection(Branch::all());
    }

    public function show(Branch $branch){
        // return ProductResource::collection(Product::find($id)->with('branch')->first());
        return new BranchResource(Branch::where('id',$branch->id)->with('products')->first());
    }
}
