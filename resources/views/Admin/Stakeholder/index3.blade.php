@extends('Layouts/admin')

@section('content')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h3>財務資訊</h3>
                        <!-- Page Heading -->
                    </div>
                </div>
                <div class="row" id="main">
                    <div class="col-sm-2 col-md-2" id="content">
                        <div class="dropdown">
                            <h4>選擇年度</h4>
                            <select class="selectpicker selectbtn">
                                <option>107</option>
                                <option>106</option>
                                <option>105</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2 col-md-2" id="content">
                        <div class="dropdown">
                            <h4>選擇類型</h4>
                            <select class="selectpicker selectbtn">
                                <option>中文財報</option>
                                <option>英文財報</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2 col-md-2" id="content">
                        </br>
                        </br>
                        <button class="btnn btn btn-primary" data-toggle="modal" data-target="#AddInvetorInfo">新增檔案</button>
                        <!-- Modal -->
                        <div class="modal fade" id="AddInvetorInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
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
                                        <form class="form-horizontal" role="form">
                                            <div class="form-row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <label class="control-label" for="inputEmail3">*新增年度</label>
                                                    <select class="selectpicker selectbtn">
                                                        <option>107</option>
                                                        <option>106</option>
                                                        <option>105</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <label class="control-label" for="inputEmail3">*選擇類型</label>
                                                    <select class="selectpicker selectbtn">
                                                        <option>中文報表</option>
                                                        <option>英文報表</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row form-group">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <label class="control-label" for="inputEmail3">*檔案名稱</label>
                                                    <input type="email" class="form-control" id="inputfilename2" placeholder="請輸入名稱" />
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12">
                                                </br>
                                                    <label class="control-label" for="inputEmail3">*夾帶PDF檔案</label>
                                                    <button type="button" class="btn btn-default" id="btnpdffile2">請選擇檔案</button>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12">
                                                </br>
                                                    <label class="control-label" for="inputEmail3">*夾帶檔案圖示</label>
                                                    <button type="button" class="btn btn-default" id="btnimg2">請選擇圖示</button>
                                                </div>
                                            </div>
                                        </form>
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
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        <div class="back2 back3 wow fadeInDown" data-wow-delay="0.5s">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h3>財務資訊<div class="titleline"></div></h3>
                    </div>
                </div>
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
                    <div class="col-md-12 col-sm-12">
                        <h4>中文財務報表資料</h4>
                        <table class="table table2 ">
                            <tr>
                                <th width="60%">檔案名稱</th>
                                <th width="10%" style="text-align: center;">檔案下載</th>
                            </tr>
                            <tr>
                                <td data-th="檔案名稱">106年 第1季合併財報</td>
                                <td data-th="檔案下載"><img class="img-responsive center-block" src="../assets/images/pdf_download.png"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <h4>英文財務報表資料</h4>
                        <div class="table-responsive dragscroll">
                            <table class="table table2">
                                <tr>
                                    <th width="60%">檔案名稱</th>
                                    <th width="10%" style="text-align: center;">檔案下載</th>
                                </tr>
                                <tr>
                                    <td data-th="檔案名稱">2017 Consolidated Financial Statements Season1</td>
                                    <td data-th="檔案下載"><img class="img-responsive center-block" src="../assets/images/pdf_download.png"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->
@endsection