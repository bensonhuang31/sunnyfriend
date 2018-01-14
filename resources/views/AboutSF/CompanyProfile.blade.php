@extends('Layouts/app')

@section('content')
    <!--banner-->
    <div class="bannerArea b-box  wow fadeInDown" data-wow-delay="0.5s ">
        <img class="img-responsive" src="../resources/assets/images/about/about_banner.jpg">
        <div class="titleBox clearfix">
            <h2>{{Lang::get('sunnyfriend.CompanyProfile')}}</h2>
        </div>
    </div>
    <div class="wow fadeInDown back04" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="breads">
                    <a href="../index.php">{{Lang::get('sunnyfriend.Home')}}</a>
                    <span>></span>
                    <span>{{Lang::get('sunnyfriend.CompanyProfile')}}</span>
                    <span>></span>
                    <b>基本資料</b>
                </div>
            </div>
        </div>
    </div>
    <!--關於日友-->
<div class="back3 wow fadeInDown" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <h3>基本資料<div class="titleline"></div></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <p>{{Lang::get('sunnyfriend.CompanyProfile-1')}}
                    </br>
                </p>
                <p>{{Lang::get('sunnyfriend.CompanyProfile-2')}}</br>{{Lang::get('sunnyfriend.CompanyProfile-3')}}</br>{{Lang::get('sunnyfriend.CompanyProfile-4')}}</br>{{Lang::get('sunnyfriend.CompanyProfile-5')}}</p>
                <a target="_blank" class="btn btn-default btn-block" href="../assets/file/app/SFCP(CH).pdf" role="button" style="z-index:999;">日友公司中文簡介</a>
                <a target="_blank" class="btn btn-default btn-block" href="https://www.youtube.com/watch?v=nzoY7HRWAew&t=" role="button" style="z-index:999;">觀看日友簡介影片</a>
            </div>
            <div class="col-md-8 col-sm-6">
                <div class="service-box1">
                    <img alt="Brand" class="img-responsive" style="box-shadow:3px 5px 11px rgba(159, 159, 159, 0.26);" src="../resources/assets/images/about/about.jpg">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    <!--公司沿革-->
    <div class="back02 back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <h3>公司沿革<div class="titleline"></div></h3>
                </div>
            </div>
            <div class="row">
                <div class="back1993 col-md-12 col-sm-12">
                    <p>日友公司成立於1994年，2000年成為潤泰集團環保產業基地，也是臺灣第一家專業生物醫療廢棄物焚化處理廠，日友公司投入近二十年的工程實際應用和營運管理經驗，擁有從研發、設計、製圖、操作、系統改良等全方位的技術掌握，成功引領台灣環保產業進步茁壯</br>
                        </br>
                    </p>
                    <ul>
                        <li>1994年11月&nbsp;<span>設立日友廢棄物處理股份有限公司，實收資本額為新台幣伍仟萬元。</span></li>
                        <li>1997年01月&nbsp;<span>雲林縣政府核發甲級焚化廠操作許可證。</span></li>
                        <li>2000年07月&nbsp;<span>公司名稱更名為日友環保科技股份有限公司。</span></li>
                        <li>2000年12月&nbsp;<span>公司經NSF審查通過ISO14001。</span></li>
                        <li>2001年12月&nbsp;<span>總經理張芳正先生就任。</span></li>
                        <li>2002年05月&nbsp;<span>取得縣政府核發之操作許可證，雲林二廠營運商轉。</span></li>
                        <li>2005年06月&nbsp;<span>大陸地區投資設立北京潤泰環保科技有限公司。</span></li>
                        <li>2008年06月&nbsp;<span>董事長張芳正先生就任。</span></li>
                        <li>2012年02月&nbsp;<span>北京潤泰環保科技有限公司醫療廢棄物焚化處理廠完工。</span></li>
                        <li>2012年11月&nbsp;<span>取得中區事業廢棄物綜合處理中心經營權(原榮民公司管理)。</span></li>
                        <li>2012年12月&nbsp;<span>實收資本額增加為壹拾億元整。</span></li>
                        <li>2014年12月&nbsp;<span>籌設薪資報酬委員會。</span></li>
                        <li>2014年03月&nbsp;<span>登錄興櫃。</span></li>
                        <li>2015年03月&nbsp;<span>掛牌上市。</span></li>
                        <li>2015年03月&nbsp;<span>實收資本額增加為壹拾壹億壹仟伍佰萬元整。</span></li>
                        <li>2016年09月&nbsp;<span>大陸地區投資設立江蘇宿遷潤泰環保科技有限公司。</span></li>
                        <li>2017年05月&nbsp;<span>大陸地區投資設立廊坊潤泰環保科技有限公司。</span></li>
                        <li>2017年05月&nbsp;<span>大陸地區投資設立運城潤泰環保科技有限公司。</span></li>
                        <li>2017年09月&nbsp;<span>大陸地區投資設立江陰潤泰新環保科技有限公司。</span></li>
                        <li>2017年08月&nbsp;<span>取得雲林縣政府核發之操作許可證，雲林三廠營運商轉。</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--基本資料表-->
    <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="back99"></div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <h3>基本資料表<div class="titleline"></div></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="table-responsive dragscroll">
                        <table class="table ">
                            <tr>
                                <th>股票代號：8341</th>
                                <th>產業類別：其他</th>
                            </tr>
                            <tr>
                                <td data-th="股票代號：8341">公司名稱：日友環保科技(股)公司</td>
                                <td data-th="產業類別：其他">總機：05-7885788</td>
                            </tr>
                            <tr>
                                <td data-th="股票代號：8341">地址：雲林縣元長鄉元東路1之20號</td>
                                <td data-th="產業類別：其他"></td>
                            </tr>
                            <tr>
                                <td data-th="股票代號：8341">台北辦公室：台北市八德路三段20號10樓之3</td>
                                <td data-th="產業類別：其他"></td>
                            </tr>
                            <tr>
                                <td data-th="股票代號：8341">董事長：張芳正</td>
                                <td data-th="產業類別：其他">總經理：張芳正</td>
                            </tr>
                            <tr>
                                <td data-th="股票代號：8341">發言人：楊希聖</td>
                                <td data-th="產業類別：其他">發言人電話：02-25795580 #307</td>
                            </tr>
                            <tr>
                                <td data-th="股票代號：8341">代理發言人：張永典</td>
                                <td data-th="產業類別：其他"></td>
                            </tr>
                            <tr>
                                <td data-th="股票代號：8341">主要經營業務：醫療廢棄物焚化處理、有害事業廢棄物焚化、物化、固化及掩埋處理、一般事業廢</td>
                                <td data-th="產業類別：其他"></td>
                            </tr>
                            <tr>
                                <td data-th="股票代號：8341">公司成立日期：83.11.29</td>
                                <td data-th="產業類別：其他">營利事業統一編號：89922041</td>
                            </tr>
                            <tr>
                                <td data-th="股票代號：8341">實收資本額：1,115,000,000元</td>
                                <td data-th="產業類別：其他">興櫃日期：103.03.28</td>
                            </tr>
                            <tr>
                                <td data-th="股票代號：8341">上市日期：104.03.23</td>
                                <td data-th="產業類別：其他"></td>
                            </tr>
                            <tr>
                                <td data-th="股票代號：8341">公開發行日期：88.04.22</td>
                                <td data-th="產業類別：其他"></td>
                            </tr>
                            <tr>
                                <td data-th="股票代號：8341">已發行普通股數或TDR原股發行股數：111,500,000股</td>
                                <td data-th="產業類別：其他"></td>
                            </tr>
                            <tr>
                                <td data-th="股票代號：8341">股票過戶機構：第一金證券(股)公司</td>
                                <td data-th="產業類別：其他">電話：02-25635711</td>
                            </tr>
                            <tr>
                                <td data-th="股票代號：8341">過戶地址：10442 台北市長安東路一段22號五樓</td>
                                <td data-th="產業類別：其他"></td>
                            </tr>
                            <tr>
                                <td data-th="股票代號：8341">簽證會計師事務所：資誠聯合會計師事務所</td>
                                <td data-th="產業類別：其他"></td>
                            </tr>
                            <tr>
                                <td data-th="股票代號：8341">簽證會計師1：李秀玲</td>
                                <td data-th="產業類別：其他">簽證會計師2：翁世榮</td>
                            </tr>
                            <tr>
                                <td data-th="股票代號：8341">英文簡稱：SF</td>
                                <td data-th="產業類別：其他"></td>
                            </tr>
                            <tr>
                                <td data-th="股票代號：8341">英文全名：SUNNY FRIEND ENVIRONMENTAL TECHNOLOGY CO.,LTD</td>
                                <td data-th="產業類別：其他"></td>
                            </tr>
                            <tr>
                                <td data-th="股票代號：8341">英文通訊地址(街巷弄號)：No.1-20, Yuandong Rd., Yuanchang</td>
                                <td data-th="產業類別：其他"></td>
                            </tr>
                            <tr>
                                <td data-th="股票代號：8341">英文通訊地址(縣市國別)：Township, Yunlin County 655, Taiwan(R.O.C)</td>
                                <td data-th="產業類別：其他"></td>
                            </tr>
                            <tr>
                                <td data-th="股票代號：8341">傳真機號碼：05-7887933</td>
                                <td data-th="產業類別：其他"></td>
                            </tr>
                            <tr>
                                <td data-th="股票代號：8341">E-Mail：sf@mail.sunnyfriend.com.tw</td>
                                <td data-th="產業類別：其他"></td>
                            </tr>
                            <tr>
                                <td data-th="股票代號：8341">公司網址：http://www.sunnyfriend.com.tw</td>
                                <td data-th="產業類別：其他"></td>
                            </tr>
                            <tr>
                                <td data-th="股票代號：8341">變更前名稱：日友廢棄物處理 </td>
                                <td data-th="產業類別：其他">變更前簡稱：日友</td>
                            </tr>
                            <tr>
                                <td data-th="股票代號：8341">公司名稱變更核淮日期：89.07.04</td>
                                <td data-th="產業類別：其他"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection