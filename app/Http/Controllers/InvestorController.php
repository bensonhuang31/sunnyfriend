<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Model\ShareholdersInfo;
use App\Http\Model\RevenueInfo;
use App\Http\Model\FinanceInfo;
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

    public function finance()
    {        
        $financeinfo = FinanceInfo::all();
        return view('Investor.index3')->with('data',$financeinfo);
    }
}
