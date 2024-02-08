<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function show($id)
    {
        return view('dish.show', ['dish' => Dish::findOrFail($id)]);
    }
}
