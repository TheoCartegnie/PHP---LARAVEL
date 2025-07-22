<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


use Illuminate\View\View;

//Route::get('/HomePage', [HomeController::class], 'show');

class HomePage extends Controller//ControleHomePageBehavour
{
    public function index(): View
    {
        return view('homepage');
    } 

    public function show() : View
    {
        return view('HomePage');
    }
}

