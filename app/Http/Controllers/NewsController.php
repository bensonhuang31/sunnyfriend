<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\LatestNews;
use Validator;

class NewsController extends Controller
{
    public function index()
    {        
        $latestnews = LatestNews::all();
        return view('News.index4')->with('data',$latestnews);
    }
}
