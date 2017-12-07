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
                                <option>全部</option>
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
                                                    <input type="file" class="filestyle" id="btnfile2" data-icon="false" accept="application/pdf">
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

                        <div class="modal fade" id="EditInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                 <!-- Modal Header -->
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">編輯</h4>
                                    </div>
                                    <!-- Modal Body -->
                                    <div class="modal-body">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <label class="control-label">*新增年度</label>
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
                                                    <label class="control-label">*檔案名稱</label>
                                                    <input type="text" class="form-control" id="inputfilename2" placeholder="請輸入名稱" />
                                                </div>

                                                <div class="col-lg-6 col-md-12 col-sm-12">
                                                </br>
                                                    <label class="control-label">*夾帶PDF檔案</label>
                                                    <input type="file" class="filestyle" id="btnfile2" data-icon="false" accept="application/pdf">
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






        <!-- /.container-fluid -->
        <div class="back2 back3 wow fadeInDown" data-wow-delay="0.5s">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <table class="table table2 ">
                            <tr>
                                <th >年度</th>
                                <th >類型</th>
                                <th >檔案名稱</th>
                                <th >檔案</th>
                                <th>修改</th>
                            </tr>
                            <tr>
                                <td data-th="年度">106</td>
                                <td data-th="類型">中文報表</td>
                                <td data-th="檔案名稱">第一季合併財報</td>
                                <td data-th="檔案">XXX.PDF</td>
                                <td data-th="修改">
                                <button class="btn btnn btn-default" data-toggle="modal" data-target="#EditInfo">編輯</button>
                                <button class="btn btn-default" data-toggle="modal" data-target="#DelInfo">刪除</button>
                                </td>
                            </tr>
                            <tr>
                                <td data-th="年度">107</td>
                                <td data-th="類型">中文報表</td>
                                <td data-th="檔案名稱">第二季合併財報</td>
                                <td data-th="檔案">XXX.PDF</td>
                                <td data-th="修改">
                                <button class="btn btnn btn-default" data-toggle="modal" data-target="#EditInfo">編輯</button>
                                <button class="btn btn-default" data-toggle="modal" data-target="#DelInfo">刪除</button>
                                </td>
                            </tr>
                            <tr>
                                <td data-th="年度">106</td>
                                <td data-th="類型">英文報表</td>
                                <td data-th="檔案名稱">第一季合併財報</td>
                                <td data-th="檔案">XXX.PDF</td>
                                <td data-th="修改">
                                <button class="btn btnn btn-default" data-toggle="modal" data-target="#EditInfo">編輯</button>
                                <button class="btn btn-default" data-toggle="modal" data-target="#DelInfo">刪除</button>
                                </td>
                            </tr>
                             <tr>
                                <td data-th="年度">107</td>
                                <td data-th="類型">英文報表</td>
                                <td data-th="檔案名稱">第一季合併財報</td>
                                <td data-th="檔案">XXX.PDF</td>
                                <td data-th="修改">
                                <button class="btn btnn btn-default" data-toggle="modal" data-target="#EditInfo">編輯</button>
                                <button class="btn btn-default" data-toggle="modal" data-target="#DelInfo">刪除</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="footerline"></div>
                 <div class="row">
                    <div class="col-md-12" style="right">
                        <ul class="pagination">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->
@endsection