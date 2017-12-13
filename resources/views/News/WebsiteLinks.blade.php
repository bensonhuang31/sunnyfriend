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
                <b>環保連結</b>
            </div>
        </div>
    </div>
</div>

    <!--重大消息-->
<div class="back3 wow fadeInDown" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                        <img class="img-responsive center-block" src="../assets/images/news/環保署logo.png">
                        <div class="btn-group-vertical">
                        <button class="btn btn-default btnn ">行政院環境環保署</button>
                        <button class="btn btn-default btnn ">廢棄物管制中心</button>
                        <button class="btn btn-default btnn ">GPS專區</button>
                        </div>
            </div>
            <div class="col-md-6 col-sm-6">
                        <img class="img-responsive center-block" src="../assets/images/news/日友link.png">
                        <div class="btn-group-vertical">
                        <button class="btn btn-default btnn ">中區事業廢棄物處理中心</button>
                        </div>
            </div>
        </div>
                <div class="back99"> </div>
        <div class="text-center">
            <div class="btn btn-default ">返回上一頁</div>
        </div>
    </div>
</div>
@endsection