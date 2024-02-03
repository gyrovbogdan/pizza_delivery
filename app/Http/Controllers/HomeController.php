<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index()
    {
        return view('index.index');
    }

    public function newProducts()
    {
        return view('index.newProducts');
    }
    public function delivery()
    {
        return view('index.delivery');
    }
    public function certificate()
    {
        return view('index.certificate');
    }
    public function search()
    {
        return view('index.search');
    }
}
