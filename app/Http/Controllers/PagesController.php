<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $pagetitle = 'Početna';
        return view('pages.pocetna')->with('pagetitle', $pagetitle);
    }
    public function about() {
        $pagetitle = 'O nama';
        return view('pages.o-nama')->with('pagetitle', $pagetitle);
    }  
    public function buy() {
        $pagetitle = 'Kupi';
        return view('pages.buy')->with('pagetitle', $pagetitle);
    }    
    public function sell() {
        $pagetitle = 'Prodaj';
        return view('pages.sell')->with('pagetitle', $pagetitle);
    } 
    public function qa() {
        $pagetitle = 'QA';
        return view('pages.qa')->with('pagetitle', $pagetitle);
    }  
    public function contact() {
        $pagetitle = 'Kontakt';
        return view('pages.contact')->with('pagetitle', $pagetitle);
    }               
}
