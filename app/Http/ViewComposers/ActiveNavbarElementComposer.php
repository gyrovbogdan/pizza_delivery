<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

class ActiveNavbarElementComposer
{
    public function compose(View $view)
    {
        $query = Request::query('q');
        $view->with('currentRoute', Route::currentRouteAction() . ($query ? "?q=$query" : ''));
    }
}
