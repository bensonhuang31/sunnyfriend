@extends('Layouts/admin')

@section('content')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h3>股東會相關資訊</h3>
                        <!-- Page Heading -->
                    </div>
                </div>
                <div class="row" id="main">
                    <div class="col-sm-4 col-md-2" id="content">
                        <h4>選擇年度</h4>
                        <select class="selectpicker selectbtn" id="changeyear">
                        </select>
                    </div>
                    <div class="col-sm-8 col-md-10" id="content">
                        </br>
                        </br>
                        <button class="btnn btn btn-primary" data-toggle="modal" data-target="#AddInvetorInfo">新增</button>
                        </br>
                        </br>
                        <!-- Modal -->
                        <div class="modal fade" id="AddInvetorInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            {!! Form::open(array('url'=>'/Admin/Investor/index','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                            {{csrf_field()}}
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">股東會相關資訊</h4>
                                    </div>
                                    <!-- Modal Body -->
                                    <div class="modal-body">
                                            <div class="form-row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <label class="control-label">*新增年度</label>
                                                    <select class="selectpicker selectbtn" id="addyear" name="year">
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <label class="control-label">*股東會性質</label>
                                                    <input type="stakeholder" class="form-control" id="inputclass1" placeholder="請輸入性質" name="type"/>
                                                </div>
                                            </div>
                                            <div class="form-row form-group">
                                                <div class="col-lg-12 col-md-12 col-sm-12" >
                                                    <label class="control-label">*檔案名稱</label>
                                                    <input type="text" class="form-control" id="inputfilename2" placeholder="請輸入名稱" name="filename"/>
                                                </div>

                                                <div class="col-lg-6 col-md-12 col-sm-12">
                                                </br>
                                                    <label class="control-label" >*夾帶PDF檔案</label>
                                                    {!! Form::file('file', array('class' => 'filestyle','accept'=>'application/pdf','onchange' => 'checkfile(this)')) !!}
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- Modal Footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">
                                            關閉
                                        </button>
                                        {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
                                    </div>
                                </div>
                                {!! Form::close() !!}
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
                                                    <label class="control-label">*股東會性質</label>
                                                    <input type="stakeholder" class="form-control" id="inputclass1" placeholder="請輸入性質" />
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
                    <a href=""><input type="submit" style="text-align: right" class="btn btnn btn-default" value="編輯"></a>
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
                        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                         <button type="button" class="btn btn-primary">確認</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- /.container-fluid -->
        <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <table class="table table2 ">
                            <tr>
                                <th>年度</th>
                                <th>股東會性質</th>
                                <th>檔案名稱</th>
                                <th>檔案</th>
                                <th>修改</th>

                            </tr>
                            @foreach($data as $shareholders)
                                <tr>
                                    <td data-th="年度">{{$shareholders->Year}}</td>
                                    <td data-th="股東會性質">{{$shareholders->Type}}</td>
                                    <td data-th="檔案名稱">{{$shareholders->FileName}}</td>
                                    <td data-th="檔案下載">{{$shareholders->FilePath}}</td>
                                    <td data-th="修改">
                                    <button class="btn btnn btn-default" data-target="#EditInfo">編輯</button>
                                    <button class="btn btn-default" data-toggle="modal" data-target="#DelInfo">刪除</button>
                                    </td>
                                </tr>
                            @endforeach
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
@endsection

@section('script')

<script>
    $( document ).ready(function() {
        getYear();
    });

    function getYear(){
        $("#changeyear").html("");
        $("#addyear").html("");
        var d = new Date();
        var n = d.getFullYear()+1;
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
            eachTable.append("<option>全部</option>");
            $.each(years, function(index, element) {
                eachTable.append("<option>"+ element +"</option>");
            });
    }
    

    function checkfile(obj){
        pdffile = obj.value.substr(obj.value.lastIndexOf(".")).toLowerCase();
        if (pdffile != '.pdf'){
        alert("請上傳PDF檔案");
        $(obj).empty();
        return false;
    }
}
</script>

@endsection