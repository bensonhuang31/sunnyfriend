@extends('Layouts/admin')

@section('content')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h3>環境監測</h3>
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
                            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu1" id="dropdownyear4">
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
                            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu1" id="dropdownclass3">
                                <li><a>106</a></li>
                                <li><a>105</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-10" id="content">
                    </br></br>
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
                                        <h4 class="modal-title" id="myModalLabel">土豆鳥文學誌</h4>
                                    </div>
                                    <!-- Modal Body -->
                                    <div class="modal-body">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <label class="control-label" for="inputEmail3">*新增年度</label>
                                                    <input type="email" class="form-control" id="inputdat5" placeholder="請輸入年度" />
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <label class="control-label" for="inputEmail3">*股東會性質</label>
                                                    <input type="email" class="form-control" id="inputEmail3" placeholder="請輸入性質" />
                                                </div>
                                            </div>
                                            <div class="form-row form-group">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <label class="control-label" for="inputEmail3">*檔案名稱</label>
                                                    <input type="email" class="form-control" id="inputEmail3" placeholder="請輸入名稱" />
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <label class="control-label" for="inputEmail3">*夾帶PDF檔案</label>
                                                    <input type="email" class="form-control" id="inputEmail3" placeholder="請選擇PDF檔案" />
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <label class="control-label" for="inputEmail3">*夾帶檔案圖示</label>
                                                    <input type="email" class="form-control" id="inputEmail3" placeholder="請選擇圖示" />
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