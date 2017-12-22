@extends('Layouts/app')

@section('content')
    <!--banner-->
    <div class="bannerArea b-box  wow fadeInDown" data-wow-delay="0.5s ">
        <img class="img-responsive" src="../assets/images/stackholder/Business People Meeting Discussion Working Concept.jpg">
        <div class="titleBox clearfix">
            <h2>利害關係人</h2>
        </div>
    </div>
    <div class="wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="breads">
                    <a href="../index.php">首頁</a>
                    <span>></span>
                    <span>公司治理</span>
                    <span>></span>
                    <b>利害關係人鑑別議題與措施</b>
                </div>
            </div>
        </div>
    </div>
    <!--公司治理-->
    <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h3>環境監測<div class="titleline"></div></h3>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-6 enchange">
                        <input type="button" class="btn btn-primary" value="煙道"></input>
                        <input type="button" class="btn btn-primary" value="原水"></input>
                        <input type="button" class="btn btn-primary" value="TCLP"></input>
                        <input type="button" class="btn btn-primary" value="空氣監測"></input>
                        <input type="button" class="btn btn-primary" value="噪音振動"></input>
                        <input type="button" class="btn btn-primary" value="土穰"></input>
                        <input type="button" class="btn btn-primary" value="地下水"></input>
                    </br></br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-6">
                    <h2 id="enname">煙道</h2>
                    <h6>{{$data['enflyash']}}</h6>
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
                            <table class="table table2 table-enflue">
                            <thead>
                                <tr style="background-color: ;text-align: center;">
                               
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
                                <tr style="background-color: ;text-align: center;">
                               
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
                            <table class="table table2 table-airquality">
                            <thead>
                                <tr style="background-color: #AACD03;text-align: center;">
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
                                <tr style="background-color: #AACD03;text-align: center;">
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
                            <table class="table table2 table-noisevibration">
                            <thead>
                                <tr style="background-color: #AACD03;text-align: center;">
                                    <th class="middle" rowspan="2" colspan="2">檢測項目內容</th>
                                    <th class="middle" >L日</th>
                                    <th class="middle" >L晚</th>
                                    <th class="middle" >L夜</th>
                                    <th class="middle" >LV日</th>
                                    <th class="middle" >LV夜</th>
                                </tr>
                                <tr style="background-color: #AACD03;text-align: center;">
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
                            <table class="table table2 table-soil">
                            <thead>
                                <tr style="background-color: #AACD03;text-align: center;">
                                    <th class="middle" rowspan="2" colspan="1">檢測項目內容</th>
                                    <th class="middle" >鉛</th>
                                    <th class="middle" >鎘</th>
                                    <th class="middle" >汞</th>
                                    <th class="middle" >戴奧辛</th>
                                </tr>
                                <tr style="background-color: #AACD03;text-align: center;">
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
                            <table class="table table2 table-rawwater">
                            <thead>
                                <tr style="background-color: #AACD03;text-align: center;">
                                    <th class="middle" rowspan="2" colspan="2">檢測項目內容</th>
                                    <th class="middle" >水溫</th>
                                    <th class="middle" rowspan="2">pH值</th>
                                    <th class="middle" >懸浮固體</th>
                                    <th class="middle" >化學需氧量</th>
                                    <th class="middle" >大腸桿菌群</th>
                                </tr>
                                <tr style="background-color: #AACD03;text-align: center;">
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
                            <table class="table table2 table-incineratorbottom">
                            <thead>
                                <tr style="background-color: #AACD03;text-align: center;">
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
                                    <tr style="background-color: #AACD03;text-align: center;">
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
                            <table class="table table2 table-enflyash">
                            <thead>
                                <tr style="background-color: #AACD03;text-align: center;">
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
                                <tr style="background-color: #AACD03;text-align: center;">
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

                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')

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
                case "TCLP":
                    $(".center-airquality,.center-noisevibration,.center-soil,.center-rawwater,.center-incineratorbottom,.center-enflue").css('display','none');
                    $('.center-enflyash').css('display','block');
                    break;
                case "空氣監測":
                    $(".center-enflue,.center-noisevibration,.center-soil,.center-rawwater,.center-incineratorbottom,.center-enflyash").css('display','none');
                    $('.center-airquality').css('display','block');
                    break;
                case "噪音振動":
                    $(".center-airquality,.center-enflue,.center-soil,.center-rawwater,.center-incineratorbottom,.center-enflyash").css('display','none');
                    $('.center-noisevibration').css('display','block');
                    break;
                case "土穰":
                    $(".center-airquality,.center-noisevibration,.center-enflue,.center-rawwater,.center-incineratorbottom,.center-enflyash").css('display','none');
                    $('.center-soil').css('display','block');
                    break;
                case "地下水":
                    $(".center-airquality,.center-noisevibration,.center-soil,.center-rawwater,.center-enflue,.center-enflyash").css('display','none');
                    $('.center-incineratorbottom').css('display','block');

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
            });
    }

    function changeYear(year){
        var values = [];
        var values2 = [];
        var values3 = [];
        var values4 = [];
        var values5 = [];
        var values6 = [];
        var values7 = [];
        var json = @json($data['enflue']);
        var json2 = @json($data['enairquality']);
        var json3 = @json($data['ennoisevibration']);
        var json4 = @json($data['ensoil']);
        var json5 = @json($data['enrawwater']);
        var json6 = @json($data['enincineratorbottom']);
        var json7 = @json($data['enflyash']);


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

    }
</script>

@endsection