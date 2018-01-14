@section('CUD')

<div class="modal fade" id="AddInvetorInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                                <input type="text" class="form-control" placeholder="輸入內容" name="Granular" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*二氧化硫</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Sulfurdioxide" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*氮氧化合物</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Nitroxides" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*一氧化碳</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Carbonmonoxide" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*氯化氫</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Hydrogenchloride" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*鉛</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Pb" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*鎘</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Cd" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*汞</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Hg" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*戴奧辛</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Dioxin" required/>
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
                            <input type="text" class="form-control" placeholder="輸入內容" name="Watertemperature" required/>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <label class="control-label">*pH值</label></br>
                            <input type="text" class="form-control" placeholder="輸入內容" name="PHvalue" required/>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label" >*懸浮固體</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Suspendedsolids" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*化學需氧量</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="COD" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*大腸桿菌群</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Coliform" required/>
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
                                <input type="text" class="form-control" placeholder="輸入內容" name="Windspeed" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*風向</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Winddirection" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*濕度</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Humidity" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label" >*溫度</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Temperature" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*TSP</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="TSP" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*SO2</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="SO2" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label" >*NOx</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="NOx" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*CO</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="CO" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*THC</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="THC" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label" >*CH4</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="CH4" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*NMHC</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="NMHC" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*PM10</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="PM10" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label" >*CH4</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="PM25" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*NMHC</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Dioxin" required/>
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
                            <input type="text" class="form-control" placeholder="輸入內容" name="Lmorning" required/>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <label class="control-label">*L晚</label></br>
                            <input type="text" class="form-control" placeholder="輸入內容" name="Levening" required/>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label" >*L夜</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Lnight" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*LV日</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Lvmorning" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*LV夜</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Lvnight" required/>
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
                            <input type="text" class="form-control" placeholder="輸入內容" name="Pb" required/>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <label class="control-label">*鎘</label></br>
                            <input type="text" class="form-control" placeholder="輸入內容" name="Cd" required/>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label" >*汞</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Hd" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*戴奧辛</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Dioxin" required/>
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
                                <input type="text" class="form-control" placeholder="輸入內容" name="Cr6" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*總鎘</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="TotalCd" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*總鉻</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="TotalCr" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*總銅</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="TotalCu" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*總鉛</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="TotalPb" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*總鋇</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="TotalBa" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*總砷</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="TotalAs" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*總汞</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="TotalHg" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*總硒</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="TotalSe" required/>
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
                                <input type="text" class="form-control" placeholder="輸入內容" name="Cr6" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*總鎘</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="TotalCd" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*總鉻</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="TotalCr" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*總銅</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="TotalCu" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*總鉛</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="TotalPb" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*總鋇</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="TotalBa" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*總砷</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="TotalAs" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*總汞</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="TotalHg" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*總硒</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="TotalSe" required/>
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
                                <input type="text" class="form-control" placeholder="輸入內容" name="Toc" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*TDS</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="TDS" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*硫酸鹽</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Sulfate" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*氯鹽</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="NaCl" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*總硬度</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Totalhardness" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*硝酸鹽氮</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Nitratenitrogen" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*氨氮</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Ammonianitrogen" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*鉛</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Pb" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*鉻</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Cr" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*錳</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Mn" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*鐵</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Iron" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*汞</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Hg" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*砷</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="As" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*鎳</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Ni" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*鋅</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Zn" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*銅</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Cu" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*PH值</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="PHvalue" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*溫度</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Temperature" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*濁度</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Turbidity" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*導電度</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Conductivity" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*比導電度</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Specificconductivity" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*油脂</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Grease" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*鎘</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="Cd" required/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*總氮</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="TotalP" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label class="control-label">*總磷</label>
                                <input type="text" class="form-control" placeholder="輸入內容" name="TotalN" required/>
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



@endsection