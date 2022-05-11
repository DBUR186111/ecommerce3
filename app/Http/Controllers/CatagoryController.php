<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    //
    public function register(Request $request){
        //For testing purpose, use hard coded data, till we design UI
        $Catagory = Catagory::create([
        'name' => 'Name of Catagory'
        ]);
        echo 'Catagory: ', $Catagory->name;
        //
        //Validate
        //$this->validate($request,[$request->name=>'required']);
        // $college = new College();
        // $college->name = $request->name;
        // $college->phone = $request->phone;
        // $college->save();
         function register()
    {
    return view('Catagory.register');
    }    
    }
        
        public function get_all()
        {
         $Catagory = Catagory::all();
         return view('Catagory.get_all', compact('Catagory'));
        }
        public function get_by_id($id)
         {
          $Catagory = Catagory::where('id', $id)->first();
          return view('Catagory.get_by_id', compact('Catagory'));
          }
}
