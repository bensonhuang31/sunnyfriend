<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\PotatoMagazine;
use App\Http\Model\CSRMagazine;
use Validator;

class CorporateSocialResponsibilityController extends Controller
{
    public function index()
    {        
        $potatomagazine = PotatoMagazine::all();
        return view('CorporateSocialResponsibility.index5')->with('data',$potatomagazine);
    }

    public function csr()
    {        
        $csrmagazine = CSRMagazine::all();
        return view('CorporateSocialResponsibility.index4')->with('data',$csrmagazine);
    }
}
