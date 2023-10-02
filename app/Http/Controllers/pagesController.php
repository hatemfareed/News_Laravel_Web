<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function about(){
        return view('pages.about');
    }
    public function categori(){
        return view('pages.categori');
    }
    public function latest_news(){
        return view('pages.latest_news');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function blog(){
        return view('pages.blog');
    }
    public function blog_details(){
        return view('pages.blog_details');
    }
    public function elements(){
        return view('pages.elements');
    }
}
