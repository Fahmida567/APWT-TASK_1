<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    //
     //
    
     public function ServicePage()
     {
        
         $product=[
             "Model Name"=>"Name: IPhone 12 mini",
             "Brand"=>"Brand: Apple",
             "Memory storage capacity"=>"Memory capacity: 64GB",
             "Color"=>"Color: Purple",
             "Price"=>"Price: 80,000/-",

            
 
         ];
         return view('Service')->with('product',$product);
 
     }
 
     public function HomePage()
     {
         return view('Home');
     }
 
     public function ContactPage()
     {
         return view('Contact');
     }
 
     public function AboutPage()
     {
         return view('About');
     }
 
     public function TeamsPage()
     {
         return view('Teams');
     }
  
}
