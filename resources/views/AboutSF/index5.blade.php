@extends('Layouts/app')

@section('content')
<!--banner-->
    <div class="bannerArea b-box  wow fadeInDown" data-wow-delay="0.5s ">
        <img class="img-responsive" src="../assets/images/about/about_banner.jpg">
        <div class="titleBox clearfix">
            <h2>關於日友</h2>
        </div>
    </div>


<div class="wow fadeInDown" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="breads">
                <a href="../index.php">首頁</a>
                <span>></span>
                <span>關於日友</span>
                <span>></span>
                <b>公司組織圖</b>
            </div>
        </div>
    </div>
</div>



<!--公司架構圖-->
<div class="back3 wow fadeInDown" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <h3>公司組織圖<div class="titleline"></div></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <img alt="Brand" class="img-responsive center-block" style="width: 60%" src="../assets/images/about/組織圖-02.png">
            </div>
        </div>
    </div>
</div>
@endsection