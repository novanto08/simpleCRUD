<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index(){
    $barangs = Data::all();
    return view('pages.home' ,compact('barangs'));
  }
}
