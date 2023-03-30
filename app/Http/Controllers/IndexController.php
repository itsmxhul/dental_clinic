<?php

namespace App\Http\Controllers;
use App\Models\navbar;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $navbars = navbar::all();
        return view('index',compact('navbars'));
    }
    public function services(){
        $navbars = navbar::all();
        return view('services',compact('navbars'));
    }
    public function about(){
        $navbars = navbar::all();
        return view('about',compact('navbars'));
    }
    public function navbar(){
        $navbars = navbar::all();
        return view('admin.navbar',compact('navbars'));
    }


    public function show(navbar $navbar)
    {
        $data=$navbar->get();
        echo $data;
    }
}
