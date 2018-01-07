@extends('Layouts/admin')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div>
                @if (session('status')=='success')
                    <div class="alert alert-success">
                        <ul>
                            <li>{{session('message')}}</li>
                        </ul>
                    </div>
                @elseif (session('status')=='failed')
                    <div class="alert alert-danger">~
                        <ul>
                            <li>{{session('message')}}</li>
                        </ul>
                    </div>
                @endif
            </div>
            <div class="col-sm-12 col-md-12">
                <h3>環境監測</h3>
                <!-- Page Heading -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-6 enchange">
                <input type="button" class="btnEM btn-table" value="煙道"></input>
                <input type="button" class="btnEM btn-table" value="原水"></input>
                <input type="button" class="btnEM btn-table" value="空氣監測"></input>
                <input type="button" class="btnEM btn-table" value="噪音振動"></input>
                <input type="button" class="btnEM btn-table" value="土壤"></input>
                <input type="button" class="btnEM btn-table" value="TCLP飛灰"></input>
                <input type="button" class="btnEM btn-table" value="TCLP底渣"></input>
                <input type="button" class="btnEM btn-table" value="地下水"></input>
            </br></br>
            <button class="btnn btn btn-primary" data-toggle="modal" data-target="#AddInvetorInfo">新增</button>

            <div class="modal fade" id="AddInvetorInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" style="width: 60%;">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header navbar navbar-light bg-faded">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <h4 class="modal-title">新增環境監測資料</h4>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#enflue" aria-controls="enflue" role="tab" data-toggle="tab">煙道</a></li>
                                <li role="presentation"><a href="#enrawwater" aria-controls="rawwater" role="tab" data-toggle="tab">原水</a></li>
                                <li role="presentation"><a href="#enairquality" aria-controls="airquality" role="tab" data-toggle="tab">空氣監測</a></li>
                                <li role="presentation"><a href="#ennoisevibration" aria-controls="noisevibration" role="tab" data-toggle="tab">噪音振動</a></li>
                                <li role="presentation"><a href="#ensoil" aria-controls="soil" role="tab" data-toggle="tab">土壤</a></li>
                                <li role="presentation"><a href="#enflyash" aria-controls="enflyash" role="tab" data-toggle="tab">TCLP飛灰</a></li>
                                <li role="presentation"><a href="#enincineratorbottom" aria-controls="incineratorbottom" role="tab" data-toggle="tab">TCLP底渣</a></li>
                                <li role="presentation"><a href="#engroundwater" aria-controls="engroundwater" role="tab" data-toggle="tab">地下水</a></li>
                            </ul>
                        </div>
                        <!-- Modal Body -->
                        <div class="modal-body">
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="enflue">
                                {!! Form::open(array('url'=>'/Admin/Environmentalprotection/index2','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                                {{csrf_field()}}
                                <input type="hidden" name="title" value="enflue"></input>
                                    <div class="form-row form-group">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <label class="control-label">*新增年度</label>
                                            <select class="selectpicker selectbtn edityear" name="year" id="addyearenflue">
                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6">
                                            <label class="control-label">*季別</label></br>
                                            <select class="selectpicker selectbtn" name="season">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6">
                                            <label class="control-label">*廠別</label></br>
                                            <select class="selectpicker selectbtn" name="location">
                                                <option>一廠</option>
                                                <option>二廠</option>
                                                <option>三廠</option>
                                            </select>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label" >*粒狀汙染物</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Granular" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*二氧化硫</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Sulfurdioxide" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*氮氧化合物</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Nitroxides" required/>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*一氧化碳</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Carbonmonoxide" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*氯化氫</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Hydrogenchloride" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*鉛</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Pb" required/>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*鎘</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Cd" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*汞</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Hg" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*戴奧辛</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Dioxin" required/>
                                            </div>
                                        </div>                              
                                        <div class="col-lg-12 col-md-6 col-sm-6" >
                                            <hr>
                                            <div style="float:right">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                                {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
                                            </div>
                                        </div> 
                                    </div>        
                                {!! Form::close() !!}
                            </div>
                            <div role="tabpanel" class="tab-pane" id="enrawwater">
                                    {!! Form::open(array('url'=>'/Admin/Environmentalprotection/index2','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                                    {{csrf_field()}}
                                    <input type="hidden" name="title" value="enrawwater"></input>
                                        <div class="form-row form-group">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <label class="control-label">*新增年度</label>
                                            <select class="selectpicker selectbtn edityear" name="year" id="addyearenrawwater">
                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-md-4 col-sm-4">
                                            <label class="control-label">*月</label></br>
                                            <select class="selectpicker selectbtn" name="month">
                                                <option>第1季</option>
                                                <option>第2季</option>
                                                <option>第3季</option>
                                                <option>第4季</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*水溫</label></br>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Watertemperature" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*pH值</label></br>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="PHvalue" required/>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label" >*懸浮固體</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Suspendedsolids" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*化學需氧量</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="COD" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*大腸桿菌群</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Coliform" required/>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6" >
                                                <hr>
                                                <div style="float:right">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                                    {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
                                                </div>
                                            </div> 
                                        </div>        
                                    {!! Form::close() !!}
                            </div>
                            <div role="tabpanel" class="tab-pane" id="enairquality">
                                    {!! Form::open(array('url'=>'/Admin/Environmentalprotection/index2','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                                    {{csrf_field()}}
                                    <input type="hidden" name="title" value="enairquality"></input>
                                        <div class="form-row form-group">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <label class="control-label">*新增年度</label>
                                            <select class="selectpicker selectbtn edityear" name="year" id="addyearenairquality">
                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label class="control-label">*季別</label></br>
                                            <select class="selectpicker selectbtn" name="month">
                                                <option>第1季</option>
                                                <option>第2季</option>
                                                <option>第3季</option>
                                                <option>第4季</option>
                                            </select>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label" >*風速</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Windspeed" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*風向</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Winddirection" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*濕度</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Humidity" required/>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label" >*溫度</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Temperature" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*TSP</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TSP" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*SO2</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="SO2" required/>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label" >*NOx</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="NOx" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*CO</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="CO" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*THC</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="THC" required/>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label" >*CH4</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="CH4" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*NMHC</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="NMHC" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*PM10</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="PM10" required/>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <label class="control-label" >*CH4</label>
                                                    <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="PM25" required/>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <label class="control-label">*NMHC</label>
                                                    <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Dioxin" required/>
                                                </div>
                                            </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6" >
                                                <hr>
                                                <div style="float:right">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                                    {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
                                                </div>
                                            </div> 
                                        </div>        
                                    {!! Form::close() !!}
                            </div>
                            <div role="tabpanel" class="tab-pane" id="ennoisevibration">
                                    {!! Form::open(array('url'=>'/Admin/Environmentalprotection/index2','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                                    {{csrf_field()}}
                                    <input type="hidden" name="title" value="ennoisevibration"></input>
                                        <div class="form-row form-group">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <label class="control-label">*新增年度</label>
                                            <select class="selectpicker selectbtn edityear" name="year" id="addyearennoisevibration">
                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-md-4 col-sm-4">
                                            <label class="control-label">*季別</label></br>
                                            <select class="selectpicker selectbtn" name="month">
                                                <option>第1季</option>
                                                <option>第2季</option>
                                                <option>第3季</option>
                                                <option>第4季</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*L日</label></br>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Lmorning" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*L晚</label></br>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Levening" required/>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label" >*L夜</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Lnight" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*LV日</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Lvmorning" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*LV夜</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Lvnight" required/>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6" >
                                                <hr>
                                                <div style="float:right">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                                    {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
                                                </div>
                                            </div> 
                                        </div>        
                                    {!! Form::close() !!}
                            </div>
                            <div role="tabpanel" class="tab-pane" id="ensoil">
                                    {!! Form::open(array('url'=>'/Admin/Environmentalprotection/index2','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                                    {{csrf_field()}}
                                    <input type="hidden" name="title" value="ensoil"></input>
                                        <div class="form-row form-group">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <label class="control-label">*新增年度</label>
                                            <select class="selectpicker selectbtn edityear" name="year" id="addyearensoil">
                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-md-4 col-sm-4">
                                            <label class="control-label">*月</label></br>
                                            <select class="selectpicker selectbtn" name="month">
                                                <option>第1季</option>
                                                <option>第2季</option>
                                                <option>第3季</option>
                                                <option>第4季</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*鉛</label></br>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Pb" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*鎘</label></br>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Cd" required/>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label" >*汞</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Hd" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*戴奧辛</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Dioxin" required/>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6" >
                                                <hr>
                                                <div style="float:right">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                                    {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
                                                </div>
                                            </div> 
                                        </div>        
                                    {!! Form::close() !!}                                 
                            </div>
                            <div role="tabpanel" class="tab-pane" id="enflyash">
                                    {!! Form::open(array('url'=>'/Admin/Environmentalprotection/index2','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                                    {{csrf_field()}}
                                    <input type="hidden" name="title" value="enflyash"></input>                                    
                                        <div class="form-row form-group">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <label class="control-label">*新增年度</label>
                                            <select class="selectpicker selectbtn edityear" name="year" id="addyearenflyash">
                                            </select>
                                        </div>        
                                        <div class="col-lg-12 col-md-6 col-sm-6">
                                            <label class="control-label">*季別</label></br>
                                            <select class="selectpicker selectbtn" name="month">
                                                <option>第1季</option>
                                                <option>第2季</option>
                                                <option>第3季</option>
                                                <option>第4季</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6">
                                            <label class="control-label">*廠別</label></br>
                                            <select class="selectpicker selectbtn" name="quarter">
                                                <option>一廠</option>
                                                <option>二廠</option>
                                                <option>三廠</option>
                                            </select>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label" >*六價鉻</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Cr6" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總鎘</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalCd" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總鉻</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalCr" required/>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總銅</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalCu" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總鉛</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalPb" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總鋇</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalBa" required/>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總砷</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalAs" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總汞</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalHg" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總硒</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalSe" required/>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6" >
                                                <hr>
                                                <div style="float:right">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                                    {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
                                                </div>
                                            </div> 
                                        </div>        
                                    {!! Form::close() !!}
                            </div>
                            <div role="tabpanel" class="tab-pane" id="enincineratorbottom">
                                    {!! Form::open(array('url'=>'/Admin/Environmentalprotection/index2','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                                    {{csrf_field()}}
                                    <input type="hidden" name="title" value="enincineratorbottom"></input>
                                        <div class="form-row form-group">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <label class="control-label">*新增年度</label>
                                            <select class="selectpicker selectbtn edityear" name="year" id="addyearenincineratorbottom">
                                            </select>
                                        </div>        
                                        <div class="col-lg-12 col-md-6 col-sm-6">
                                            <label class="control-label">*季別</label></br>
                                            <select class="selectpicker selectbtn" name="month">
                                                <option>上半年季</option>
                                                <option>下半年季</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6">
                                            <label class="control-label">*廠別</label></br>
                                            <select class="selectpicker selectbtn" name="quarter">
                                                <option>一廠</option>
                                                <option>二廠</option>
                                                <option>三廠</option>
                                            </select>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label" >*六價鉻</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Cr6" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總鎘</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalCd" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總鉻</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalCr" required/>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總銅</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalCu" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總鉛</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalPb" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總鋇</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalBa" required/>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總砷</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalAs" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總汞</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalHg" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總硒</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalSe" required/>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6" >
                                                <hr>
                                                <div style="float:right">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                                    {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
                                                </div>
                                            </div> 
                                        </div>        
                                    {!! Form::close() !!}
                            </div>
                            <div role="tabpanel" class="tab-pane" id="engroundwater">
                                    {!! Form::open(array('url'=>'/Admin/Environmentalprotection/index2','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                                    {{csrf_field()}}
                                    <input type="hidden" name="title" value="engroundwater"></input>                                    
                                        <div class="form-row form-group">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <label class="control-label">*新增年度</label>
                                            <select class="selectpicker selectbtn edityear" name="year" id="addyearengroundwater">
                                            </select>
                                         </div>    
                                        <div class="col-lg-12 col-md-6 col-sm-6">
                                            <label class="control-label">*季別</label></br>
                                            <select class="selectpicker selectbtn" name="month">
                                                <option>第1季</option>
                                                <option>第2季</option>
                                                <option>第3季</option>
                                                <option>第4季</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6">
                                            <label class="control-label">*廠別</label></br>
                                            <select class="selectpicker selectbtn" name="quarter">
                                                <option>一號井</option>
                                                <option>二號井</option>
                                                <option>三號井</option>
                                            </select>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label" >*總有機碳</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Toc" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*TDS</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TDS" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*硫酸鹽</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Sulfate" required/>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*氯鹽</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="NaCl" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總硬度</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Totalhardness" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*硝酸鹽氮</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Nitratenitrogen" required/>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*氨氮</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Ammonianitrogen" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*鉛</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Pb" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*鉻</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Cr" required/>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*錳</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Mn" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*鐵</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Iron" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*汞</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Hg" required/>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*砷</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="As" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*鎳</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Ni" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*鋅</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Zn" required/>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*銅</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Cu" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*PH值</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="PHvalue" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*溫度</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Temperature" required/>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*濁度</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Turbidity" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*導電度</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Conductivity" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*比導電度</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Specificconductivity" required/>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*油脂</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Grease" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*鎘</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Cd" required/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總氮</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalP" required/>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總磷</label>
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalN" required/>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6" >
                                                <hr>
                                                <div style="float:right">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                                    {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
                                                </div>
                                            </div> 
                                        </div>        
                                    {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-6">
        <h2 id="enname">煙道</h2>
    </div>  
    <div class="col-md-12 col-sm-6">
        <select class="selectpicker selectbtn"  id="changeyear">
        </select>
    </br></br>
</div>                
</div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <center class="center-enflue">
            <div class="table-responsive dragscroll">
                <table class="table table5 table-enflue">
                    <thead>
                        <tr style="background-color: #AACD03;">
                         
                            <th class="middle" colspan="2">檢測項目內容</th>
                            <th class="middle" colspan="1">粒狀汙染物</th>
                            <th class="middle" colspan="1">二氧化硫</th>
                            <th class="middle" colspan="1">氮氧化合物</th>
                            <th class="middle" colspan="1">一氧化碳</th>
                            <th class="middle" colspan="1">氯化氫</th>
                            <th class="middle" colspan="1">鉛</th>
                            <th class="middle" colspan="1">鎘</th>
                            <th class="middle" colspan="1">汞</th>
                            <th class="middle" colspan="1">戴奧辛</th>
                            <tr style="background-color: #cce166;text-align: center;">   
                                <th class="middle" colspan="2">廠別</th>
                                <th class="middle">(mg/Nm^3)</th>
                                <th class="middle">(ppm)</th>
                                <th class="middle">(ppm)</th>
                                <th class="middle">(ppm)</th>
                                <th class="middle">(ppm)</th>
                                <th class="middle">(mg/Nm^3)</th>
                                <th class="middle">(mg/Nm^3)</th>
                                <th class="middle">(mg/Nm^3)</th>
                                <th class="middle">(ng-TEQ/Nm3)</th>
                            </tr>        
                        </thead>
                        <tbody class="middle" style="text-align: center;">
                        </tbody>                           
                    </table>
                </div>
            </center>

            <center style="display:none" class="center-airquality">
                <div class="table-responsive dragscroll">
                    <table class="table table5 table-airquality">
                        <thead>
                            <tr style="background-color: #AACD03;">
                                <th class="middle" colspan="2">檢測項目內容</th>
                                <th class="middle" >風速</th>
                                <th class="middle" >風向</th>
                                <th class="middle" >濕度</th>
                                <th class="middle" >溫度</th>
                                <th class="middle" >TSP</th>
                                <th class="middle" >SO2</th>
                                <th class="middle" >NOx</th>
                                <th class="middle" >CO</th>
                                <th class="middle" >THC</th>
                                <th class="middle" >CH4</th>
                                <th class="middle" >NMHC</th>
                                <th class="middle" >PM10</th>
                                <th class="middle" >PM2.5</th>
                                <th class="middle" >戴奧辛</th>
                            </tr>
                            <tr style="background-color: #cce166;">
                                <th class="middle" colspan="2">內容</th>
                                <th class="middle" >(m/s)</th>
                                <th class="middle" >-</th>
                                <th class="middle" >%</th>
                                <th class="middle" >(°C)</th>
                                <th class="middle" >(ug/m3)</th>
                                <th class="middle" >(ppm)</th>
                                <th class="middle" >(ppm)</th>
                                <th class="middle" >(ppm)</th>
                                <th class="middle" >(ppm)</th>
                                <th class="middle" >(ppm)</th>
                                <th class="middle" >(ppm)</th>
                                <th class="middle" >(ug/m3)</th>
                                <th class="middle" >(ug/m3)</th>
                                <th class="middle" >(pg-TEQ/m3)</th>
                            </tr>

                        </thead>
                        <tbody class="middle" style="text-align: center;">
                            
                        </tbody>                           
                    </table>
                </div>
            </center>

            <center style="display:none" class="center-noisevibration">
                <div class="table-responsive dragscroll">
                    <table class="table table5 table-noisevibration">
                        <thead>
                            <tr style="background-color: #AACD03;text-align: center;">
                                <th class="middle" rowspan="2" colspan="2">檢測項目內容</th>
                                <th class="middle" >L日</th>
                                <th class="middle" >L晚</th>
                                <th class="middle" >L夜</th>
                                <th class="middle" >LV日</th>
                                <th class="middle" >LV夜</th>
                            </tr>
                            <tr style="background-color: #cce166;text-align: center;">
                                <th class="middle" >(dB)</th>
                                <th class="middle" >(dB)</th>
                                <th class="middle" >(dB)</th>
                                <th class="middle" >(°C)</th>
                                <th class="middle" >(ug/m3)</th>

                            </tr>

                        </thead>
                        <tbody class="middle" style="text-align: center;">
                            
                        </tbody>                           
                    </table>
                </div>
            </center>

            <center style="display:none" class="center-soil">
                <div class="table-responsive dragscroll">
                    <table class="table table5 table-soil">
                        <thead>
                            <tr style="background-color: #AACD03;">
                                <th class="middle" rowspan="2" colspan="1">檢測項目內容</th>
                                <th class="middle" >鉛</th>
                                <th class="middle" >鎘</th>
                                <th class="middle" >汞</th>
                                <th class="middle" >戴奧辛</th>
                            </tr>
                            <tr style="background-color: #cce166;">
                                <th class="middle" >(mg/kg)</th>
                                <th class="middle" >(mg/kg)</th>
                                <th class="middle" >(mg/kg)</th>
                                <th class="middle" >(ng-TEQ/Nm3)</th>
                            </tr>

                        </thead>
                        <tbody class="middle" style="text-align: center;">
                            
                        </tbody>                           
                    </table>
                </div>
            </center>

            <center style="display:none" class="center-rawwater">
                <div class="table-responsive dragscroll">
                    <table class="table table5 table-rawwater">
                        <thead>
                            <tr style="background-color: #AACD03;">
                                <th class="middle" rowspan="2" colspan="2">檢測項目內容</th>
                                <th class="middle" >水溫</th>
                                <th class="middle" rowspan="2">pH值</th>
                                <th class="middle" >懸浮固體</th>
                                <th class="middle" >化學需氧量</th>
                                <th class="middle" >大腸桿菌群</th>
                            </tr>
                            <tr style="background-color: #cce166;">
                                <th class="middle" >°C</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle" >CFU/100mL</th>
                            </tr>

                        </thead>
                        <tbody class="middle" style="text-align: center;">
                            
                        </tbody>                           
                    </table>
                </div>
            </center>

            <center style="display:none" class="center-incineratorbottom">
                <div class="table-responsive dragscroll">
                    <table class="table table5 table-incineratorbottom">
                        <thead>
                            <tr style="background-color: #AACD03;">
                                <th class="middle" colspan="3">檢測項目內容</th>
                                <th class="middle" >六價鉻</th>
                                <th class="middle" >總鎘</th>
                                <th class="middle" >總鉻</th>
                                <th class="middle" >總銅</th>
                                <th class="middle" >總鉛</th>
                                <th class="middle" >總鋇</th>
                                <th class="middle" >總砷</th>
                                <th class="middle" >總汞</th>
                                <th class="middle" >總硒</th>
                            </tr>
                            <tr style="background-color: #cce166;">
                                <th class="middle" ></th>
                                <th class="middle" >地點</th>
                                <th class="middle" >種類</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle" >(mg/L)</th>
                            </tr>   

                        </thead>
                        <tbody class="middle" style="text-align: center;">
                            
                        </tbody>                           
                    </table>
                </div>
            </center>

            <center style="display:none" class="center-enflyash">
                <div class="table-responsive dragscroll">
                    <table class="table table5 table-enflyash">
                        <thead>
                            <tr style="background-color: #AACD03;">
                                <th class="middle" colspan="3">檢測項目內容</th>
                                <th class="middle" >六價鉻</th>
                                <th class="middle" >總鎘</th>
                                <th class="middle" >總鉻</th>
                                <th class="middle" >總銅</th>
                                <th class="middle" >總鉛</th>
                                <th class="middle" >總鋇</th>
                                <th class="middle" >總砷</th>
                                <th class="middle" >總汞</th>
                                <th class="middle" >總硒</th>
                            </tr>
                            <tr style="background-color: #cce166;">
                                <th class="middle" ></th>
                                <th class="middle" >地點</th>
                                <th class="middle" >種類</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle" >(mg/L)</th>

                                
                            </tr>

                        </thead>
                        <tbody class="middle" style="text-align: center;">
                            
                        </tbody>                           
                    </table>
                </div>
            </center>

            <center style="display:none" class="center-groundwater">
                <div class="table-responsive dragscroll">
                    <table class="table table5 table-engroundwater">
                    <thead>
                        <tr style="background-color: #AACD03;">
                       
                            <th class="middle" colspan="2">檢測項目內容</th>
                            <th class="middle" colspan="1">總有機碳</th>
                            <th class="middle" colspan="1">TDS</th>
                            <th class="middle" colspan="1">硫酸鹽</th>
                            <th class="middle" colspan="1">氯鹽</th>
                            <th class="middle" colspan="1">總硬度</th>
                            <th class="middle" colspan="1">硝酸鹽氮</th>
                            <th class="middle" colspan="1">氨氮</th>
                            <th class="middle" colspan="1">鉛</th>
                            <th class="middle" colspan="1">鉻</th>
                            <th class="middle" colspan="1">錳</th>
                            <th class="middle" colspan="1">鐵</th>
                            <th class="middle" colspan="1">汞</th>
                            <th class="middle" colspan="1">砷</th>
                            <th class="middle" colspan="1">鎳</th>
                            <th class="middle" colspan="1">鋅</th>
                            <th class="middle" colspan="1">銅</th>
                            <th class="middle" rowspan="2">PH值</th>
                            <th class="middle" colspan="1">溫度</th>
                            <th class="middle" colspan="1">濁度</th>
                            <th class="middle" colspan="1">導電度</th>
                            <th class="middle" colspan="1">比導電度</th>
                            <th class="middle" colspan="1">油脂</th>
                            <th class="middle" colspan="1">鎘</th>
                            <th class="middle" colspan="1">總氮</th>
                            <th class="middle" colspan="1">總磷</th>
                        <tr style="background-color: #cce166;text-align: center;">
                       
                            <th class="middle" colspan="2">地點</th>
                            <th class="middle">(mgC/L)</th>
                            <th class="middle">(mg/L)</th>
                            <th class="middle">(mg/L)</th>
                            <th class="middle">(mg/L)</th>
                            <th class="middle">(mgCaCO3/L)</th>
                            <th class="middle">(mg/L)</th>
                            <th class="middle">(mg/L)</th>
                            <th class="middle">(mg/L)</th>
                            <th class="middle">(mg/L)</th>
                            <th class="middle">(mg/L)</th>
                            <th class="middle">(mg/L)</th>
                            <th class="middle">(mg/L)</th>
                            <th class="middle">(mg/L)</th>
                            <th class="middle">(mg/L)</th>
                            <th class="middle">(mg/L)</th>
                            <th class="middle">(mg/L)</th>
                            <th class="middle">(°C)</th>
                            <th class="middle">NTF</th>
                            <th class="middle">(umho/cm)</th>
                            <th class="middle">(umho/cm)</th>
                            <th class="middle">(mg/L)</th>
                            <th class="middle">(mg/L)</th>
                            <th class="middle">(mg/L)</th>
                            <th class="middle">(mg/L)</th>
                        </tr>        

                    </thead>
                    <tbody class="middle" style="text-align: center;">
                        
                    </tbody>                           
                    </table>
                </div>
            </center>
            </div>
        </div>
    </div>
</div>

<script>
    $( document ).ready(function() {
        $('.enchange input[type="button"]').on('click',function(){
            $("#enname").text($(this).val());
            switch ($(this).val()) {
                case "煙道":
                    $(".center-airquality,.center-noisevibration,.center-soil,.center-rawwater,.center-incineratorbottom,.center-enflyash").css('display','none');
                    $('.center-enflue').css('display','block');
                    break;
                case "原水":
                    $(".center-airquality,.center-noisevibration,.center-soil,.center-enflue,.center-incineratorbottom,.center-enflyash").css('display','none');
                    $('.center-rawwater').css('display','block');
                    break;
                case "TCLP底渣":
                    $(".center-airquality,.center-noisevibration,.center-soil,.center-rawwater,.center-enflue,.center-enflue").css('display','none');
                    $('.center-incineratorbottom').css('display','block');
                    break;
                case "空氣監測":
                    $(".center-enflue,.center-noisevibration,.center-soil,.center-rawwater,.center-incineratorbottom,.center-enflyash").css('display','none');
                    $('.center-airquality').css('display','block');
                    break;
                case "噪音振動":
                    $(".center-airquality,.center-enflue,.center-soil,.center-rawwater,.center-incineratorbottom,.center-enflyash").css('display','none');
                    $('.center-noisevibration').css('display','block');
                    break;
                case "土壤":
                    $(".center-airquality,.center-noisevibration,.center-enflue,.center-rawwater,.center-incineratorbottom,.center-enflyash").css('display','none');
                    $('.center-soil').css('display','block');
                    break;
                case "TCLP飛灰":
                    $(".center-airquality,.center-noisevibration,.center-soil,.center-rawwater,.center-incineratorbottom,.center-enflyash").css('display','none');
                    $('.center-enflyash').css('display','block');
                case "地下水":
                    $(".center-enflue,.center-airquality,.center-noisevibration,.center-soil,.center-rawwater,.center-incineratorbottom,.center-enflyash").css('display','none');
                    $('.center-groundwater').css('display','block');
                    break;
            }
        });
        getYear();
        changeYear($("#changeyear").val());
        
        $('#changeyear').on('change',function(){
            $(".table-enflue tbody").html("");
            $(".table-airquality tbody").html("");
            $(".table-noisevibration tbody").html("");
            $(".table-soil tbody").html("");
            $(".table-rawwater tbody").html("");
            $(".table-incineratorbottom tbody").html("");
            $(".table-enflyash tbody").html("");
            $(".table-engroundwater tbody").html("");
            changeYear($(this).val());
        });
    });

    function getYear(){
        $("#changeyear").html("");
        var d = new Date();
        var n = d.getFullYear();
        var years = [];
        for(var y=0; y<6; y++){
            years.push(n);
            n--;
        }

        var eachTable = $("#changeyear");
            $.each(years, function(index, element) {
                eachTable.append("<option>"+ element +"</option>");
                $("#addyearenflue,#addyearenairquality,#addyearennoisevibration,#addyearensoil,#addyearenrawwater#addyearenincineratorbottom,#addyearenflyash,#addyearengroundwater").append("<option>"+ element +"</option>");
            });

    }

    function changeYear(year){
        var values = [],values2 = [],values3 = [],values4 = [],values5 = [],values6 = [],values7 = [],values8 = [];
        var json = @json($data['enflue']);
        var json2 = @json($data['enairquality']);
        var json3 = @json($data['ennoisevibration']);
        var json4 = @json($data['ensoil']);
        var json5 = @json($data['enrawwater']);
        var json6 = @json($data['enincineratorbottom']);
        var json7 = @json($data['enflyash']);
        var json8 = @json($data['engroundwater']);


        for(var i = 0; i < json.length; i++){
            if(json[i].Year==year){
                values.push(json[i]);
            }
        }

        for(var i = 0; i < json2.length; i++){
            if(json2[i].Year==year){
                values2.push(json2[i]);
            }
        }

        for(var i = 0; i < json3.length; i++){
            if(json3[i].Year==year){
                values3.push(json3[i]);
            }
        }

        for(var i = 0; i < json4.length; i++){
            if(json4[i].Year==year){
                values4.push(json4[i]);
            }
        }

        for(var i = 0; i < json5.length; i++){
            if(json5[i].Year==year){
                values5.push(json5[i]);
            }
        }

        for(var i = 0; i < json6.length; i++){
            if(json6[i].Year==year){
                values6.push(json6[i]);
            }
        }

        for(var i = 0; i < json7.length; i++){
            if(json7[i].Year==year){
                values7.push(json7[i]);
            }
        }

        for(var i = 0; i < json8.length; i++){
            if(json8[i].Year==year){
                values8.push(json8[i]);
            }
        }

        var eachTable = $(".table-enflue tbody");
            $.each(values, function(index, element) {
                eachTable.append("<tr>" +
                                    "<td class='middle'>第"+ element.Season +"季</td>"+
                                    "<td class='middle'>"+ element.Location +"</td>"+
                                    "<td class='middle'>"+ element.Granular +"</td>"+
                                    "<td class='middle'>"+ element.Sulfurdioxide +"</td>"+
                                    "<td class='middle'>"+ element.Nitroxides +"</td>"+
                                    "<td class='middle'>"+ element.Carbonmonoxide +"</td>"+
                                    "<td class='middle'>"+ element.Hydrogenchloride +"</td>"+
                                    "<td class='middle'>"+ element.Pb +"</td>"+
                                    "<td class='middle'>"+ element.Cd +"</td>"+
                                    "<td class='middle'>"+ element.Hg +"</td>"+
                                    "<td class='middle'>"+ element.Dioxin +"</td>"+
                                "</tr>");
            });

        //$('.aaa').attr('rowspan', '3');
        $(".table-enflue td:nth-child(1):eq(0),.table-enflue td:nth-child(1):eq(3),.table-enflue td:nth-child(1):eq(6),.table-enflue td:nth-child(1):eq(9)").attr( "rowspan", "3" );
        $(".table-enflue td:nth-child(1):eq(1),.table-enflue td:nth-child(1):eq(2),.table-enflue td:nth-child(1):eq(4),.table-enflue td:nth-child(1):eq(5),.table-enflue td:nth-child(1):eq(7),.table-enflue td:nth-child(1):eq(8),.table-enflue td:nth-child(1):eq(10),.table-enflue td:nth-child(1):eq(11)").remove();
    
        var eachTable2 = $(".table-airquality tbody");
            $.each(values2, function(index, element) {
                eachTable2.append("<tr>" +
                                    "<td class='middle'>第"+ element.Season +"季</td>"+
                                    "<td class='middle'>"+ element.Location +"</td>"+
                                    "<td class='middle'>"+ element.Windspeed +"</td>"+
                                    "<td class='middle'>"+ element.Winddirection +"</td>"+
                                    "<td class='middle'>"+ element.Humidity +"</td>"+
                                    "<td class='middle'>"+ element.Temperature +"</td>"+
                                    "<td class='middle'>"+ element.TSP +"</td>"+
                                    "<td class='middle'>"+ element.SO2 +"</td>"+
                                    "<td class='middle'>"+ element.NOx +"</td>"+
                                    "<td class='middle'>"+ element.CO +"</td>"+
                                    "<td class='middle'>"+ element.THC +"</td>"+
                                    "<td class='middle'>"+ element.CH4 +"</td>"+
                                    "<td class='middle'>"+ element.NMHC +"</td>"+
                                    "<td class='middle'>"+ element.PM10 +"</td>"+
                                    "<td class='middle'>"+ element.PM25 +"</td>"+
                                    "<td class='middle'>"+ element.Dioxin +"</td>"+
                                "</tr>");
            });

        var eachTable3 = $(".table-noisevibration tbody");
            $.each(values3, function(index, element) {
                eachTable3.append("<tr>" +
                                    "<td class='middle'>第"+ element.Season +"季</td>"+
                                    "<td class='middle'>"+ element.Location +"</td>"+
                                    "<td class='middle'>"+ element.Lmorning +"</td>"+
                                    "<td class='middle'>"+ element.Levening +"</td>"+
                                    "<td class='middle'>"+ element.Lnight +"</td>"+
                                    "<td class='middle'>"+ element.Lvmorning +"</td>"+
                                    "<td class='middle'>"+ element.Lvnight +"</td>"+
                                "</tr>");
            });

        var eachTable4 = $(".table-soil tbody");
            $.each(values4, function(index, element) {
                eachTable4.append("<tr>" +
                                    "<td class='middle'>"+ element.Location +"</td>"+
                                    "<td class='middle'>"+ element.Pb +"</td>"+
                                    "<td class='middle'>"+ element.Cd +"</td>"+
                                    "<td class='middle'>"+ element.Hg +"</td>"+
                                    "<td class='middle'>"+ element.Dioxin +"</td>"+
                                "</tr>");
            });

        var eachTable5 = $(".table-rawwater tbody");
            $.each(values5, function(index, element) {
                eachTable5.append("<tr>" +
                                    "<td class='middle'>第"+ element.Season +"季</td>"+
                                    "<td class='middle'>"+ element.Location +"</td>"+
                                    "<td class='middle'>"+ element.Watertemperature +"</td>"+
                                    "<td class='middle'>"+ element.PHvalue +"</td>"+
                                    "<td class='middle'>"+ element.Suspendedsolids +"</td>"+
                                    "<td class='middle'>"+ element.COD +"</td>"+
                                    "<td class='middle'>"+ element.Coliform +"</td>"+
                                "</tr>");
            });

        var eachTable6 = $(".table-incineratorbottom tbody");
            $.each(values6, function(index, element) {
                eachTable6.append("<tr>" +
                                    "<td class='middle'>"+ element.Season +"</td>"+
                                    "<td class='middle'>"+ element.Location +"</td>"+
                                    "<td class='middle'>"+ element.Type +"</td>"+
                                    "<td class='middle'>"+ element.Cr6 +"</td>"+
                                    "<td class='middle'>"+ element.TotalCd +"</td>"+
                                    "<td class='middle'>"+ element.TotalCr +"</td>"+
                                    "<td class='middle'>"+ element.TotalCu +"</td>"+
                                    "<td class='middle'>"+ element.TotalPb +"</td>"+
                                    "<td class='middle'>"+ element.TotalBa +"</td>"+
                                    "<td class='middle'>"+ element.TotalAs +"</td>"+
                                    "<td class='middle'>"+ element.TotalHg +"</td>"+
                                    "<td class='middle'>"+ element.TotalSe +"</td>"+
                                "</tr>");
            });

        $(".table-incineratorbottom td:nth-child(1):eq(0),.table-incineratorbottom td:nth-child(1):eq(3)").attr( "rowspan", "3" );
        $(".table-incineratorbottom td:nth-child(1):eq(1),.table-incineratorbottom td:nth-child(1):eq(2),.table-incineratorbottom td:nth-child(1):eq(4),.table-incineratorbottom td:nth-child(1):eq(5)").remove();


        var eachTable7 = $(".table-enflyash tbody");
            $.each(values7, function(index, element) {
                eachTable7.append("<tr>" +
                                     "<td class='middle'>"+ element.Season +"</td>"+
                                    "<td class='middle'>"+ element.Location +"</td>"+
                                    "<td class='middle'>"+ element.Type +"</td>"+
                                    "<td class='middle'>"+ element.Cr6 +"</td>"+
                                    "<td class='middle'>"+ element.TotalCd +"</td>"+
                                    "<td class='middle'>"+ element.TotalCr +"</td>"+
                                    "<td class='middle'>"+ element.TotalCu +"</td>"+
                                    "<td class='middle'>"+ element.TotalPb +"</td>"+
                                    "<td class='middle'>"+ element.TotalBa +"</td>"+
                                    "<td class='middle'>"+ element.TotalAs +"</td>"+
                                    "<td class='middle'>"+ element.TotalHg +"</td>"+
                                    "<td class='middle'>"+ element.TotalSe +"</td>"+
                                "</tr>");
            });

        $(".table-enflyash td:nth-child(1):eq(0),.table-enflyash td:nth-child(1):eq(3),.table-enflyash td:nth-child(1):eq(6),.table-enflyash td:nth-child(1):eq(9)").attr( "rowspan", "3" );
        $(".table-enflyash td:nth-child(1):eq(1),.table-enflyash td:nth-child(1):eq(2),.table-enflyash td:nth-child(1):eq(4),.table-enflyash td:nth-child(1):eq(5),.table-enflyash td:nth-child(1):eq(7),.table-enflyash td:nth-child(1):eq(8),.table-enflyash td:nth-child(1):eq(10),.table-enflyash td:nth-child(1):eq(11)").remove();

        var eachTable8 = $(".table-engroundwater tbody");
        $.each(values8, function(index, element) {
            eachTable8.append("<tr>" +
                                "<td class='middle' style='background-color: #AACD03;border: 1px solid #AACD03;'>第"+ element.Season +"季</td>"+
                                "<td class='middle' style='border: 1px solid #aacd03;'>"+ element.Location +"</td>"+
                                "<td class='middle'>"+ element.Toc +"</td>"+
                                "<td class='middle'>"+ element.TDS +"</td>"+
                                "<td class='middle'>"+ element.Sulfate +"</td>"+
                                "<td class='middle'>"+ element.NaCl +"</td>"+
                                "<td class='middle'>"+ element.Totalhardness +"</td>"+
                                "<td class='middle'>"+ element.Nitratenitrogen +"</td>"+
                                "<td class='middle'>"+ element.Ammonianitrogen +"</td>"+
                                "<td class='middle'>"+ element.Pb +"</td>"+
                                "<td class='middle'>"+ element.Cr +"</td>"+
                                "<td class='middle'>"+ element.Mn +"</td>"+
                                "<td class='middle'>"+ element.Iron +"</td>"+
                                "<td class='middle'>"+ element.Hg +"</td>"+
                                "<td class='middle'>"+ element.As +"</td>"+
                                "<td class='middle'>"+ element.Ni +"</td>"+
                                "<td class='middle'>"+ element.Zn +"</td>"+
                                "<td class='middle'>"+ element.Cu +"</td>"+
                                "<td class='middle'>"+ element.PHvalue +"</td>"+
                                "<td class='middle'>"+ element.Temperature +"</td>"+
                                "<td class='middle'>"+ element.Turbidity +"</td>"+
                                "<td class='middle'>"+ element.Conductivity +"</td>"+
                                "<td class='middle'>"+ element.Specificconductivity +"</td>"+
                                "<td class='middle'>"+ element.Grease +"</td>"+
                                "<td class='middle'>"+ element.Cd +"</td>"+
                                "<td class='middle'>"+ element.TotalN +"</td>"+
                                "<td class='middle'>"+ element.TotalP +"</td>"+
                            "</tr>");
        });
    
    $(".table-engroundwater td:nth-child(1):eq(0),.table-engroundwater td:nth-child(1):eq(2),.table-engroundwater td:nth-child(1):eq(4),.table-engroundwater td:nth-child(1):eq(6)").attr( "rowspan", "2" );
    $(".table-engroundwater td:nth-child(1):eq(1),.table-engroundwater td:nth-child(1):eq(3),.table-engroundwater td:nth-child(1):eq(5),.table-engroundwater td:nth-child(1):eq(7)").remove();

    }
</script>
@endsection