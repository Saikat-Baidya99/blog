<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $title = 'Welcome To Xiaomi Bangladesh official!';
        return view('pages.index')->with('t',$title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('t',$title);
    }

    public function service(){
        $data = ['title'=>'Service','services'=>['Web','Contact Number','Massage']];
        return view('pages.service')->with($data);
    }

}
