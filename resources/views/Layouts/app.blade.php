    <!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
        <title>日友環保科技股份有限公司</title>
        <!-- Bootstrap -->
        <link href="../resources/css/bootstrap.min.css" rel="stylesheet">
        <link href="../resources/css/owl.carousel.min.css" rel="stylesheet">
        <link href="../resources/css/owl.theme.default.css" rel="stylesheet">
        <link href="../resources/css/font-awesome.min.css" rel="stylesheet">
        <link href="../resources/css/animate.css" rel="stylesheet">
        <link href="../resources/css/ihover2.css" rel="stylesheet">
        <link href="../resources/css/sunfriend2.css" rel="stylesheet">
        <link href="../resources/css/{{Lang::get('sunnyfriend.css')}}" rel="stylesheet">
        <link href="../resources/css/bootstrap-dropdownhover.min.css" rel="stylesheet">
        <link href="../resources/css/bootstrap-select.css" rel="stylesheet">
        <!--思源黑體 -->
        <style type="text/css">
        @import url(http://fonts.googleapis.com/earlyaccess/notosanstc.css);
        * {
            font-family: 'Noto Sans TC', sans-serif;
        }
    </style>
    <script src="../resources/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../resources/js/owl.carousel.js"></script>
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
                        <a href="../" class="navbar-brand"><img alt="Brand" class="img-responsive" style="width:100%" src="../resources/assets/images/LOGO-01-01.svg"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        @if((Config::get('app.locale'))=="tw")
                        <div class="lan"><i class=" wow fa fa-globe" aria-hidden="true"></i><a href="{{ url('/lang/set/en') }}" >ENGLISH</a></div>
                        @else  
                        <div class="lan"><i class=" wow fa fa-globe" aria-hidden="true"></i><a href="{{ url('/lang/set/tw') }}" >CHINESE</a></div>
                        @endif
                        <ul class="nav navbar-nav navbar-right" data-hover="dropdown" data-animations="fadeInUp" data-dropdown-in="fadeInUp" data-dropdown-out="fadeOutDown">
                            <li class=" dropdown ">
                                <a href="../AboutSF/CompanyProfile" class="dropdown-toggle " data-toggle="dropdown">{{Lang::get('sunnyfriend.Home-1')}}<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu dropdown-menu-left ">
                                    <li><a href="../AboutSF/CompanyProfile">{{Lang::get('sunnyfriend.Home-2')}}</a></li>
                                    <li><a href="../AboutSF/ServiceAndArea">{{Lang::get('sunnyfriend.Home-3')}}</a></li>
                                    <li><a href="../AboutSF/Structure">{{Lang::get('sunnyfriend.Home-4')}}</a></li>
                                    <li><a href="../AboutSF/ManagingTeam">{{Lang::get('sunnyfriend.Home-5')}}</a></li>
                                    <li><a href="../AboutSF/Organization">{{Lang::get('sunnyfriend.Home-6')}}</a></li>
                                    <li><a href="../AboutSF/Shareholding">{{Lang::get('sunnyfriend.Home-7')}}</a></li>
                                    <li><a href="../AboutSF/IIC">{{Lang::get('sunnyfriend.Home-8')}}</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="../News/NewsCenter" class="dropdown-toggle" data-toggle="dropdown">{{Lang::get('sunnyfriend.Home-9')}}<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu dropdown-menu-left ">
                                    <li><a href="../News/latestNews">{{Lang::get('sunnyfriend.Home-10')}}</a></li>
                                    <li><a href="../News/ImportantNews">{{Lang::get('sunnyfriend.Home-11')}}</a></li>
                                    <li><a href="../News/WebsiteLinks">{{Lang::get('sunnyfriend.Home-12')}}</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="../CorporateGovernance/GovernancePreface" class="dropdown-toggle" data-toggle="dropdown">{{Lang::get('sunnyfriend.Home-13')}}<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu dropdown-menu-left ">
                                    <li><a href="../CorporateGovernance/GovernancePreface">{{Lang::get('sunnyfriend.Home-14')}}</a></li>
                                    <li><a href="../CorporateGovernance/Regulations">{{Lang::get('sunnyfriend.Home-15')}}</a></li>
                                    <li><a href="../CorporateGovernance/InternalAuditing">{{Lang::get('sunnyfriend.Home-16')}}</a></li>
                                    <li><a href="../CorporateGovernance/BoardofDirectors">{{Lang::get('sunnyfriend.Home-17')}}</a></li>
                                    <li><a href="../CorporateGovernance/Diversification">{{Lang::get('sunnyfriend.Home-18')}}</a></li>

                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="../Investor/IFSM" class="dropdown-toggle" data-toggle="dropdown">{{Lang::get('sunnyfriend.Home-19')}}<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu dropdown-menu-left ">
                                    <li><a href="../Investor/IFSM">{{Lang::get('sunnyfriend.Home-20')}}</a></li>
                                    <li><a href="../Investor/MonthlyRevenue">{{Lang::get('sunnyfriend.Home-21')}}</a></li>
                                    <li><a href="../Investor/FinancialInformation">{{Lang::get('sunnyfriend.Home-22')}}</a></li>
                                    <li><a href="../Investor/ExchangeLink">{{Lang::get('sunnyfriend.Home-23')}}</a></li>
                                    <li><a href="../Investor/DividendPolicy">{{Lang::get('sunnyfriend.Home-24')}}</a></li>
                                    <li><a href="../Investor/InvestmentCentre">{{Lang::get('sunnyfriend.Home-25')}}</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="../CorporateSocialResponsibility/Preface" class="dropdown-toggle" data-toggle="dropdown">{{Lang::get('sunnyfriend.Home-26')}}<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu dropdown-menu-left ">
                                    <li><a href="../CorporateSocialResponsibility/Preface">{{Lang::get('sunnyfriend.Home-27')}}</a></li>
                                    <li><a href="../CorporateSocialResponsibility/Policy">{{Lang::get('sunnyfriend.Home-28')}}</a></li>
                                    <li><a href="../CorporateSocialResponsibility/ResultsAndplans">{{Lang::get('sunnyfriend.Home-29')}}</a></li>
                                    <li><a href="../CorporateSocialResponsibility/CSRReport">{{Lang::get('sunnyfriend.Home-30')}}</a></li>
                                    <li><a href="../CorporateSocialResponsibility/VanellusLiterature">{{Lang::get('sunnyfriend.Home-31')}}</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="../Stakeholder/MaterialIssues" class="dropdown-toggle" data-toggle="dropdown">{{Lang::get('sunnyfriend.Home-32')}}<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="../Stakeholder/MaterialIssues">{{Lang::get('sunnyfriend.Home-33')}}</a></li>
                                    <li><a href="../Stakeholder/EmployeeBenefits">{{Lang::get('sunnyfriend.Home-34')}}</a></li>
                                    <li><a href="../Stakeholder/SMP">{{Lang::get('sunnyfriend.Home-35')}}</a></li>
                                    <li><a href="../Stakeholder/GrievanceMachinery">{{Lang::get('sunnyfriend.Home-36')}}</a></li>
                                    <li><a href="../Stakeholder/UBGM">{{Lang::get('sunnyfriend.Home-37')}}</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="../Environmentalprotection/EnvironmentalUnit" class="dropdown-toggle" data-toggle="dropdown">{{Lang::get('sunnyfriend.Home-38')}}<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="../Environmentalprotection/EnvironmentalUnit">{{Lang::get('sunnyfriend.Home-39')}}</a></li>
                                    <li><a href="../Environmentalprotection/EnvironmentMonitoring">{{Lang::get('sunnyfriend.Home-40')}}</a></li>
                                    <li><a href="../Environmentalprotection/Energysaving">{{Lang::get('sunnyfriend.Home-41')}}</a></li>
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
                    <div class="logofooter">{{Lang::get('sunnyfriend.Footer-1')}}</div>
                    <p>日友公司成立於1994年，2000年成為潤泰集團環保產業基地，也是臺灣第一家專業生物醫療廢棄物焚化處理公司，日友公司擁有從研發、設計、製圖、操作、系統改良等全方位的廢棄物處理經驗，不斷革新並擴展海外市場，使日友公司營運得以穩定成長。</p>
                    <div><img alt="Brand" class="img-responsive" src="../resources/assets/images/footerLOGO.svg"></div>
                </div>
                <div class="col-md-8 col-sm-6 paddingtop-bottom">
                    <div class="heading7">{{Lang::get('sunnyfriend.Footer-2')}}</div>
                    <ul class="footer-ul">
                        <li>
                            <h6> <i class="fa fa-home" aria-hidden="true"></i>{{Lang::get('sunnyfriend.Footer-3')}}</h6></li>
                            <li>
                                <p>{{Lang::get('sunnyfriend.Footer-4')}}</br>{{Lang::get('sunnyfriend.Footer-11')}}{{Lang::get('sunnyfriend.Footer-12')}}</p>
                            </li>
                            <li>
                                <h6> <i class="fa fa-home" aria-hidden="true"></i>{{Lang::get('sunnyfriend.Footer-5')}}</h6></li>
                                <li>
                                    <p>{{Lang::get('sunnyfriend.Footer-6')}}</br>{{Lang::get('sunnyfriend.Footer-13')}}{{Lang::get('sunnyfriend.Footer-14')}}</p>
                                </li>
                                <li>
                                    <h6><i class="fa fa-phone" aria-hidden="true"></i>{{Lang::get('sunnyfriend.Footer-7')}}</h6></li>
                                    <li><a href="#">{{Lang::get('sunnyfriend.Footer-8')}}</a></li>
                                    <li>
                                        <h6><i class="fa fa-envelope" aria-hidden="true"></i>{{Lang::get('sunnyfriend.Footer-9')}}</h6></li>
                                        <li><a href="#">{{Lang::get('sunnyfriend.Footer-10')}}</a></li>
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
<script src="../resources/js/bootstrap.min.js"></script>
<script src="../resources/js/wow.js"></script>
<script>
    new WOW().init();
</script>
<script src="../resources/js/tutorial.js"></script>
<script src="../resources/js/jquery.easing.1.3.js"></script>
<script src="../resources/js/scrollanimated.js"></script>
<script src="../resources/js/bootstrap-dropdownhover.min.js"></script>
<script src="../resources/js/dragscroll.js"></script>
<script src="../resources/js/bootstrap-select.js"></script>


@yield('script')

</body>

</html>