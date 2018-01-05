@extends('Layouts/admin')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
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
                                <li role="presentation"><a href="#rawwater" aria-controls="rawwater" role="tab" data-toggle="tab">原水</a></li>
                                <li role="presentation"><a href="#airquality" aria-controls="airquality" role="tab" data-toggle="tab">空氣監測</a></li>
                                <li role="presentation"><a href="#noisevibration" aria-controls="noisevibration" role="tab" data-toggle="tab">噪音振動</a></li>
                                <li role="presentation"><a href="#soil" aria-controls="soil" role="tab" data-toggle="tab">土壤</a></li>
                                <li role="presentation"><a href="#enflyash" aria-controls="enflyash" role="tab" data-toggle="tab">TCLP飛灰</a></li>
                                <li role="presentation"><a href="#incineratorbottom" aria-controls="incineratorbottom" role="tab" data-toggle="tab">TCLP底渣</a></li>
                                <li role="presentation"><a href="#engroundwater" aria-controls="engroundwater" role="tab" data-toggle="tab">地下水</a></li>
                            </ul>
                        </div>
                        <!-- Modal Body -->
                        <div class="modal-body">
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="enflue">
                                <form class="form-horizontal" role="form">
                                    <div class="form-row form-group">
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
                                                <label class="control-label" >*檢測項目內容</label>
                                                <input type="enflue" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*粒狀汙染物</label>
                                                <input type="enflue" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*二氧化硫</label>
                                                <input type="enflue" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*氮氧化合物</label>
                                                <input type="enflue" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*一氧化碳</label>
                                                <input type="enflue" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*氯化氫</label>
                                                <input type="enflue" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*鉛</label>
                                                <input type="enflue" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*鎘</label>
                                                <input type="enflue" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*汞</label>
                                                <input type="enflue" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="airquality">
                                <form class="form-horizontal" role="form">
                                    <div class="form-row form-group">
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
                                                <input type="airquality" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*風向</label>
                                                <input type="airquality" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*濕度</label>
                                                <input type="airquality" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label" >*溫度</label>
                                                <input type="airquality" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*TSP</label>
                                                <input type="airquality" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*SO2</label>
                                                <input type="airquality" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label" >*NOx</label>
                                                <input type="airquality" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*CO</label>
                                                <input type="airquality" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*THC</label>
                                                <input type="airquality" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label" >*CH4</label>
                                                <input type="airquality" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*NMHC</label>
                                                <input type="airquality" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*PM10</label>
                                                <input type="airquality" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="noisevibration">
                                <form class="form-horizontal" role="form">
                                    <div class="form-row form-group">
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
                                            <input type="noisevibration" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*L晚</label></br>
                                            <input type="noisevibration" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label" >*L夜</label>
                                                <input type="noisevibration" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*LV日</label>
                                                <input type="noisevibration" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*LV夜</label>
                                                <input type="noisevibration" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="soil">
                                <form class="form-horizontal" role="form">
                                    <div class="form-row form-group">
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
                                            <input type="soil" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*鎘</label></br>
                                            <input type="soil" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label" >*汞</label>
                                                <input type="soil" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*戴奧辛</label>
                                                <input type="soil" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                        </div>
                                    </div>
                                </form>                                    
                            </div>
                            <div role="tabpanel" class="tab-pane" id="rawwater">
                                <form class="form-horizontal" role="form">
                                    <div class="form-row form-group">
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
                                            <input type="rawwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*pH值</label></br>
                                            <input type="rawwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label" >*懸浮固體</label>
                                                <input type="rawwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*化學需氧量</label>
                                                <input type="rawwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*大腸桿菌群</label>
                                                <input type="rawwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="incineratorbottom">
                                <form class="form-horizontal" role="form">
                                    <div class="form-row form-group">
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
                                                <input type="incineratorbottom" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總鎘</label>
                                                <input type="incineratorbottom" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總鉻</label>
                                                <input type="incineratorbottom" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總銅</label>
                                                <input type="incineratorbottom" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總鉛</label>
                                                <input type="incineratorbottom" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總鋇</label>
                                                <input type="incineratorbottom" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總砷</label>
                                                <input type="incineratorbottom" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總汞</label>
                                                <input type="incineratorbottom" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總硒</label>
                                                <input type="incineratorbottom" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="enflyash">
                                <form class="form-horizontal" role="form">
                                    <div class="form-row form-group">
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
                                                <input type="enflyash" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總鎘</label>
                                                <input type="enflyash" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總鉻</label>
                                                <input type="enflyash" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總銅</label>
                                                <input type="enflyash" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總鉛</label>
                                                <input type="enflyash" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總鋇</label>
                                                <input type="enflyash" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總砷</label>
                                                <input type="enflyash" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總汞</label>
                                                <input type="enflyash" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總硒</label>
                                                <input type="enflyash" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="engroundwater">
                                <form class="form-horizontal" role="form">
                                    <div class="form-row form-group">
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
                                                <input type="engroundwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*TDS</label>
                                                <input type="engroundwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*硫酸鹽</label>
                                                <input type="engroundwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*氯鹽</label>
                                                <input type="engroundwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總硬度</label>
                                                <input type="engroundwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*硝酸鹽氮</label>
                                                <input type="engroundwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*氨氮</label>
                                                <input type="engroundwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*鉛</label>
                                                <input type="engroundwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*鉻</label>
                                                <input type="engroundwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*錳</label>
                                                <input type="engroundwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*鐵</label>
                                                <input type="engroundwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*汞</label>
                                                <input type="engroundwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*砷</label>
                                                <input type="engroundwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*鎳</label>
                                                <input type="engroundwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*鋅</label>
                                                <input type="engroundwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*銅</label>
                                                <input type="engroundwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*PH值</label>
                                                <input type="engroundwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*溫度</label>
                                                <input type="engroundwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*濁度</label>
                                                <input type="engroundwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*導電度</label>
                                                <input type="engroundwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*比導電度</label>
                                                <input type="engroundwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*油脂</label>
                                                <input type="engroundwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*鎘</label>
                                                <input type="engroundwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總氮</label>
                                                <input type="engroundwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <label class="control-label">*總磷</label>
                                                <input type="engroundwater" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary">
                            確認上傳
                        </button>
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
                            <tr style="background-color: #AACD03;"">
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
@endsection