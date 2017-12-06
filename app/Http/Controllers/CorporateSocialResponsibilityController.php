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

    public function UploadFileindex()
    {        
        //$potatomagazine = PotatoMagazine::all();
        return view('Admin.CorporateSocialResponsibility.index2');
    }

    public function showUploadFile(Request $request){
        /**/
        $message=[
            
        ];

        $this->validate($request, [
            'file'=> 'required|mimes:pdf',
            'image'=>'required|mimes:jpeg,png,jpg,gif,svg',
        ],$message);
        
        $file = $request->file('file');
        $image = $request->file('image');


        //Display File Name
        echo 'image Name: '.$image->getClientOriginalName();
        echo '<br>';
     
        //Display File Extension
        echo 'image Extension: '.$image->getClientOriginalExtension();
        echo '<br>';
     
        //Display File Real Path
        echo 'image Real Path: '.$image->getRealPath();
        echo '<br>';
     
        //Display File Size
        echo 'image Size: '.$image->getSize();
        echo '<br>';
     
        //Display File Mime Type
        //echo 'image Mime Type: '.$image->getMimeType();
        echo '<br>';
        echo '---------------------------------------------------------';
        echo '<br>';
        echo 'File Name: '.$file->getClientOriginalName();
        
        echo '<br>';
     
        //Display File Extension
        echo 'File Extension: '.$file->getClientOriginalExtension();
        echo '<br>';
     
        //Display File Real Path
        echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';
     
        //Display File Size
        echo 'File Size: '.$file->getSize();
        echo '<br>';
     
        //Display File Mime Type
        //echo 'File Mime Type: '.$file->getMimeType();

        
        
        //Move Uploaded File
        
        $newImgName = date("YmdHis").'img.'.$image->getClientOriginalExtension();
        $newFileName = date("YmdHis").'file.'.$file->getClientOriginalExtension();

        $destinationPath = 'assets\images\CorporateSocialResponsibility\土豆鳥雜誌';
        /*
        $potatomagazine = new PotatoMagazine;
        $potatomagazine->OriImageName = $image->getClientOriginalName();
        $potatomagazine->ImageName = $newImgName;
        $potatomagazine->OriFileName = $file->getClientOriginalName();
        $potatomagazine->FileName = $newFileName;
        $potatomagazine->save();
         */
        $image->move($destinationPath,$newImgName);
        $file->move($destinationPath,$newFileName);

        return redirect('Admin/CorporateSocialResponsibility/index2');
    }
}
