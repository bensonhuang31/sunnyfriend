@extends('Layouts/app')

@section('content')
    <!--banner-->
    <div class="bannerArea b-box  wow fadeInDown" data-wow-delay="0.5s ">
        <img class="img-responsive" src="../assets/images/news/new_banner.jpg">
        <div class="titleBox clearfix">
            <h2>投資人專區</h2>
        </div>
    </div>
    <div class="wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="breads">
                    <a href="../index.php">首頁</a>
                    <span>></span>
                    <span>投資人專區</span>
                    <span>></span>
                    <b>財務資訊</b>
                </div>
            </div>
        </div>
    </div>
    <!--重大消息-->
    <div class="back2 back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h3>財務資訊<div class="titleline"></div></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <select class="selectpicker selectbtn" id="changeyear">
                        
                    </select>
                </div>
                </br>
                </br>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h4>中文財務報表資料</h4>
                    <table class="table table2 CHeach-table">
                        <thead>
                            <tr>
                                <th width="60%">檔案名稱</th>
                                <th width="10%" style="text-align: center;">檔案下載</th>
                            </tr>
                            <!--
                            <tr>
                            <td data-th="檔案名稱">106年 第1季合併財報</td>
                            <td data-th="檔案下載"><img class="img-responsive center-block" src="../assets/images/CorporateGovernance/pdf_download.png"></td>
                            </tr>
                            -->
                        </thead>
                        <tbody>
	                    </tbody>
                    </table>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h4>英文財務報表資料</h4>
                    <div class="table-responsive dragscroll">
                        <table class="table table2 ENeach-table">
                            <thead>
                                <tr>
                                    <th width="60%">檔案名稱</th>
                                    <th width="10%" style="text-align: center;">檔案下載</th>
                                </tr>
                                <!--
                                <tr>
                                 <td data-th="檔案名稱">2017 Consolidated Financial Statements Season1</td>
                                 <td data-th="檔案下載"><img class="img-responsive center-block" src="../assets/images/CorporateGovernance/pdf_download.png"></td>
                                </tr>
                                -->
                            </thead>
                            <tbody>
	                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

<script>
    $( document ).ready(function() {
        getYear();
        changeYear($("#changeyear").val());
        $('#changeyear').on('change',function(){
            $(".CHeach-table tbody").html("");
            $(".ENeach-table tbody").html("");
            changeYear($(this).val());
        });
    });

    function getYear(){
        $("#changeyear").html("");
        var d = new Date();
        var n = d.getFullYear();
        var years = [];
        for(var y=0; y<5; y++){
            years.push(n);
            n--;
        }

        var eachTable = $("#changeyear");
            $.each(years, function(index, element) {
                eachTable.append("<option>"+ element +"</option>");
            });
    }

    function changeYear(year){
        var CHvalues = [];
        var ENvalues = [];
        var json = @json($data);

        for(var i = 0; i < json.length; i++){
            if(json[i].Year==year && json[i].Type=="中文報表"){
                CHvalues.push(json[i]);
            }else if(json[i].Year==year && json[i].Type=="英文報表"){
                ENvalues.push(json[i]);
            }
        }

        var eachTable = $(".CHeach-table tbody");
            $.each(CHvalues, function(index, element) {
                eachTable.append("<tr>" +
                                    "<td data-th='檔案名稱'>"+ element.FileName +"</td>"+
                                    "<td data-th='檔案下載'><img class='img-responsive center-block' src='../assets/images/CorporateGovernance/pdf_download.png'></td>"+
                                "</tr>");
            });

        var eachTable = $(".ENeach-table tbody");
            $.each(ENvalues, function(index, element) {
                eachTable.append("<tr>" +
                                    "<td data-th='檔案名稱'>"+ element.FileName +"</td>"+
                                    "<td data-th='檔案下載'><img class='img-responsive center-block' src='../assets/images/CorporateGovernance/pdf_download.png'></td>"+
                                "</tr>");
            });
    }
</script>

@endsection