<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    //
    function index(){
      $data=Product::all();
      return view("plans",["products"=>$data]);
    }
}
