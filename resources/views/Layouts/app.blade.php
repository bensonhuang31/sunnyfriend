<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>日友環保科技股份有限公司</title>
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/owl.carousel.min.css" rel="stylesheet">
    <link href="../css/owl.theme.default.css" rel="stylesheet">
    <link href="../css/font-awesome.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/ihover2.css" rel="stylesheet">
    <link href="../css/sunfriend2.css" rel="stylesheet">
    <link href="../css/sub-sunfriend.css" rel="stylesheet">
    <link href="../css/bootstrap-dropdownhover.min.css" rel="stylesheet">
    <link href="../css/bootstrap-select.css" rel="stylesheet">
    <!--思源黑體 -->
    <style type="text/css">
    @import url(http://fonts.googleapis.com/earlyaccess/notosanstc.css);
    * {
        font-family: 'Noto Sans TC', sans-serif;
    }
    </style>
    <script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/owl.carousel.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600|Raleway:600,300|Josefin+Slab:400,700,600italic,600,400italic' rel='stylesheet' type='text/css'>

      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="body">
    <!--HEADER START-->
    <header>
        <div class="navbar-fixed-top wow fadeInDown">
            <nav class="navbar navbar-default ">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="../index.php" class="navbar-brand"><img alt="Brand" class="img-responsive" style="width:100%" src="../assets/images/LOGO-01-01.svg"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                    @if((Config::get('app.locale'))=="tw")
                        <div class="lan"><i class=" wow fa fa-globe" aria-hidden="true"></i><a href="{{ url('/lang/set/en') }}" >ENGLISH</a></div>
                    @else  
                        <div class="lan"><i class=" wow fa fa-globe" aria-hidden="true"></i><a href="{{ url('/lang/set/tw') }}" >CHINESE</a></div>
                    @endif
                        <ul class="nav navbar-nav navbar-right" data-hover="dropdown" data-animations="fadeInUp" data-dropdown-in="fadeInUp" data-dropdown-out="fadeOutDown">
                            <li class=" dropdown ">
                                <a href="../AboutSF/index.php" class="dropdown-toggle " data-toggle="dropdown">關於日友 <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu dropdown-menu-left ">
                                    <li><a href="../AboutSF/index.php">基本資料</a></li>
                                    <li><a href="../AboutSF/index2.php">營業項目與範圍</a></li>
                                    <li><a href="../AboutSF/index3.php">公司架構圖</a></li>
                                    <li><a href="../AboutSF/index4.php">經營團隊</a></li>
                                    <li><a href="../AboutSF/index5.php">公司組織圖</a></li>
                                    <li><a href="../AboutSF/index6.php">股權結構</a></li>
                                    <li><a href="../AboutSF/index7.php">法說會</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="../News/index.php" class="dropdown-toggle" data-toggle="dropdown">最新消息 <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu dropdown-menu-left ">
                                    <li><a href="../News/index.php">最新消息</a></li>
                                    <li><a href="../News/index2.php">重大訊息</a></li>
                                    <li><a href="../News/index3.php">環保連結</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="../CorporateGovernance/index.php" class="dropdown-toggle" data-toggle="dropdown">公司治理 <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu dropdown-menu-left ">
                                    <li><a href="../CorporateGovernance/index.php">公司治理</a></li>
                                    <li><a href="../CorporateGovernance/index2.php">運作規章</a></li>
                                    <li><a href="../CorporateGovernance/index3.php">內稽組織運作</a></li>
                                    <li><a href="../CorporateGovernance/index4.php">董事會</a></li>
                                    <li><a href="../CorporateGovernance/index5.php">董事成員多元化</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="../Investor/index.php" class="dropdown-toggle" data-toggle="dropdown">投資人專區 <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu dropdown-menu-left ">
                                    <li><a href="../Investor/index.php">股東會相關資訊</a></li>
                                    <li><a href="../Investor/index2.php">盈收公告</a></li>
                                    <li><a href="../Investor/index3.php">財務資訊</a></li>
                                    <li><a href="../Investor/index4.php">重大訊息參考網站</a></li>
                                    <li><a href="../Investor/index5.php">股利資訊</a></li>
                                    <li><a href="../Investor/index6.php">投資人連絡窗口</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="../CorporateSocialResponsibility/index.php" class="dropdown-toggle" data-toggle="dropdown">企業社會責任 <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu dropdown-menu-left ">
                                    <li><a href="../CorporateSocialResponsibility/index.php">導言</a></li>
                                    <li><a href="../CorporateSocialResponsibility/index2.php">企業社會責任政策</a></li>
                                    <li><a href="../CorporateSocialResponsibility/index3.php">具體作為及計畫</a></li>
                                    <li><a href="../CorporateSocialResponsibility/index4.php">企業社會責任報告書</a></li>
                                    <li><a href="../CorporateSocialResponsibility/index5.php">土豆鳥文學誌</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="../Stakeholder/index.php" class="dropdown-toggle" data-toggle="dropdown">利害關係人  <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="../Stakeholder/index.php">關係人鑑別議題與措施</a></li>
                                    <li><a href="../Stakeholder/index2.php">員工福利措施</a></li>
                                    <li><a href="../Stakeholder/index3.php">供應商管理政策</a></li>
                                    <li><a href="../Stakeholder/index4.php">申訴管道</a></li>
                                    <li><a href="../Stakeholder/index5.php">不道德行為檢舉制度</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">環境保護 <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="../Environmentalprotection/index.php">環保單位查核行程</a></li>
                                    <li><a href="../Environmentalprotection/index2.php">環境監測</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <div class="Gradientline"></div>
        </div>
    </header>
    
    @yield('content')
    <!--footer start from here-->
    <footer class="wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 footerleft">
                    <div class="logofooter">關於日友</div>
                    <p>本公司於2000年通過ISO14001(NSF) 環境管理系統標準驗證，並將環境政策徹底落實。本公司為提供客戶更完善服務，所經營業務廣泛，但以事業廢棄物之清除、處理、掩埋與政府焚化廠之承攬、興建、操作為主要業務。</p>
                    <div><img alt="Brand" class="img-responsive" src="../assets/images/footerLOGO.svg"></div>
                </div>
                <div class="col-md-8 col-sm-6 paddingtop-bottom">
                    <div class="heading7">聯繫我們</div>
                    <ul class="footer-ul">
                        <li>
                            <h6> <i class="fa fa-home" aria-hidden="true"></i>總公司</h6></li>
                        <li>
                            <p>雲林縣元長鄉元東路1-20號 TEL：(05)7885788(代表號) FAX：(05)7887933</p>
                        </li>
                        <li>
                            <h6> <i class="fa fa-home" aria-hidden="true"></i>台北</h6></li>
                        <li>
                            <p>台北市八德路三段20號10F-3 TEL：(02)25795580(代表號) FAX：(02)25794015</p>
                        </li>
                        <li>
                            <h6><i class="fa fa-phone" aria-hidden="true"></i>陳情專線</h6></li>
                        <li><a href="#"> 05-7885788-111</a></li>
                        <li>
                            <h6><i class="fa fa-envelope" aria-hidden="true"></i>Email Address</h6></li>
                        <li><a href="#"> sf@sunnyfriend.com.tw</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--footer start from here-->
    <a href="#" id="goTop" class="goTop"></a>
</body>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("goTop").style.display = "block";
    } else {
        document.getElementById("goTop").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document

</script>

    <div class="copyright footerbg">
        <div class="container">
            <div class="col-md-12">
                <p>© 2017 - All Rights with Sunny Friend</p>
            </div>
        </div>
    </div>
    <!--HEADER END-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/wow.js"></script>
        <script>
    new WOW().init();
    </script>
    <script src="../js/tutorial.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/scrollanimated.js"></script>
    <script src="../js/bootstrap-dropdownhover.min.js"></script>
    <script src="../js/dragscroll.js"></script>
    <script src="../js/bootstrap-select.js"></script>


    @yield('script')

</body>

</html>