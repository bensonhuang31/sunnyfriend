@extends('Layouts/admin')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div>
                @if (session('status')=='success')
                <div style="margin-top:50px;" class="alert alert-success">
                    <ul>
                        <li>{{session('message')}}</li>
                    </ul>
                </div>
                @elseif (session('status')=='failed')
                <div style="margin-top:50px;" class="alert alert-danger">
                    <ul>
                        <li>{{session('message')}}</li>
                    </ul>
                </div>
                @endif

                @if (count($errors) > 0)
                <div style="margin-top:50px;" class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </br></br>
            </div>
            <div class="col-sm-12 col-md-12">
                <h3>盈收公告</h3>
            </div>
        </div>
        <!-- Page Heading -->
        <div class="row" id="main">
            <div class="col-sm-12 col-md-12" id="content">
                <h4>選擇年度</h4>
                <select class="selectpicker selectbtn" id="changeyear">
                </select>
                <button class="btnn btn btn-primary" data-toggle="modal" data-target="#AddInvetorInfo">新增</button>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="AddInvetorInfo" style="margin-top:50px;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                {!! Form::open(array('url'=>'/Admin/Investor/AdminMonthlyRevenue','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                {{csrf_field()}}
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">財務資訊</h4>
                    </div>
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <div class="form-row form-group">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <label class="control-label" for="inputEmail3">*新增年度</label>
                                <select class="selectpicker selectbtn" id="addyear" name="year">
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <label class="control-label">*月</label>
                                <select class="selectpicker selectbtn" name="month">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>    
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <label class="control-label">*營收金額</label>
                                <input type="text" class="form-control" id="inputmoney" placeholder="請輸入營收金額" name="amount" required/>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</br>

<div class="back3 wow fadeInDown" data-wow-delay="0.5s">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="table-responsive dragscroll">
                    <table class="table table2  each-table">
                        <thead>
                            <tr style="background-color: #AACD03;text-align: center;">
                                <td class="middle" rowspan="4">月
                                    <br>(Month)</td>
                                    <td class="middle" class="middle" colspan="2">合併營收
                                        <br>(Consolidated)</td>
                                        <td class="middle" class="middle" colspan="1"></td>
                                    </tr>
                                    <tr style="background-color: #AACD03;text-align: center;">
                                        <td class="middle">營收金額
                                            <br>(New Revenue)</td>
                                            <td class="middle">年度增(減)比例
                                                <br>(YoY Change)</td>
                                                <td class="middle" colspan="2">修改</td>
                                            </tr>
                                        </thead>
                                        <tbody class="middle" style="text-align: center;">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="EditInfo" style="margin-top:50px;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        {!! Form::open(array('url'=>'/Admin/Investor/AdminMonthlyRevenue/edit','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                        {{csrf_field()}}
                        <input name="id" type="hidden">
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
                                <div class="form-row form-group">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <label class="control-label">*營收金額</label>
                                        <input type="text" class="form-control" id="inputfilename2" placeholder="營收金額"  name="amount" required/>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                {!! Form::submit('送出', array('class'=>'btn btn-primary')) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>

                <div class="modal fade" id="DelInfo" style="margin-top:50px;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        {!! Form::open(array('url'=>'/Admin/Investor/AdminMonthlyRevenue/delete','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                        {{csrf_field()}}
                        <input name="id" type="hidden"> 
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
                                <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                {!! Form::submit('確認', array('class'=>'btn btn-primary')) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
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
                        $("#changeyear #addyear").html("");
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
            var values = [],lastvalues = [];
            var json = @json($data);

            var lastAmountTotal = 0;//去年盈收金額

            for(var i = 0; i < json.length; i++){
                if(json[i].Year==year){
                    values.push(json[i]);
                }else if(json[i].Year==year-1){
                    lastvalues.push(json[i]);
                }
            }

            var monthAmount=0,lastmonthAmount=0;
            for(var a = 0; a < values.length; a++){
                for(var b = 0; b < 12; b++){
                    if(values[a].Month==lastvalues[b].Month)
                    {
                        monthAmount+=parseInt(values[a].Amount);
                        lastmonthAmount+=parseInt(lastvalues[b].Amount);
                    }
                }
            }
            
            var eachTable = $(".each-table tbody");
            var AmountTotal = 0;//今年盈收金額
            var ConsolidatedTotal = 0;//今年年度增減比例
            $.each(values, function(index, element) {
                eachTable.append("<tr>" +
                    "<td data-th='月' class='Month' style='text-align: center;'>"+ element.Month +"</td>"+
                    "<td data-th='營收金額' class='Amount' style='text-align: center;'>"+ fnc_format(element.Amount) +"</td>"+
                    "<td data-th='年度增減比例' class='Consolidated' style='text-align: center;'>"+ element.Consolidated +" %</td>"+
                    "<td>"+
                    "<button class='btn btnn btn-default openedit' data-toggle='modal' data-id="+ element.id +" data-target='#EditInfo'>編輯</button>"+
                    "<button class='btn btn-default opendel' data-toggle='modal' data-id="+ element.id +" data-target='#DelInfo'>刪除</button>"+
                    "</td>"+
                    "</tr>");
                AmountTotal+=parseInt(element.Amount);
                ConsolidatedTotal=(monthAmount-lastmonthAmount)/lastmonthAmount;
            });

            eachTable.append("<tr>" +
                "<td>本年累計(Total)</td>"+
                "<td>"+ fnc_format(AmountTotal.toString()) +"</td>"+
                "<td>"+ (ConsolidatedTotal*100).toFixed(2) +" %</td>"+"<td></td>"+
                "</tr>");

            $('.openedit').on("click", function () {
                var tr = $(this).closest('tr');
                var amount = tr.find(".Amount").text().replace(',','');
                var consolidated = tr.find(".Consolidated").text();
                $("#EditInfo").find("input[name='id']").val($(this).attr('data-id'));
                $("#EditInfo").find("input[name='amount']").val(amount);
            });

            $('.opendel').on("click", function () {           
                $("#DelInfo").find("input[name='id']").val($(this).attr('data-id'));    
            });
        }

        function fnc_format(str){    
            var newStr="";  
            for(var m=0;m<str.length;m++){
                var c=str.charAt(m);
                if(c=='.')
                    break;
            }
            var b=m%3; 
            switch(b){
                case 1:{
                    for(var i=0;i<str.length;i++){
                        newStr=newStr+str.charAt(i);
                        if(i==0){
                            newStr=newStr+',';
                        }
                        else {
                            if(i%3==0 && i<m-1){
                                newStr=newStr+',' ;
                            }
                        }
                    }
                    break;
                }
                case 2:{
                    for(var i=0;i<str.length;i++){
                        newStr=newStr+str.charAt(i);
                        if(i==1){
                            newStr=newStr+',';
                        }
                        else {
                            if((i+2)%3==0 && i<m-1){
                                newStr=newStr+',' ;
                            }
                        }
                    }
                    break;
                }
                case 0:{
                    for(var i=0;i<str.length;i++){
                        newStr=newStr+str.charAt(i);
                        if((i+1)%3==0 && i<m-1){
                            newStr=newStr+',';
                        }
                    }
                    break;
                }         
            }
            return newStr;
        }


    </script>

    @endsection