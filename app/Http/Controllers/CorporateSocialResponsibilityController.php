<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PotatoMagazine;
use Validator;

class CorporateSocialResponsibilityController extends Controller
{
    public function index()
    {        
        $potatomagazine = PotatoMagazine::all();
        return view('CorporateSocialResponsibility.index5')->with('data',$potatomagazine);
    }
}
