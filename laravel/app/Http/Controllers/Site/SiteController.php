<?php


namespace App\Http\Controllers\Site;


use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
       return view("site.index");
    }
}
