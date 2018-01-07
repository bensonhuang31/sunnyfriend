<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Http\Model\EnAirQuality;
use App\Http\Model\EnFlue;
use App\Http\Model\EnFlyash;
use App\Http\Model\EnIncineratorbottom;
use App\Http\Model\EnNoiseVibration;
use App\Http\Model\EnRawwater;
use App\Http\Model\EnSoil;
use App\Http\Model\EnGroundwater;
use Validator;


class EnvironmentalprotectionController extends Controller
{
    public function Monitoring()
    {        
        $enairquality = EnAirQuality::all();
        $enflue = EnFlue::all();
        $enflyash = EnFlyash::all();
        $enincineratorbottom = EnIncineratorbottom::all();
        $ennoisevibration = EnNoiseVibration::all();
        $enrawwater = EnRawwater::all();
        $ensoil = EnSoil::all();
        $engroundwater = EnGroundwater::all();
        return view('Environmentalprotection.EnvironmentMonitoring')->with('data', ['enairquality' => $enairquality, 'enflue' => $enflue, 'enflyash' => $enflyash, 
                                                                           'enincineratorbottom' => $enincineratorbottom, 'ennoisevibration' => $ennoisevibration, 
                                                                           'enrawwater' => $enrawwater, 'ensoil' => $ensoil, 'engroundwater' => $engroundwater]);
    }

    //後台股東會相關資訊
    public function AdminMonitoringIndex(){        
        $enairquality = EnAirQuality::all();
        $enflue = EnFlue::all();
        $enflyash = EnFlyash::all();
        $enincineratorbottom = EnIncineratorbottom::all();
        $ennoisevibration = EnNoiseVibration::all();
        $enrawwater = EnRawwater::all();
        $ensoil = EnSoil::all();
        $engroundwater = EnGroundwater::all();
        return view('Admin.Environmentalprotection.index2')->with('data', ['enairquality' => $enairquality, 'enflue' => $enflue, 'enflyash' => $enflyash, 
                                                                  'enincineratorbottom' => $enincineratorbottom, 'ennoisevibration' => $ennoisevibration, 
                                                                  'enrawwater' => $enrawwater, 'ensoil' => $ensoil, 'engroundwater' => $engroundwater]);
    }

    public function AdminMonitoringCreate(Request $request){
        $input = Input::all();
        switch($input['title'])
        {
            case "enflue":
                $enflue = new EnFlue;
                $enflue->Year = $input['year'];
                $enflue->Season = $input['season'];
                $enflue->Location = $input['location'];
                $enflue->Granular = $input['Granular'];
                $enflue->Sulfurdioxide = $input['Sulfurdioxide'];
                $enflue->Nitroxides = $input['Nitroxides'];
                $enflue->Carbonmonoxide = $input['Carbonmonoxide'];
                $enflue->Hydrogenchloride = $input['Hydrogenchloride'];
                $enflue->Pb = $input['Pb'];
                $enflue->Cd = $input['Cd'];
                $enflue->Hg = $input['Hg'];
                $enflue->Dioxin = $input['Dioxin'];
                $enflue->save();
                return redirect()->back()->with(['status' => 'success','message' => '煙道新增成功']);
            case "enrawwater":
                $enrawwater = new EnRawwater;
            break;
            case "enairquality":
                $enairquality = new EnAirQuality;
            break;
            case "ennoisevibration":
                $ennoisevibration = new EnNoiseVibration;
            break;
            case "ensoil":
                $ensoil = new EnSoil;
            break;
            case "enflyash":
                $enflyash = new EnFlyash;
            break;
            case "enincineratorbottom":
                $enincineratorbottom = new EnIncineratorbottom;
            break;
            case "engroundwater":
                $engroundwater = new EnGroundwater;
            break;
        }
        dd($input);
    }
}
