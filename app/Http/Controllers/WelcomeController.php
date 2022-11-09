<?php

namespace App\Http\Controllers;

use App\Models\Brand;

class WelcomeController extends Controller
{
    /**
     * show welcome page
     *
     * @param string $domain
     * @return \Illuminate\Contracts\View\View
     */
    public function __invoke(Brand $brand)
    {
        return view('welcome', ['brand' => $brand]);
    }
}
