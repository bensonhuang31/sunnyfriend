@extends('Layouts/admin')

@section('content')
    <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row" id="main">
                    <div class="col-sm-12 col-md-12" id="content">
                        <h3>盈收公告</h3>
                        <div>
                            <div>
                                <h4>選擇年度</h4>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <select class="selectpicker selectbtn" id="changeyear">
                                        </select>
                                    </div>
                                    </br>
                                    </br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
    </div>
        <!-- /#page-wrapper -->

    <div class="modal fade" id="EditInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">修改</h4>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <input type="text" class="form-control" id="inputfilename2" placeholder="營收金額" />
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <input type="text" class="form-control" id="inputfilename2" placeholder="年度增(減)比例" />
                                                </div>
                                            </div>
                                        </form>
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">
                                            關閉
                                        </button>
                                        <button type="button" class="btn btn-primary">
                                            確認
                                        </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="DelInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Body -->
                <div class="modal-body">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-row form-group">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <label class="control-label">確認刪除嗎？</label>
                                                </div>
                                            </div>
                                        </form>
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">
                                            關閉
                                        </button>
                                        <button type="button" class="btn btn-primary">
                                            確認
                                        </button>
                </div>
            </div>
        </div>
    </div>

    <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="table-responsive dragscroll">
                            <table class="table table2  each-table">
                                <thead>
                                    <tr style="background-color: #AACD03;text-align: center;">
                                        <td class="middle" rowspan="4">月
                                            <br>(Month)</td>
                                        <td class="middle" class="middle" colspan="4">合併營收
                                            <br>(Consolidated)</td>
                                        <tr style="background-color: #AACD03;text-align: center;">
                                            <td class="middle">營收金額
                                                <br>(New Revenue)</td>
                                            <td class="middle">年度增(減)比例
                                                <br>(YoY Change)</td>
                                            <td class="middle" colspan="2"></td>
                                        </tr>
                                </thead>
                                <tbody class="middle" style="text-align: center;">
                                <!--
                                    <tr>
                                        <td>一月(Jan.)</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                        <button class="btn btnn btn-default" data-toggle="modal" data-target="#EditInfo">編輯</button>
                                        <button class="btn btn-default" data-toggle="modal" id="Jan" data-target="#DelInfo">刪除</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>二月(Feb.)</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                        <button class="btn btnn btn-default" data-toggle="modal" data-target="#EditInfo">編輯</button>
                                        <button class="btn btn-default" data-toggle="modal" id="Feb" data-target="#DelInfo">刪除</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>三月(Mar.)</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                        <button class="btn btnn btn-default" data-toggle="modal" data-target="#EditInfo">編輯</button>
                                        <button class="btn btn-default" data-toggle="modal" id="Mar" data-target="#DelInfo">刪除</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>四月(Apr.)</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                        <button class="btn btnn btn-default" data-toggle="modal" data-target="#EditInfo">編輯</button>
                                        <button class="btn btn-default" data-toggle="modal" id="Apr" data-target="#DelInfo">刪除</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>五月(May)</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                        <button class="btn btnn btn-default" data-toggle="modal" data-target="#EditInfo">編輯</button>
                                        <button class="btn btn-default" data-toggle="modal" id="May" data-target="#DelInfo">刪除</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>六月(Jun.)</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                        <button class="btn btnn btn-default" data-toggle="modal" data-target="#EditInfo">編輯</button>
                                        <button class="btn btn-default" data-toggle="modal" id="Jun" data-target="#DelInfo">刪除</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>七月(Jul.)</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                        <button class="btn btnn btn-default" data-toggle="modal" data-target="#EditInfo">編輯</button>
                                        <button class="btn btn-default" data-toggle="modal" id="Jul" data-target="#DelInfo">刪除</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>八月(Aug.)</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                        <button class="btn btnn btn-default" data-toggle="modal" data-target="#EditInfo">編輯</button>
                                        <button class="btn btn-default" data-toggle="modal" id="Aug" data-target="#DelInfo">刪除</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>九月(Sept.)</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                        <button class="btn btnn btn-default" data-toggle="modal" data-target="#EditInfo">編輯</button>
                                        <button class="btn btn-default" data-toggle="modal" id="Sep" data-target="#DelInfo">刪除</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>十月(Oct.)</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                        <button class="btn btnn btn-default" data-toggle="modal" data-target="#EditInfo">編輯</button>
                                        <button class="btn btn-default" data-toggle="modal" id="Oct" data-target="#DelInfo">刪除</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>十一月(Nov.)</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                        <button class="btn btnn btn-default" data-toggle="modal" data-target="#EditInfo">編輯</button>
                                        <button class="btn btn-default" data-toggle="modal" id="Nov" data-target="#DelInfo">刪除</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>十二月(Dec.)</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                        <button class="btn btnn btn-default" data-toggle="modal" data-target="#EditInfo">編輯</button>
                                        <button class="btn btn-default" data-toggle="modal" id="Dec" data-target="#DelInfo">刪除</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>本年累計(Total)</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                        <button class="btn btnn btn-default" data-toggle="modal" data-target="#EditInfo">編輯</button>
                                        <button class="btn btn-default" data-toggle="modal" data-target="#DelInfo">刪除</button>
                                        </td>
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
        getYear();
        changeYear($("#changeyear").val());
        $('#changeyear').on('change',function(){
            $(".each-table tbody").html("");
            changeYear($(this).val());
        });
    });

    function getYear(){
        $("#changeyear").html("");
        $("#addyear").html("");
        var d = new Date();
        var n = d.getFullYear();
        var years = [];
        for(var y=0; y<5; y++){
            years.push(n);
            n--;
        }

        var eachTable = $("#addyear");
            $.each(years, function(index, element) {
                eachTable.append("<option>"+ element +"</option>");
            });

        var eachTable = $("#changeyear");
            //eachTable.append("<option>全部</option>");
            $.each(years, function(index, element) {
                eachTable.append("<option>"+ element +"</option>");
            });
    }

    function changeYear(year){
        var values = [];
        var json = @json($data);

        for(var i = 0; i < json.length; i++){
            if(json[i].Year==year){
                values.push(json[i]);
            }
        }

        var eachTable = $(".each-table tbody");
        var AmountTotal = 0;
            $.each(values, function(index, element) {
                eachTable.append("<tr>" +
                                    "<td>"+ element.Month +"</td>"+
                                    "<td>"+ element.Amount +"</td>"+
                                    "<td>"+ element.Consolidated +"</td>"+
                                    "<td>"+
                                        "<button class='btn btnn btn-default' data-toggle='modal' data-target='#EditInfo'>編輯</button>"+
                                        "<button class='btn btn-default' data-toggle='modal' data-target='#DelInfo'>刪除</button>"+
                                    "<td>"+
                                "</tr>");
                AmountTotal+=parseInt(element.Amount);
                
            });

            eachTable.append("<tr>" +
                                "<td>本年累計(Total)</td>"+
                                "<td>"+ AmountTotal +"</td>"+
                                "<td></td>"+"<td></td>"+"<td></td>"+
                            "</tr>");
    }

</script>

@endsection