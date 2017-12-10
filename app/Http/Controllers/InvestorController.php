<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
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

    //後台股東會相關資訊
    public function AdminShareholdersIndex(){        
        $shareholdersinfo = ShareholdersInfo::all();
        return view('Admin.Investor.index')->with('data',$shareholdersinfo);
    }

    
    public function AdminShareholdersUploadFile(Request $request){
        /**/

        $input = Input::all();
        $message=[
            'file.mimes'=> '請上傳PDF'
        ];

        $this->validate($request, [
            'file'=> 'required|mimes:pdf',
        ],$message);
        
        $file = $request->file('file');
        
        
        //Move Uploaded File
        $newFileName = date("YmdHis").'file.'.$file->getClientOriginalExtension();

        $destinationPath = 'assets\images\CorporateGovernance';
        /**/
        $shareholdersinfo = new ShareholdersInfo;
        $shareholdersinfo->Year = $input['year'];
        $shareholdersinfo->Type = $input['type'];
        $shareholdersinfo->FileName = $file->getClientOriginalName();
        $shareholdersinfo->FilePath = $newFileName;
        $shareholdersinfo->save();
         
        $file->move($destinationPath,$newFileName);

        return redirect('Admin/Investor/index');
    }

    //後台營收公告
    public function AdminRevenueIndex(){        
        $revenueinfo = RevenueInfo::all();
        return view('Admin.Investor.index2')->with('data',$revenueinfo);
    }

    
    public function AdminRevenueUploadFile(Request $request){
        /**/

        $input = Input::all();
        $message=[
            'file.mimes'=> '請上傳PDF'
        ];

        $this->validate($request, [
            'file'=> 'required|mimes:pdf',
        ],$message);
        
        $file = $request->file('file');
        
        
        //Move Uploaded File
        $newFileName = date("YmdHis").'file.'.$file->getClientOriginalExtension();

        $destinationPath = 'assets\images\CorporateGovernance';
        /**/
        $revenueinfo = new RevenueInfo;
        $revenueinfo->Year = $input['year'];
        $revenueinfo->Type = $input['type'];
        $revenueinfo->FileName = $file->getClientOriginalName();
        $revenueinfo->FilePath = $newFileName;
        $revenueinfo->save();
         
        $file->move($destinationPath,$newFileName);

        return redirect('Admin/Investor/index2');
    }

    //後台財務資訊
    public function AdminFinanceIndex(){        
        $financeinfo = FinanceInfo::all();
        return view('Admin.Investor.index3')->with('data',$financeinfo);
    }

    
    public function AdminFinanceUploadFile(Request $request){
        /**/

        $input = Input::all();
        $message=[
            'file.mimes'=> '請上傳PDF'
        ];

        $this->validate($request, [
            'file'=> 'required|mimes:pdf',
        ],$message);
        
        $file = $request->file('file');
        
        
        //Move Uploaded File
        $newFileName = date("YmdHis").'file.'.$file->getClientOriginalExtension();

        $destinationPath = 'assets\images\CorporateGovernance';
        /**/
        $financeinfo = new FinanceInfo;
        $financeinfo->Year = $input['year'];
        $financeinfo->Type = $input['type'];
        $financeinfo->FileName = $file->getClientOriginalName();
        $financeinfo->FilePath = $newFileName;
        $financeinfo->save();
         
        $file->move($destinationPath,$newFileName);

        return redirect('Admin/Investor/index3');
    }
}
