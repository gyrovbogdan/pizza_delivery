<?php

namespace App\Http\Controllers;

use App\Models\Dish;

class HomeController extends Controller
{
    public function index()
    {
        return view('index.index', ['dishes' => Dish::all()]);
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
