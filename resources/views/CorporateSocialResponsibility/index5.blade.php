@extends('Layouts/app')

@section('content')
    <!--banner-->
    <div class="bannerArea b-box  wow fadeInDown" data-wow-delay="0.5s ">
        <img class="img-responsive" src="../assets/images/CorporateSocialResponsibility/CSR_banner.jpg">
        <div class="titleBox clearfix">
            <h2>企業社會責任</h2>
        </div>
    </div>
    <div class="wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="breads">
                    <a href="../index.php">首頁</a>
                    <span>></span>
                    <span>企業社會責任</span>
                    <span>></span>
                    <b>土豆鳥文學誌</b>
                </div>
            </div>
        </div>
    </div>
    <!--導言-->
    <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <h3>土豆鳥文學誌<div class="titleline"></div></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <p>土豆鳥文學誌收錄了日友公司與元長鄉公所辦理之徵文比賽優秀作品、日友文學寫作營優秀作品、元長鄉活動花絮、社區之美、藝文活動…等等，贈送每位就讀元長地區學校的學生及教師，內容豐富多元深入地方，廣獲各界人士及學子們的好評，也為近年來日友敦親睦鄰的重點項目之一。
                    </br>
                    </br>
                    </p>
                </div>
            </div>
             <h5 style="color: #009943;">下載觀看&nbsp;<i class="fa fa-chevron-circle-down" aria-hidden="true"></i></h5>
            <div class="row">
                @foreach($data as $img)
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="ih-item square effect14  csrshadow potatobirdmargin">
                            <img class="img-responsive img" src="{{url('assets/images/CorporateSocialResponsibility/土豆鳥雜誌/'.$img->OriFileName)}}">
                        </div>
                    </div>
                @endforeach
                <!--測試
                <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="ih-item square effect14  csrshadow potatobirdmargin">
                            <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/土豆鳥雜誌/土豆鳥第一期.jpg">
                        </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="ih-item square effect14  csrshadow potatobirdmargin">
                            <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/土豆鳥雜誌/土豆鳥第二期.jpg">
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="ih-item square effect14  csrshadow potatobirdmargin">
                            <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/土豆鳥雜誌/土豆鳥第三期.jpg">
                        </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="ih-item square effect14  csrshadow potatobirdmargin">
                            <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/土豆鳥雜誌/土豆鳥第四期.jpg">
                        </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="ih-item square effect14  csrshadow potatobirdmargin">
                            <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/土豆鳥雜誌/土豆鳥第五期.jpg">
                        </div>
                </div>
                -->
            </div>
        </div>
    </div>
@endsection