<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopNavbarController extends Controller
{
    public function topnavbar() {
        return view('Layout.TopNavbar');
    }
}
