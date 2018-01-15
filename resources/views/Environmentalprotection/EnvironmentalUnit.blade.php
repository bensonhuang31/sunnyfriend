@extends('Layouts/app')

@section('content')
    <!--banner-->
    <div class="bannerArea b-box  wow fadeInDown" data-wow-delay="0.5s ">
        <img class="img-responsive" src="../assets/images/Environmentalprotection/Environmentalprotection_banner.jpg">
        <div class="titleBox clearfix">
            <h2>{{Lang::get('sunnyfriend.Environmentalprotection')}}</h2>
        </div>
    </div>
    <div class="wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="breads">
                    <a href="../index.php">{{Lang::get('sunnyfriend.Home')}}</a>
                    <span>></span>
                    <span>{{Lang::get('sunnyfriend.Environmentalprotection')}}</span>
                    <span>></span>
                    <b>{{Lang::get('sunnyfriend.EnvironmentalUnit')}}</b>
                </div>
            </div>
        </div>
    </div>
    <!--公司治理-->
    <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h3>{{Lang::get('sunnyfriend.EnvironmentalUnit')}}<div class="titleline"></div></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <center>
                        <div class="table-responsive dragscroll">
                            <table class="table table2">
                                <tr >
                                    <th >日期</th>
                                    <th >事項</th>
                                    <th >主辦機關</th>
                                    <th >結果</th>
                                </tr>
                                <tr>
                                    <td data-th="日期">106.09.27</td>
                                    <td data-th="事項">環境影響評估監督業務(106 年度-3)</td>
                                    <td data-th="主辦機關">雲林縣環保局</td>
                                    <td data-th="結果">待執行</td>
                                </tr>
                            </table>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
@endsection