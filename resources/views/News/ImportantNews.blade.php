@extends('Layouts/app')

@section('content')
<!--banner-->
<div class="bannerArea b-box  wow fadeInDown" data-wow-delay="0.5s ">
    <img class="img-responsive" src="../assets/images/news/new_banner01.jpg">
    <div class="titleBox clearfix">
        <h2>最新消息</h2>
    </div>
</div>


<div class="wow fadeInDown" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="breads">
                <a href="../index.php">首頁</a>
                <span>></span>
                <span>最新消息</span>
                <span>></span>
                <b>重大消息</b>
            </div>
        </div>
    </div>
</div>


    <!--重大消息-->
<div class="back3 wow fadeInDown" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <h3>重要訊息-公開資訊觀測站<div class="titleline"></div></h3>
                        <p>投資人可以透過『公開資訊觀測站』，查詢本公司之重大訊息。</br>
                            </br>
                            </br>
                        </p>
                        <h4>(查詢代號：<span>8341</span>)</h4>
                <br>
                <div class="btn btn-default btnn btn-block ">前往公開資訊觀測站</div>
            </div>
            <div class="col-md-8 col-sm-6">
                    <img class="img-responsive" src="../assets/images/Investor/股利資訊查詢.jpg">
                </div>
            </div>
            <div class="back99"> </div>
        </div>
                <div class="text-center">
            <div class="btn btn-default ">返回上一頁</div>
        </div>
    </div>
</div>
@endsection