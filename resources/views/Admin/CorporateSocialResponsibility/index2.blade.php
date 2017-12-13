@extends('Layouts/admin')

@section('content')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h3>土豆鳥文學誌</h3>
                        <!-- Page Heading -->
                    </div>
                </div>
                <div class="row" id="main">
                    <div class="col-sm-8 col-md-10" id="content">
                        <button class="btnn btn btn-primary" data-toggle="modal" data-target="#AddInvetorInfo">新增檔案</button>
                        </br>
                        </br>
                        <!-- Modal -->
                        <div class="modal fade" id="AddInvetorInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    {!! Form::open(array('url'=>'/Admin/CorporateSocialResponsibility/index2','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                                        {{csrf_field()}}
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
                                            <div class="form-row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    </br>
                                                    <label class="control-label">*請選擇PDF檔案</label>
                                                    {!! Form::file('file', array('class' => 'btn btn-default filestyle','style'=>'width:100%')) !!}
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    </br>
                                                    <label class="control-label">*請選擇圖片</label>
                                                    {!! Form::file('image', array('class' => 'btn btn-default filestyle','style'=>'width:100%')) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal Footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                                Close
                                            </button>
                                            {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        <div class="back2 ack3 wow fadeInDown" data-wow-delay="0.5s">
            <div class="container-fluid">
            <div>
            @if(count($errors)>0)
                @if(is_object($errors))
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                @else
                    <p>{{(string)$errors}}</p>
                @endif
            @endif

            </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <table class="table table2 ">
                            <tr>
                                <th >上傳順序</th>
                                <th >檔案名稱</th>
                                <th >檔案</th>
                            </tr>
                            @foreach($data as $potato)
                                <tr>
                                    <td data-th="年度">{{$potato->id}}</td>
                                    <td data-th="檔案名稱">{{$potato->OriFileName}}</td>
                                    <td data-th="檔案">{{$potato->FileName}}</td>
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