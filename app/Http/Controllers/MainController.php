<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // 404 Page
    public function reroute(Request $request){
      $page = $request->page;
      return view('errors.404', compact('page'));
    }

}
