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
                    <b>經營團隊</b>
                </div>
            </div>
        </div>
    </div>
    <!--公司架構圖-->
    <div class="wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <h3>經營團隊<div class="titleline"></div></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                <center>
                    <div class="table-responsive dragscroll">
                        <table class="table table2">
                            <tr>
                                <th width="6%">部門別</th>
                                <th width="6%">職稱</th>
                                <th width="6%">姓名</th>
                                <th width="10%">主要學經歷</th>
                            </tr>
                            <tr>
                                <td data-th="部門別">總經理室</td>
                                <td data-th="職稱">董事長</br>兼總經理</td>
                                <td data-th="姓名">張芳正</td>
                                <td data-th="主要學經歷">國立政治大學法律研究所碩士</br>大同工學院事業經營所碩士</br>潤泰建設(股)公司副總經理</br>興業建設(股)公司總經理</td>
                            </tr>
                            <tr>
                                <td data-th="部門別">總經理室</td>
                                <td data-th="職稱">副總經理</td>
                                <td data-th="姓名">張永典</td>
                                <td data-th="主要學經歷">國立中正大學企業管理研究所碩士</br>采誠科技(股)公司總經理</td>
                            </tr>
                            <tr>
                                <td data-th="部門別">總經理室</td>
                                <td data-th="職稱">副總經理</td>
                                <td data-th="姓名">楊希聖</td>
                                <td data-th="主要學經歷">美國紐約市立大學MBA</br>國立成功大學機械系</td>
                            </tr>
                            <tr>
                                <td data-th="部門別">總經理室</td>
                                <td data-th="職稱">副總經理</td>
                                <td data-th="姓名">曾建華</td>
                                <td data-th="主要學經歷">國立中興大學法律系</br>唯福廣告有限公司總經理</td>
                            </tr>
                            <tr>
                                <td data-th="部門別">彰濱廠務部</td>
                                <td data-th="職稱">協理</td>
                                <td data-th="姓名">王明祥</td>
                                <td data-th="主要學經歷">國立台灣大學經濟系</br>潤泰建設財務專員</br>潤泰集團總經理室特別助理</td>
                            </tr>
                            <tr>
                                <td data-th="部門別">雲林廠務部</td>
                                <td data-th="職稱">協理</td>
                                <td data-th="姓名">黃文鎮</td>
                                <td data-th="主要學經歷">國立中山大學環境工程研究所碩士</br>爐鼎環境工程公司電機工程師</br>鼎強環境工程公司專案課長</br>祺鼎環境工程公司經理</td>
                            </tr>
                            <tr>
                                <td data-th="部門別">業務部</td>
                                <td data-th="職稱">協理</td>
                                <td data-th="姓名">張財榮</td>
                                <td data-th="主要學經歷">國立雲林工專電機工程科</br>采誠科技(股)公司經理</td>
                            </tr>
                            <tr>
                                <td data-th="部門別">管理部</br>人事室</br>公關法務部</td>
                                <td data-th="職稱">協理</td>
                                <td data-th="姓名">林隆偉</td>
                                <td data-th="主要學經歷">國立中正大學勞研所碩士</td>
                            </tr>
                            <tr>
                                <td data-th="部門別">總經理室</td>
                                <td data-th="職稱">協理</td>
                                <td data-th="姓名">李澤治</td>
                                <td data-th="主要學經歷">國立中興大學 EMBA</br>榮民工程公司廠長</td>
                            </tr>
                            <tr>
                                <td data-th="部門別">企劃部</br>環安室</td>
                                <td data-th="職稱">協理</td>
                                <td data-th="姓名">洪鴻斌</td>
                                <td data-th="主要學經歷">淡江大學水資源及環境工程研究所碩士</br>國立台灣科技大學化工系</td>
                            </tr>
                            <tr>
                                <td data-th="部門別">總經理室</td>
                                <td data-th="職稱">協理</td>
                                <td data-th="姓名">吳瑞益</td>
                                <td data-th="主要學經歷">聯合工專機械工程科</br>遠東機械公司設計研發課長</br>遠東機械公司產業生產技術課長</td>
                            </tr>
                            <tr>
                                <td data-th="部門別">總經理室</td>
                                <td data-th="職稱">特別助理</td>
                                <td data-th="姓名">葉俊麟</td>
                                <td data-th="主要學經歷">國立清華大學化學所博士</br>國立中興大學 EMBA</br>興農股份有限公司營業部企劃經理</br>加奇(蘇州)生物科技公司生產部總監</td>
                            </tr>
                        </table>
                    </div>
                    </center> 
                </div>
            </div>
        </div>
    </div>
@endsection