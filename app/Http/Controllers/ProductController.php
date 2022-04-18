<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //public function register()
    //(Request $request){
    //public function register(Request $request){
// $product = product::create([
     //'id'=>'500',
    //'name' => 'milk',
    //'unit' => 'litre',
    //'price' => '30',
    //'quantity' => '8',
   
    //]);
    //echo 'product: ', $product->name;
    //echo 'product: ', $product->unit;
    //echo 'product: ', $product->price;
    //echo 'product: ', $product->quantity;
      public function register()
      {
          return view (product.register);
      }
      public function store(Request  $request)
      {
       
    $product=new product();
    $product->name= $request -> name;
    $product->unit= $request -> unit;
    $product->price= $request -> price;
    $product->quantity= $request -> quantity;
    $is_successed= $product::save();
   if($is_successed)
      echo 'record saved succesfully';
      else
      echo 'something went wrong';

      }
}
