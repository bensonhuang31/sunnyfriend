@extends('Layouts/app')

@section('content')
<!--banner-->
<div class="bannerArea b-box  wow fadeInDown" data-wow-delay="0.5s ">
    <img class="img-responsive" src="../resources/assets/images/news/new_banner01.jpg">
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
                <b>最新消息</b>
            </div>
        </div>
    </div>
</div>


    <!--最新消息-->
    <div id="news" class="back02  wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div id="owl-two" class="owl-theme owl-carousel">
                    <div class="item"><a href="../News/ImportantNews.html">
                                    <img class=" icon_img" src="../resources/assets/images/owl_icon/newsLOGO-02.svg">

                        <div class="ih-item square effect13 bottom_to_top">
                            <div class="news-caption">
                                <h1>重要消息</h1>
                                <h4>公開資訊觀測站</h4>
                                <p>投資人可以透過『公開資訊觀測站』，查詢本公司之重大訊息。(查詢代號：8341)......</p>
                            </div>
                            <img class="img-responsive img" src="../resources/assets/images/news/new01.jpg"></a>
                            <div class="info"></div>
                        </div>
                    </div>
                    <div class="item">
                                    <img class=" icon_img" src="../assets/images/owl_icon/newsLOGO-03.svg">

                        <div class="ih-item square effect13 bottom_to_top">
                            <div class="news-btn">
                                <h1>簡介影片</h1>
                                <h4>公司介紹</h4>
                                <a href="https://www.youtube.com/watch?v=nzoY7HRWAew&t=" target="_blank"><div class="btn btn-default newsbtn1 ">觀看中文版</div></a>
                                <a href="https://www.youtube.com/watch?v=gbnIhcsq_6c&t=" target="_blank"><div class="btn btn-default newsbtn1 ">觀看英文版</div></a>
                                <a href="../AboutSF/IIC.html"><div class="btn btn-default newsbtn2 ">法人說明會相關資訊</div></a>
                            </div>
                            <img class="img-responsive img" src="../resources/assets/images/news/new02.jpg">
                            <div class="info"></div>
                        </div>
                    </div>
                    <div class="item"><a href="../News/WebsiteLinks.html">
                      <img class=" icon_img" src="../assets/images/owl_icon/newsLOGO-04.svg">
                        <div class="ih-item square effect13 bottom_to_top">
                            <div class="news-caption">
                                <h1>環保連結</h1>
                                <h4>相關環保資訊</h4>
                                <p>日友彰濱廠(中區事業廢棄物綜合處理中心)青新環境工程(股)公司......</p>
                            </div>
                            <img class="img-responsive img" src="../resources/assets/images/news/new03.jpg">
                            <div class="info"></div>
                        </div>
                    </div>
                </div>
                <script>
                $(document).ready(function() {
                    var owl = $('#owl-two');
                    owl.owlCarousel({
                        margin: 30,
                        top:90,
                        nav: true,
                        loop: true,
                        dots: true,
                        responsive: {
                            0: {
                                items: 1
                            },
                            600: {
                                items: 3
                            },
                            1000: {
                                items: 3
                            }
                        }
                    })
                })
                </script>
            </div>
        </div>
    </div>
@endsection