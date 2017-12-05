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
                                        <select class="selectpicker selectbtn">
                                            <option>107</option>
                                            <option>106</option>
                                            <option>105</option>
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
    <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <select class="selectpicker selectbtn">
                            <option>107</option>
                            <option>106</option>
                            <option>105</option>
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
                            <table class="table table2">
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
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection