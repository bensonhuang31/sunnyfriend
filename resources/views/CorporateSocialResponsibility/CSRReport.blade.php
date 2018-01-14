@extends('Layouts/app')

@section('content')
    <!--banner-->
    <div class="bannerArea b-box  wow fadeInDown" data-wow-delay="0.5s ">
        <img class="img-responsive" src="../resources/assets/images/CorporateSocialResponsibility/CSR_banner.jpg">
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
                    <b>企業社會責任報告書</b>
                </div>
            </div>
        </div>
    </div>
    <!--導言-->
    <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h3>企業社會責任報告書<div class="titleline"></div></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <p>為了善盡企業社會責任及永續發展，藉由日友環保科技股份有限公司出具之企業社會責任報告書，讓利害關係人充份了解日友公司概況、經營績效、公司治理、 永續環境保護、員工關懷、社會公益，有系統的整合日友公司善盡 企業社會責任之成果，也為永續經營打下良好的基礎。</br>
                        </br>
                    </p>
                </div>
            </div>
             <h5 style="color: #009943;">下載觀看&nbsp;<i class="fa fa-chevron-circle-down" aria-hidden="true"></i></h5>
            <div class="row">
                @foreach($data as $img)
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="ih-item square effect14  csrshadow potatobirdmargin">
                            <img class="img-responsive img" src="{{url('resources/assets/images/CorporateSocialResponsibility/csr報告書/'.$img->OriFileName)}}">
                        </div>
                    </div>
                @endforeach
                <!--
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="ih-item square effect14  csrshadow potatobirdmargin">
                        <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/csr報告書/2014.jpg">
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="ih-item square effect14  csrshadow potatobirdmargin">
                        <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/csr報告書/2015.jpg">
                    </div>
                </div>
                <div class="clearfix visible-xs-block"></div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="ih-item square effect14  csrshadow potatobirdmargin">
                        <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/csr報告書/2016.jpg">
                    </div>

                </div>
                -->
            </div>
        </div>
    </div>
@endsection