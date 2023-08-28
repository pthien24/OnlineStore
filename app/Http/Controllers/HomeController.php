<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        $viewData = [];
        $viewData["title"] = "Home Page - Online Store";
        return view('home.index')->with("viewData", $viewData);

    }

    public function about()
    {

        $viewData = [];
        $viewData["title"] = "about Page - Online Store";
        $viewData["subtitle"] = "about Page - Online Store";
        $viewData["description"] = "this is an about Page - online store";
        $viewData["author"] = "Developer by ivamn";
        return view('home.about')->with("viewData", $viewData);

    }

    // public function about(){
    //     $data1 = 'about us - online store';
    //     $data2 = 'about';
    //     $description = ' this is about us';
    //     $author = 'ivan';
    //     return view("home.about")
    //     -> with ('title',$data1)
    //     -> with ('subtitle',$data2)
    //     -> with ('description',$description)
    //     -> with ('author',$author);

    // }
}
