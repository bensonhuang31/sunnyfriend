<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>日友環保科技股份有限公司</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../resources/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../../resources/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../resources/js/jquery-1.11.1.min.js"></script>
    <script src="../../resources/js/bootstrap.min.js"></script>
    <link href="../../resources/css/bootstrap-select.css" rel="stylesheet">
    <link href="../../resources/css/AdminBackside.css" rel="stylesheet">
</head>

<body>
    <div id="throbber" style="display:none; min-height:120px;"></div>
    <div id="noty-holder"></div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="pull-left" style="color:white;">
                    <a href="../"><h2 style="color:white; margin-top: 10px; margin-left: 10px;">日友環保科技股份有限公司</h2></a>
                </div>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="{{url('Admin/Logout')}}">登出</a>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#submenu-0"><i class="fa fa-fw fa-star"></i>最新消息<i class="fa fa-fw fa-angle-down pull-right"></i></a>
                        <ul id="submenu-0" class="collapse">
                            <li><a href="../../Admin/News/AdminNews">最新消息</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-star"></i>投資人專區<i class="fa fa-fw fa-angle-down pull-right"></i></a>
                        <ul id="submenu-1" class="collapse">
                            <li><a href="../../Admin/Investor/AdminIFSM">股東會相關資訊</a></li>
                            <li><a href="../../Admin/Investor/AdminMonthlyRevenue">盈收公告</a></li>
                            <li><a href="../../Admin/Investor/AdminFinancialInformation">財務資訊</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-star"></i>企業社會責任<i class="fa fa-fw fa-angle-down pull-right"></i></a>
                        <ul id="submenu-2" class="collapse">
                            <li><a href="../../Admin/CorporateSocialResponsibility/AdminCSRReport">企業社會責任報告書</a></li>
                            <li><a href="../../Admin/CorporateSocialResponsibility/AdminVanellusLiterature">土豆鳥文學誌</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#submenu-3"><i class="fa fa-fw fa-star"></i>環境保護<i class="fa fa-fw fa-angle-down pull-right"></i></a>
                        <ul id="submenu-3" class="collapse">
                            <li><a href="../../Admin/Environmentalprotection/AdminEnvUnit">環境保護查核行程</a></li>
                            <li><a href="../../Admin/Environmentalprotection/AdminEnvMonitoring">環境監測</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        @yield('content')
    </div>
    <!-- /#wrapper -->
    <script type="text/javascript">
    $(function() {
        $('[data-toggle="tooltip"]').tooltip();
        $(".side-nav .collapse").on("hide.bs.collapse", function() {
            $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
        });
        $('.side-nav .collapse').on("show.bs.collapse", function() {
            $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");
        });
    })
    </script>
    <script src="../../resources/js/bootstrap-select.min.js"></script>
    <script src="../../resources/js/bootstrap-filestyle.min.js"></script>
    <script src="../../resources/js/jquery.dataTables.min.js"></script>
    @yield('script')
</body>

</html>