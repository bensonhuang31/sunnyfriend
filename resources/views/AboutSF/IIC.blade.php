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
                <b>法說會</b>
            </div>
        </div>
    </div>
</div>



<!--法說會-->
<div class="back3 wow fadeInDown" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-12">
                <h3>法說會<div class="titleline"></div></h3>
                <h4>公告本公司召開上市前業績發表會</h4>
                <p style="text-align: left;">1.召開法人說明會之日期：2015/03/04。</br>2.召開法人說明會之時間：14時30分。</br>3.召開法人說明會之地點：台北君悅飯店三樓凱悅II廳。</br>4.法人說明會 『影音連結』(<span>完整較大影片請點連結</span>)</p>
                <br>
                 <a  class="btn btn-default btn-block" href="https://www.youtube.com/watch?v=O0cxefJvOx8" target="_blank" role="button" style="z-index:999;">完整影音連結</a>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/O0cxefJvOx8" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection