@extends('Layouts/app')

@section('content')
    <!--banner-->
    <div class="bannerArea b-box  wow fadeInDown" data-wow-delay="0.5s ">
        <img class="img-responsive" src="../resources/assets/images/stackholder/Business People Meeting Discussion Working Concept.jpg">
        <div class="titleBox clearfix">
            <h2>利害關係人</h2>
        </div>
    </div>
    <div class="wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="breads">
                    <a href="../index.php">首頁</a>
                    <span>></span>
                    <span>公司治理</span>
                    <span>></span>
                    <b>利害關係人鑑別議題與措施</b>
                </div>
            </div>
        </div>
    </div>
    <!--公司治理-->
    <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h3>利害關係人鑑別議題與措施<div class="titleline"></div></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <p>經由日友公司CSR小組與外部輔導顧問考量公司產業特性及實務經驗討論後，參考AA 1000利害關係人議合指引(THE AA1000 STAKEHOLDER ENGAGEMENT STANDARD, AA1000SES 2015 version)，鑑別出股東、公部門、員工、社區鄰里、經銷商及事業機構為105年度日友環保永續發展相關之利害關係人。
                        </br>
                        </br>
                    </p>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <center>
                        <div class="table-responsive dragscroll">
                            <table class="table table2">
                                <tr>
                                    <th >利害關係人</th>
                                    <th >關切議題</th>
                                    <th >溝通方式</th>
                                    <th >具體措施</th>
                                </tr>
                                <tr>
                                    <td data-th="利害關係人">股東</td>
                                    <td data-th="關切議題">經營績效</br>
                                        公司治理</br>
                                        資訊透明度</td>
                                    <td data-th="溝通方式">股東會、公司網站</br>
                                        年報、公開資訊觀測站</br>營運資訊揭露 </td>
                                    <td data-th="具體措施">維持正派經營、穩定獲利、定期召開股東會議、主動於網站公告重要訊息</td>
                                </tr>
                                <tr>
                                    <td data-th="利害關係人">公部門</td>
                                    <td data-th="關切議題">遵守法令</br>
                                        環境保護</br>
                                        社會公益</br>
                                        政策參與</br>
                                        節能減廢</td>
                                    <td data-th="溝通方式">政策說明會議、公聽會</br>
                                        政府網站、公文書往來 </td>
                                    <td data-th="具體措施">主動參加政府辦理各項政策說明會議、法規符合度檢討、發文釋疑</td>
                                </tr>
                                <tr>
                                    <td data-th="利害關係人">事業機構</td>
                                    <td data-th="關切議題">服務品質</br>
                                        法規遵循</br>
                                        妥善處理 </td>
                                    <td data-th="溝通方式">電話訪問、親訪</br>
                                        電子郵件、公文書往來 </td>
                                    <td data-th="具體措施">妥善處理文件寄發、前線業務同仁訪談客戶或進行客戶滿意度調查，了解客戶</br>之反饋意見與滿意度、專屬對應窗口</td>
                                </tr>
                                <tr>
                                    <td data-th="利害關係人">經銷商</td>
                                    <td data-th="關切議題">遵守法令</br>
                                        服務品質</br>
                                        信用狀況 </td>
                                    <td data-th="溝通方式">經銷商會議、環境管理系統</br>
                                        公文書往來 </td>
                                    <td data-th="具體措施">定期辦理經銷商會議、環境管理系統遵行事項、參加客戶公開活動</td>
                                </tr>
                                <tr>
                                    <td data-th="利害關係人">員工</td>
                                    <td data-th="關切議題">薪資福利</br>
                                        職業安全衛生</br>
                                        勞動權益</br>
                                        職涯發展 </td>
                                    <td data-th="溝通方式">勞資會議、職工福利委員會</br>
                                        內部聯絡書 </td>
                                    <td data-th="具體措施">定期召開勞資會議、職工福利委員會雙向溝通、公告員工關注事項、定期辦理</br>教育訓練</td>
                                </tr>
                                <tr>
                                    <td data-th="利害關係人">社區鄰里 </td>
                                    <td data-th="關切議題">環境保護</br>
                                        社會公益</td>
                                    <td data-th="溝通方式">拜訪、公開活動</br>
                                        公司網站、村里長辦公室</br>鄉公所 </td>
                                    <td data-th="具體措施">主動拜訪社區及學校、參加公開活動、鄉公所政策執行情形、捐贈書籍、發行</br>刊物、辦理相關活動增加互動機會</td>
                                </tr>
                                <tr>
                                    <td data-th="利害關係人">學術及產學合作單位 </td>
                                    <td data-th="關切議題">法規遵循</br>
                                        空污及溫室氣體排放</br>
                                        廢污水和廢棄物</br>
                                        經濟績效 </td>
                                    <td data-th="溝通方式">電話訪問、親訪</br>
                                        電子郵件、公文書往來</br>
                                        會議 </td>
                                    <td data-th="具體措施">不定期專案產學合作、法規釋義、法規修訂草案、公聽會意見表達、與廢棄物</br>清除處理相關之法令及新技術開發</td>
                                </tr>
                            </table>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
@endsection