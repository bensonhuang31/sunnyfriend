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
                    <b>盈收公告</b>
                </div>
            </div>
        </div>
    </div>
    <!--重大消息-->
    <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h3>盈收公告<div class="titleline"></div></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <select class="selectpicker selectbtn"  id="changeyear">
                        <option>2017</option>
                        <option>2016</option>
                        <option>2015</option>
                    </select>
                </div>
                </br>
                </br>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <p>2017每月營收(2017 Monthly Revenue)</p>
                    <p>單位：新台幣仟元(In Thousands of New Taiwan Dollars)</p>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="table-responsive dragscroll">
                        <table class="table table2 each-table">
                            <thead>
                                <tr style="background-color: #AACD03;text-align: center;">
                                    <td class="middle" rowspan="2">月
                                        <br>(Month)</td>
                                    <td class="middle" class="middle" colspan="2">合併營收
                                        <br>(Consolidated)</td>
                                    <tr style="background-color: #AACD03;text-align: center;">
                                        <td class="middle">營收金額
                                            <br>(New Revenue)</td>
                                        <td class="middle">年度增(減)比例
                                            <br>(YoY Change)</td>
                                    </tr>
                            </thead>
                            <tbody class="middle" style="text-align: center;">
                            <!--
                                <tr>
                                    <td>一月(Jan.)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>二月(Feb.)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>三月(Mar.)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>四月(Apr.)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>五月(May)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>六月(Jun.)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>七月(Jul.)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>八月(Aug.)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>九月(Sept.)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>十月(Oct.)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>十一月(Nov.)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>十二月(Dec.)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                
                                <tr>
                                    <td>本年累計(Total)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                -->
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
        changeyear($("#changeyear").val());
        $('#changeyear').on('change',function(){
            $(".each-table tbody").html("");
            changeyear($(this).val());
        });
    });


    function changeyear(year){
        var values = [];
        var json = @json($data);

        for(var i = 0; i < json.length; i++){
            if(json[i].Year==year){
                values.push(json[i]);
            }
        }

        var eachTable = $(".each-table tbody");
            $.each(values, function(index, element) {
                eachTable.append("<tr>" +
                                    "<td>"+ element.Month +"</td>"+
                                    "<td>"+ element.Amount +"</td>"+
                                    "<td>"+ element.Consolidated +"</td>"+
                                "</tr>");
            });
    }
</script>

@endsection