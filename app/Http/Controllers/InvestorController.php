<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\ShareholdersInfo;
use App\Http\Model\RevenueInfo;
use Validator;

class InvestorController extends Controller
{
    public function index()
    {        
        $shareholdersinfo = ShareholdersInfo::all();
        return view('Investor.index')->with('data',$shareholdersinfo);
    }

    public function revenue()
    {        
        $revenueinfo = RevenueInfo::all();
        return view('Investor.index2')->with('data',$revenueinfo);
    }
}
