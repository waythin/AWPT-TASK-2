<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function service(){

        $products =[
            'pro1'=> 'Hoodie',
            'pro2'=> 'Jacket',
            'pro3'=> 'Backpack',
            'pro4'=> 'Artwork',
            'pro5'=> 'Poster'
        ];
        return view('pages.service')->with('products',$products);
    }

    public function teams(){
        return view('pages.teams');
    }

    public function aboutUs(){
        return view('pages.aboutus');
    }

    public function contact(){
        return view('pages.contact');
    }





    public function pageCheck(){
        return view('pages.home');
    }

    public function pageData(){
      
        $names= ['waythin','asif'];

       return view('helloPage2',['names'=>$names]); 
    }




    
    



}
