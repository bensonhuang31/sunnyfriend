@extends('Layouts/admin')

@section('content')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h3>最新消息</h3>
                        <!-- Page Heading -->
                    </div>
                </div>
                <div class="row" id="main">
                    <div class="col-sm-8 col-md-10" id="content">
                        <button class="btnn btn-primary" data-toggle="modal" data-target="#AddInvetorInfo">新增檔案</button>
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
                                        <h4 class="modal-title" id="myModalLabel">環境保護查核行程</h4>
                                    </div>
                                    <!-- Modal Body -->
                                    <div class="modal-body">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <label class="control-label" for="inputEmail3">*日期</label>
                                                    <input type="input" class="form-control" id="inputEmail3" placeholder="yyyy/mm/dd" />
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <label class="control-label" for="inputEmail3">*標題</label>
                                                    <input type="input" class="form-control" id="inputEmail3" placeholder="請輸入名稱" />
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <label class="control-label" for="inputContent">*內容</label>
                                                        <textarea type="input" class="form-control" rows="20" cols="50" id="inputContent"></textarea>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                                        </br>
                                                        <label class="control-label" for="inputEmail3">*夾帶檔案</label>
                                                        <button type="button" class="btn btn-default" id="btnpdffile1">請選擇檔案</button>
                                                    </div>
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
        <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <h3>重要訊息-公開資訊觀測站<div class="titleline"></div></h3>
                        <p>2017/11/30</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <p class="JQellipsis">日友環保科技股份有限公司(SUNNY FRIEND ENVIRONMENTAL TECHNOLOGY CO., LTD.)創立於1994年，在全體多位員工努力不懈下，不僅是全國第一家申請核准之感染性事業廢棄物處理機構，更於2003年SARS爆發之際，為行政院環保署指定之SARS廢棄物處理廠，本公司不惜投入大量的人力日友環保科技股份有限公司(SUNNY FRIEND ENVIRONMENTAL TECHNOLOGY CO., LTD.)創立於1994年，在全體多位員工努力不懈下，不僅是全國第一家申請核准之感染性事業廢棄物處理機構，更於2003年SARS爆發之際，為行政院環保署指定之SARS廢棄物處理廠，本公司不惜投入大量的人力日友環保科技股份有限公司(SUNNY FRIEND ENVIRONMENTAL TECHNOLOGY CO., LTD.)創立於1994年，在全體多位員工努力不懈下，不僅是全國第一家申請核准之感染性事業廢棄物處理機構，更於2003年SARS爆發之際，為行政院環保署指定之SARS廢棄物處理廠，本公司不惜投入大量的人力日友環保科技股份有限公司(SUNNY FRIEND ENVIRONMENTAL TECHNOLOGY CO., LTD.)創立於1994年，在全體多位員工努力不懈下，不僅是全國第一家申請核准之感染性事業廢棄物處理機構，更於2003年SARS爆發之際，為行政院環保署指定之SARS廢棄物處理廠，本公司不惜投入大量的人力</p>
                        <a href="news-subindex.html">
                            <div class="btn btn-default">閱讀更多</div>
                        </a>
                    </div>
                </div>
                <div class="back99"> </div>
            </div>
        </div>
        <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <h3>歡迎各界申請蒞臨參觀指導<div class="titleline"></div></h3>
                        <p>2017/11/30</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <p class="JQellipsis">日友環保科技股份有限公司(SUNNY FRIEND ENVIRONMENTAL TECHNOLOGY CO., LTD.)創立於1994年，在全體多位員工努力不懈下，不僅是全國第一家申請核准之感染性事業廢棄物處理機構，更於2003年SARS爆發之際，為行政院環保署指定之SARS廢棄物處理廠，本公司不惜投入大量的人力.....</p>
                        <a href="#">
                            <div class="btn btn-default">閱讀更多</div>
                        </a>
                    </div>
                </div>
                <div class="back99"> </div>
            </div>
        </div>
        <script>
        $(function() {
            var len = 250; // 超過50個字以"..."取代
            $(".JQellipsis").each(function(i) {
                if ($(this).text().length > len) {
                    $(this).attr("title", $(this).text());
                    var text = $(this).text().substring(0, len - 1) + "...";
                    $(this).text(text);
                }
            });
        });
        </script>
        <!-- /.container-fluid -->
@endsection