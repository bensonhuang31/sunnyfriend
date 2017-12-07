<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
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

    //後台土豆鳥文學誌
    public function AdminPotatoIndex()
    {        
        $potatomagazine = PotatoMagazine::all();
        return view('Admin.CorporateSocialResponsibility.index2')->with('data',$potatomagazine);
    }

    
    public function AdminPotatoUploadFile(Request $request){
        /**/
        $message=[
            'file.mimes'=> '請上傳PDF'
        ];

        $this->validate($request, [
            'file'=> 'required|mimes:pdf',
            'image'=>'required|mimes:jpeg,png,jpg,gif,svg',
        ],$message);
        
        $file = $request->file('file');
        $image = $request->file('image');
        
        
        //Move Uploaded File
        
        $newImgName = date("YmdHis").'img.'.$image->getClientOriginalExtension();
        $newFileName = date("YmdHis").'file.'.$file->getClientOriginalExtension();

        $destinationPath = 'assets\images\CorporateSocialResponsibility\土豆鳥雜誌';
        /**/
        $potatomagazine = new PotatoMagazine;
        $potatomagazine->OriImageName = $image->getClientOriginalName();
        $potatomagazine->ImageName = $newImgName;
        $potatomagazine->OriFileName = $file->getClientOriginalName();
        $potatomagazine->FileName = $newFileName;
        $potatomagazine->save();
         
        $image->move($destinationPath,$newImgName);
        $file->move($destinationPath,$newFileName);

        return redirect('Admin/CorporateSocialResponsibility/index2');
    }

    //後台企業社會責任報告書
    public function AdminCsrIndex()
    {        
        $csrmagazine = CSRMagazine::all();
        return view('Admin.CorporateSocialResponsibility.index')->with('data',$csrmagazine);
    }

    
    public function AdminCsrUploadFile(Request $request){
        /**/
        $message=[
            'file.mimes'=> '請上傳PDF'
        ];

        $this->validate($request, [
            'file'=> 'required|mimes:pdf',
            'image'=>'required|mimes:jpeg,png,jpg,gif,svg',
        ],$message);
        
        $file = $request->file('file');
        $image = $request->file('image');
        
        
        //Move Uploaded File
        
        $newImgName = date("YmdHis").'img.'.$image->getClientOriginalExtension();
        $newFileName = date("YmdHis").'file.'.$file->getClientOriginalExtension();

        $destinationPath = 'assets\images\CorporateSocialResponsibility\csr報告書';
        /**/
        $csrmagazine = new CSRMagazine;
        $csrmagazine->OriImageName = $image->getClientOriginalName();
        $csrmagazine->ImageName = $newImgName;
        $csrmagazine->OriFileName = $file->getClientOriginalName();
        $csrmagazine->FileName = $newFileName;
        $csrmagazine->save();
         
        $image->move($destinationPath,$newImgName);
        $file->move($destinationPath,$newFileName);

        return redirect('Admin/CorporateSocialResponsibility/index');
    }
}
