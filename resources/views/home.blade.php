@extends('layouts.app')
@section('title','首页')
@section('content')
<main>
    <div class="main-section">
        <div class="container">
            <div class="main-section-data">
                <div class="row">
                    <div class="col-lg-3 col-md-4 pd-left-none no-pd">
                        @include('layouts.main-left-sidebar')
                    </div>
                    <div class="col-lg-6 col-md-8 no-pd">
                        <div class="main-ws-sec">  
                            <div class="posts-section" id="articleListM">
                                @if (count($list))
                                    @foreach($list as $key=>$value) 
                                    <div class="post-bar">
                                        <div class="post_topbar">
                                            <div class="usy-dt">
                                                <img src="/images/resources/us-pic-1.png" alt="" width="50px" height="50px">
                                                <div class="usy-name">
                                                    <h3>{{$value->author}}</h3>
                                                    <span><img src="/images/clock.png" alt="">{{$value->created_at->diffForHumans()}}</span>
                                                </div>
                                            </div>
                                            <div class="ed-opts">
                                                <a href="#" title="" class="ed-opts-open">
                                                   <i class="la la-space-shuttle"></i>
                                                </a>
                                                
                                            </div>
                                        </div>
                                        <div class="epi-sec">
                                            <ul class="descp">
                                                <li><span><i class="la la-folder"></i>{{$value->nav_name->title}}</span></li>
                                                <li><img src="/images/icon9.png" alt=""><span>wuhan</span></li>
                                            </ul>
                                            <ul class="bk-links">
                                                <li><a href="javascript:void(0);" rel="tooltip" title="书签"  onclick='addBookmark("{{url('details',['id'=>$value->id])}}")'><i class="la la-bookmark"></i></a></li>
                                                <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                        
                                        <div class="job_descp">
                                            <h3>{{$value->title}}</h3>  
                                            <p>{{$value->desc}}  <a href="{{ route('home.detail',['aid'=>$value->id]) }}" style="float: right;" title="{{$value->title}}">查看详情</a> </p>
                                            <div class="row">
                                                <div class="col-lg-12"> 
                                                    <div class="pf-gallery">
                                                        <ul>
                                                            <li>
                                                                <a href="{{ route('home.detail',['aid'=>$value->id]) }}" title="">
                                                                    <img src="/storage/{{$value->cover_image}}" alt="">
                                                                </a>
                                                            </li> 
                                                            <li>
                                                                <a href="{{ route('home.detail',['aid'=>$value->id]) }}" title="">
                                                                    <img src="/storage/{{$value->cover_image}}" alt="">
                                                                </a>
                                                            </li> 
                                                            <li>
                                                                <a href="{{ route('home.detail',['aid'=>$value->id]) }}" title="">
                                                                    <img src="/storage/{{$value->cover_image}}" alt="">
                                                                </a>
                                                            </li> 
                                                        </ul>
                                                    </div>
                                                </div> 
                                            
                                            </div>
                                            <ul class="skill-tags">
                                                @if(count($value->tag))
                                                    @foreach($value->tag as $k=>$v)
                                                        <li><a href="#" title="">{{$v}}</a></li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="job-status-bar">
                                            <ul class="like-com">
                                                <li>
                                                    <a href="#"><i class="la la-heart"></i> 喜欢</a>
                                                    <img src="images/liked-img.png" alt="">
                                                    <span>{{$value->like}}</span>
                                                </li>
                                                <li>
                                                    <a href="{{ route('home.detail',['aid'=>$value->id]) }}" title="" class="com">
                                                        <img src="/images/com.png" alt=""> 评论 {{$value->comments->count()}}</a>
                                                </li>
                                            </ul>
                                            <a><i class="la la-eye"></i>浏览{{$value->reade_num}}</a>
                                        </div>
                                    </div>
                                        
                                    @if($key==2)
                                        @include('layouts.ad-profiles')
                                    @endif 

                                    @endforeach
                                @else
                                <div class="post-bar">
                                    <div class="post_topbar">
                                        <div class="empty-block">暂无数据 ~_~ </div>
                                    </div>
                                </div>
                                @endif 
                            </div>
                            <div class="process-comm"> 
                                  {{$list->onEachSide(1)->appends(['page'=>Request::except('page')])->links('pagination.default')}}  
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pd-right-none no-pd">
                        @include('layouts.main-right-sidebar')
                    </div>
                </div>
            </div>
        </div>
    </div> 
</main>
@endsection 

@section('js')
<script type="text/javascript">
        //滚动加载更多
        var pullRefreshss = true;
        var endIndex = 0;
        $(window).scroll(
            function () {
                /*当前滚动条到顶部的距离*/
                var top = $(document).scrollTop();
               
                /*当前浏览器的可是高度*/
                var height = document.body.clientHeight;
                /*当前网页（body）的高度*/
                var z_height = $(document).height();
               
                /*判断（网页的body高度减去当前浏览器的可视高度是否等于滚动条到顶部的距离）
                * 相等：则判定当前页面在底部
                * 不相等：判定当前页面不在底部
                * */
                
                var stats = (z_height - height - top < 1000);
                console.log(stats)

                if (stats) {
                    /*当前网页在最底部，执行该函数*/
                    endIndex += 4;   //每次加载的条数 endIndex 为默认显示的条数
                    console.log(endIndex)
                    // setTimeout(navList, 1000);  // navList()为加载列表的方法  控制滚动加载显示的时间
                   /*  navList(); */       //调用加载列表的方法
                   var html='<div class="post-bar"></div>'; 

                   $("#articleListM").append(html);

                } else {

                    if (!pullRefreshss) {
                        $("#articleListM").append("没有更多的数据");
                    }
                }
            }
        );

    function addBookmark(url, title) { 
        if (!url) {
            url = window.location
        }
        if (!title) {
            title = document.title
        }
        var browser = navigator.userAgent.toLowerCase();
        if (window.sidebar) { // Mozilla, Firefox, Netscape
            window.sidebar.addPanel(title, url, "");
        } else if (window.external) { // IE or chrome
            if (browser.indexOf('chrome') == -1) { // ie
                window.external.AddFavorite(url, title);
            } else { // chrome
                layer.msg('请按ctrl+d（或macs的command+d）将此页加入书签。');
            }
        } else if (window.opera && window.print) { // Opera - automatically adds to sidebar if rel=sidebar in the tag
            return true;
        } else if (browser.indexOf('konqueror') != -1) { // Konqueror
            layer.msg('请按ctrl+b将此页加入书签。');
        } else if (browser.indexOf('webkit') != -1) { // safari
            layer.msg('请按ctrl+b（或macs的command+d）将此页加入书签。');
        } else {
            layer.msg('您的浏览器无法使用此链接添加书签。请手动添加此链接。')
        }
    }
</script>
@endsection
