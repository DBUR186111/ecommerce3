<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function register(Request $request){
        //For testing purpose, use hard coded data, till we design UI
        $Category = Category::create([
        'name' => 'Name of Catagory'
        ]);
        echo 'Category: ', $Category->name;
        //
        //Validate
        //$this->validate($request,[$request->name=>'required']);
        // $college = new College();
        // $college->name = $request->name;
        // $college->phone = $request->phone;
        // $college->save();
        }
       }
    
