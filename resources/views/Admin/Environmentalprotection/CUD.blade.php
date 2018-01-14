

@section('CUD')

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
                                <th class="middle" colspan="1"></th>
                                <th class="middle" colspan="1"></th>
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
                                    <th class="middle"></th>
                                    <th class="middle"></th>
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
                                <th class="middle" colspan="1"></th>
                                <th class="middle" colspan="1"></th>
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
                                <th class="middle"></th>
                                <th class="middle"></th>
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
                                <th class="middle"></th>
                                <th class="middle"></th>
                            </tr>
                            <tr style="background-color: #cce166;text-align: center;">
                                <th class="middle" >(dB)</th>
                                <th class="middle" >(dB)</th>
                                <th class="middle" >(dB)</th>
                                <th class="middle" >(°C)</th>
                                <th class="middle" >(ug/m3)</th>
                                <th class="middle"></th>
                                <th class="middle"></th>

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
                                <th class="middle"></th>
                                <th class="middle"></th>
                            </tr>
                            <tr style="background-color: #cce166;">
                                <th class="middle" >(mg/kg)</th>
                                <th class="middle" >(mg/kg)</th>
                                <th class="middle" >(mg/kg)</th>
                                <th class="middle" >(ng-TEQ/Nm3)</th>
                                <th class="middle"></th>
                                <th class="middle"></th>
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
                                <th class="middle"></th>
                                <th class="middle"></th>
                            </tr>
                            <tr style="background-color: #cce166;">
                                <th class="middle" >°C</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle" >CFU/100mL</th>
                                <th class="middle"></th>
                                <th class="middle"></th>
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
                                <th class="middle"></th>
                                <th class="middle"></th>
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
                                <th class="middle"></th>
                                <th class="middle"></th>
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
                                <th class="middle"></th>
                                <th class="middle"></th>
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
                                <th class="middle"></th>
                                <th class="middle"></th>
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
                                <th class="middle" colspan="1"></th>
                                <th class="middle" colspan="1"></th>
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
                                    <th class="middle"></th>
                                    <th class="middle"></th>
                                </tr>        

                            </thead>
                            <tbody class="middle" style="text-align: center;">

                            </tbody>                           
                        </table>
                    </div>
            </center>

@endsection