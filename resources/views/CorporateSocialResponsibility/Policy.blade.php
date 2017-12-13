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
                    <b>企業社會責任政策</b>
                </div>
            </div>
        </div>
    </div>
    <!--導言-->
    <div class="backCSR1 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                <h3>日友公司企業社會責任政策<div class="titleline"></div></h3>
                    <p>日友公司除了確保處理廠做好環境保護工作，更以維護員工的安全與健康為目標，持續深入社會公益，都視為本公司應盡的社會責任，日友持續推動之企業社會責任政策：
                    </p>
                    <h5 style="color:#009943">(1)健全公司治理，確保穩健營運。</br>(2)強化職場環境，促進員工福利。</br>(3)創新技術能力，提昇服務品質。</br>(4)落實環境保護，確實遵守法令。</br>(5)深入社會公益，具體回饋地方。</h5>
                </div>
                <div class="col-md-6 col-sm-6">
                    <img class="img-responsive" src="../assets/images/CorporateSocialResponsibility/日友公司企業社會責任/企業社會責任.jpg">
                </div>
            </div>
        </div>
    </div>
    <!--相片輪播-->
    <div id="news" class="backCSR2 back02 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div id="owl-two" class="owl-theme owl-carousel">
                    <div class="item">
                        <div class="ih-item square effect14 csrshadow">
                            <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/日友公司企業社會責任/輪播/030文學營1.jpg">
                        </div>
                        <p>日友文學寫作營</p>
                    </div>
                    <div class="item">
                        <div class="ih-item square effect14 csrshadow">
                            <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/日友公司企業社會責任/輪播/030文學營2.jpg">
                        </div>
                        <p>日友文學寫作營</p>
                    </div>
                    <div class="item">
                        <div class="ih-item square effect14 csrshadow">
                            <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/日友公司企業社會責任/輪播/030文學營3.jpg">
                        </div>
                        <p>日友文學寫作營</p>
                    </div>
                    <div class="item">
                        <div class="ih-item square  effect14 csrshadow">
                            <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/日友公司企業社會責任/輪播/030文學營4.jpg">
                        </div>
                        <p>日友文學寫作營</p>
                    </div>
                    <div class="item">
                        <div class="ih-item square effect14 csrshadow">
                            <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/日友公司企業社會責任/輪播/031科學營1.jpg">
                        </div>
                        <p>日友環保科學營</p>
                    </div>
                    <div class="item">
                        <div class="ih-item square  effect14 csrshadow">
                            <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/日友公司企業社會責任/輪播/032.jpg">
                        </div>
                        <p>鼓勵追夢獎助學金</p>
                    </div>
                    <div class="item">
                        <div class="ih-item square  effect14 csrshadow">
                            <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/日友公司企業社會責任/輪播/033.jpg">
                        </div>
                        <p>鼓勵追夢獎助學金</p>
                    </div>
                    <div class="item">
                        <div class="ih-item square  effect14 csrshadow">
                            <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/日友公司企業社會責任/輪播/034.jpg">
                        </div>
                        <p>元長地方關懷活動</p>
                    </div>
                    <div class="item">
                        <div class="ih-item square  effect14 csrshadow">
                            <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/日友公司企業社會責任/輪播/035C.jpg">
                        </div>
                        <p>兒童育樂活動</p>
                    </div>
                </div>
                <script>
                $(document).ready(function() {
                    var owl = $('#owl-two');
                    owl.owlCarousel({
                        margin: 30,
                        top: 90,
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