<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>日友環保科技股份有限公司</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/backside.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="../css/bootstrap-select.css" rel="stylesheet">
    <script src="../js/bootstrap-select.js"></script>
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
                    <h2>日友環保科技股份有限公司</h2>
                </div>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">登出</a>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                                    <li>
                        <a href="#" data-toggle="collapse" data-target="#submenu-0"><i class="fa fa-fw fa-star"></i>最新消息<i class="fa fa-fw fa-angle-down pull-right"></i></a>
                        <ul id="submenu-0" class="collapse">
                            <li><a href="../News/index.html">最新消息</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-star"></i>投資人專區<i class="fa fa-fw fa-angle-down pull-right"></i></a>
                        <ul id="submenu-1" class="collapse">
                            <li><a href="../Stakeholder/index.html">股東會相關資訊</a></li>
                            <li><a href="../Stakeholder/index2.html">盈收公告</a></li>
                            <li><a href="../Stakeholder/index3.html">財務資訊</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-star"></i>企業社會責任<i class="fa fa-fw fa-angle-down pull-right"></i></a>
                        <ul id="submenu-2" class="collapse">
                            <li><a href="../CorporateSocialResponsibility/index.html">企業社會責任報告書</a></li>
                            <li><a href="../CorporateSocialResponsibility/index2.html">土豆鳥文學誌</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#submenu-3"><i class="fa fa-fw fa-star"></i>環境保護<i class="fa fa-fw fa-angle-down pull-right"></i></a>
                        <ul id="submenu-3" class="collapse">
                            <li><a href="../Environmentprotect/index.html">環境保護查核行程</a></li>
                            <li><a href="../Environmentprotect/index2.html">環境監測</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h3>企業社會責任報告書</h3>
                        <!-- Page Heading -->
                    </div>
                </div>
                <div class="row" id="main">
                    <div class="col-sm-8 col-md-10" id="content">
                        <button class="btnn btn btn-primary" data-toggle="modal" data-target="#AddInvetorInfo">新增檔案</button>
                        </br>
                        </br>
                        <!-- Modal -->
                        <div class="modal fade" id="AddInvetorInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">企業社會責任報告書</h4>
                                    </div>
                                    <!-- Modal Body -->
                                    <div class="modal-body">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-row form-group">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <label class="control-label" for="inputEmail3">*檔案名稱</label>
                                                    <input type="email" class="form-control" id="inputfilename3" placeholder="請輸入名稱" />
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    </br>
                                                    <label class="control-label" for="inputEmail3">*夾帶PDF檔案</label>
                                                    <button type="button" class="btn btn-default" id="btnpdffile3">請選擇檔案</button>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    </br>
                                                    <label class="control-label" for="inputEmail3">*夾帶圖片</label>
                                                    <button type="button" class="btn btn-default" id="btnimg3">請選擇圖片</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Modal Footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">
                                            Close
                                        </button>
                                        <button type="button" class="btn btn-primary">
                                            確認上傳
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h3>企業社會責任報告書<div class="titleline"></div></h3>
                    </div>
                </div>
                <div class="row">

                </div>
                <h5 style="color: #009943;">下載觀看&nbsp;<i class="fa fa-chevron-circle-down" aria-hidden="true"></i></h5>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="ih-item square effect14  csrshadow potatobirdmargin">
                            <img class="img-responsive img" src="../assets/images/2014.jpg">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="ih-item square effect14  csrshadow potatobirdmargin">
                            <img class="img-responsive img" src="../assets/images/2015.jpg">
                        </div>
                    </div>
                    <div class="clearfix visible-xs-block"></div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="ih-item square effect14  csrshadow potatobirdmargin">
                            <img class="img-responsive img" src="../assets/images/2016.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-wrapper -->
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
</body>

</html>