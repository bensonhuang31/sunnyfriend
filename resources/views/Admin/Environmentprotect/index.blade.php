@extends('Layouts/admin')

@section('content')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h3>環境保護查核行程</h3>
                        <!-- Page Heading -->
                    </div>
                </div>
                <div class="row" id="main">
                    <div class="col-sm-2 col-md-1" id="content">
                        <div class="dropdown">
                            <h4>選擇年度</h4>
                            <button type="button" class="btn dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown">
                                全部<span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu1" id="dropdownyear3">
                                <li><a>106</a></li>
                                <li><a>105</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2 col-md-1" id="content">
                        <div class="dropdown">
                            <h4>選擇類型</h4>
                            <button type="button" class="btn dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown">
                                全部<span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu1" id="dropdownclass2">
                                <li><a>106</a></li>
                                <li><a>105</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-10" id="content">
                        </br>
                        </br>
                        <button class="btnn btn-primary" data-toggle="modal" data-target="#AddInvetorInfo">新增檔案</button>
                        </br>
                        </br>
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
                                        <h4 class="modal-title" id="myModalLabel">環境保護查核行程</h4>
                                    </div>
                                    <!-- Modal Body -->
                                    <div class="modal-body">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <label class="control-label" for="inputEmail3">*日期</label>
                                                    <input type="email" class="form-control" id="inputEmail3" placeholder="請輸入日期" />
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <label class="control-label" for="inputEmail3">*事項</label>
                                                    <input type="email" class="form-control" id="inputEmail3" placeholder="請輸入名稱" />
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <label class="control-label" for="inputEmail3">*主辦機關</label>
                                                        <input type="email" class="form-control" id="inputEmail3" placeholder="中文報表" />
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <label class="control-label" for="inputEmail3">*結果</label>
                                                        <input type="email" class="form-control" id="inputEmail3" placeholder="輸入內容" />
                                                    </div>
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
@endsection