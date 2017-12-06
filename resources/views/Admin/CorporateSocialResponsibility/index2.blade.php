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
                                                    <label class="control-label" for="file">*請選擇PDF檔案</label>
                                                    {!! Form::file('file', array('class' => 'btn btn-default','style'=>'width:100%')) !!}
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    </br>
                                                    <label class="control-label" for="image">*請選擇圖片</label>
                                                    {!! Form::file('image', array('class' => 'btn btn-default','style'=>'width:100%')) !!}
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
        <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
            <div class="container">
            <div>
            @if(count($errors)>0)
                @if(is_object($errors))
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                @else
                    <p><?php echo('1243');?></p>
                @endif
            @endif
            </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h3>土豆鳥文學誌<div class="titleline"></div></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <p>土豆鳥文學誌收錄了日友公司與元長鄉公所辦理之徵文比賽優秀作品、日友文學寫作營優秀作品、元長鄉活動花絮、社區之美、藝文活動…等等，贈送每位就讀元長地區學校的學生及教師，內容豐富多元深入地方，廣獲各界人士及學子們的好評，也為近年來日友敦親睦鄰的重點項目之一。</br>
                            </br>
                        </p>
                    </div>
                </div>
                <h5 style="color: #009943;">下載觀看&nbsp;<i class="fa fa-chevron-circle-down" aria-hidden="true"></i></h5>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="ih-item square effect14  csrshadow potatobirdmargin">
                            <img class="img-responsive img" src="../../assets/images/CorporateSocialResponsibility/土豆鳥雜誌/土豆鳥第一期.jpg">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="ih-item square effect14  csrshadow potatobirdmargin">
                            <img class="img-responsive img" src="../../assets/images/CorporateSocialResponsibility/土豆鳥雜誌/土豆鳥第二期.jpg">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="ih-item square effect14  csrshadow potatobirdmargin">
                            <img class="img-responsive img" src="../../assets/images/CorporateSocialResponsibility/土豆鳥雜誌/土豆鳥第三期.jpg">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="ih-item square effect14  csrshadow potatobirdmargin">
                            <img class="img-responsive img" src="../../assets/images/CorporateSocialResponsibility/土豆鳥雜誌/土豆鳥第四期.jpg">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="ih-item square effect14  csrshadow potatobirdmargin">
                            <img class="img-responsive img" src="../../assets/images/CorporateSocialResponsibility/土豆鳥雜誌/土豆鳥第五期.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection