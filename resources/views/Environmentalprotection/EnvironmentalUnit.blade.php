@extends('Layouts/app')

@section('content')
    <!--banner-->
    <div class="bannerArea b-box  wow fadeInDown" data-wow-delay="0.5s ">
        <img class="img-responsive" src="../resources/assets/images/Environmentalprotection/Environmentalprotection_banner.jpg">
        <div class="titleBox clearfix">
            <h2>環境保護</h2>
        </div>
    </div>
    <div class="wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="breads">
                    <a href="../index.php">首頁</a>
                    <span>></span>
                    <span>環境保護</span>
                    <span>></span>
                    <b>環保單位查核行程</b>
                </div>
            </div>
        </div>
    </div>
    <!--公司治理-->
    <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h3>環保單位查核行程<div class="titleline"></div></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <center>
                        <div class="table-responsive dragscroll">
                            <table class="table table2 each-table">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">日期</th>
                                        <th style="text-align: center;">事項</th>
                                        <th style="text-align: center;">主辦機關</th>
                                        <th style="text-align: center;">結果</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

<script>
    $( document ).ready(function() {
        getYear();
        changeYear($("#changeyear").val());
        $('#changeyear').on('change',function(){
            $(".each-table tbody").html("");
            changeYear($(this).val());
        });
    });

    function getYear(){
        $("#changeyear").html("");
        var d = new Date();
        var n = d.getFullYear();
        var years = [];
        for(var y=0; y<6; y++){
            years.push(n);
            n--;
        }

        var eachTable = $("#changeyear");
            $.each(years, function(index, element) {
                eachTable.append("<option>"+ element +"</option>");
            });
    }

    function changeYear(year){
        var values = [];
        var json = @json($data);

        for(var i = 0; i < json.length; i++){
            if(json[i].Year==year){
                values.push(json[i]);
            }
        }

        var eachTable = $(".each-table tbody");
            $.each(values, function(index, element) {
                eachTable.append("<tr>" +
                        "<td data-th='日期' class='Date' style='text-align: center;'>"+ element.Date +"</td>"+
                        "<td data-th='事項' class='Notes' style='text-align: center;'>"+ element.Notes +"</td>"+
                        "<td data-th='主辦機關' class='Organizer' style='text-align: center;'>"+ element.Organizer +"</td>"+
                        "<td data-th='結果' class='Result' style='text-align: center;'>"+ element.Result +"</td>"+
                        "</tr>");
            });
    }
</script>

@endsection