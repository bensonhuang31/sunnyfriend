@extends('Layouts/app')

@section('content')
    <!--banner-->
    <div class="bannerArea b-box  wow fadeInDown" data-wow-delay="0.5s ">
        <img class="img-responsive" src="../assets/images/news/new_banner.jpg">
        <div class="titleBox clearfix">
            <h2>投資人專區</h2>
        </div>
    </div>
    <div class="wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="breads">
                    <a href="../index.php">首頁</a>
                    <span>></span>
                    <span>投資人專區</span>
                    <span>></span>
                    <b>股東會相關資訊</b>
                </div>
            </div>
        </div>
    </div>
    <!--重大消息-->
    <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h3>股東會相關資訊<div class="titleline"></div></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <select class="selectpicker selectbtn">
                        <option>2017</option>
                        <option>2016</option>
                        <option>2015</option>
                    </select>
                </div>
                </br>
                </br>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <table class="table table2">
                        <tr>
                            <th width="10%" style="text-align: center;">股東會性質</th>
                            <th width="60%">檔案名稱</th>
                            <th width="10%" style="text-align: center;">檔案下載</th>
                        </tr>
                        <tr>
                            <td data-th="股東會性質" style="text-align: center;"></td>
                            <td data-th="檔案名稱"></td>
                            <td data-th="檔案下載"><img class="img-responsive center-block" src="../assets/images/CorporateGovernance/pdf_download.png"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection