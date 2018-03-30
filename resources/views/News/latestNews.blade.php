@extends('Layouts/app')

@section('content')
    <!--banner-->
    <div class="bannerArea b-box  wow fadeInDown" data-wow-delay="0.5s ">
        <img class="img-responsive" src="../resources/assets/images/news/new_banner01.jpg">
        <div class="titleBox clearfix">
            <h2>{{Lang::get('sunnyfriend.News')}}</h2>
        </div>
    </div>
    <div class="wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="breads">
                    <a href="../index.php">{{Lang::get('sunnyfriend.Home')}}</a>
                    <span>></span>
                    <span>{{Lang::get('sunnyfriend.News')}}</span>
                    <span>></span>
                    <b>{{Lang::get('sunnyfriend.latestNews')}}</b>
                </div>
            </div>
        </div>
    </div>
    <!--最新消息-->
    @foreach($data as $v)
        <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <h3>{{$v->Title}}<div class="titleline"></div></h3>
                        <p>{{$v->Date}}</p>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <p class="JQellipsis">{{$v->Content}}</p>
                        <a href="{{url('News/Detail/'.$v->id)}}">
                            <div class="btn btn-default">{{Lang::get('sunnyfriend.latestNews-1')}}</div>
                        </a>

                    </a>
                    </div>
                </div>
                <div class="back99"> </div>
            </div>
        </div>
    @endforeach
    <script>
    $(function() {
        var len = 70; // 超過50個字以"..."取代
        $(".JQellipsis").each(function(i) {
            if ($(this).text().length > len) {
                $(this).attr("title", $(this).text());
                var text = $(this).text().substring(0, len - 1) + "...";
                $(this).text(text);
            }
        });
    });
    </script>
@endsection