<header>
    <div class="container">
        <div class="header-data">
            <div class="logo">
                <a href="/" title="">
                    <img src="/images/logo.png" alt="">
                </a> 
            </div>
            <div class="search-bar">
                <form method="GET" action="{{ route('home.search') }}">
                    <input type="text" name="keywords" placeholder="Search...">
                    <button type="submit"><i class="la la-search"></i></button>
                </form>
            </div>
            <nav>
                <ul>
                    @foreach($nav_list as $key=>$nav)
                       @if(count($nav->son_nav) == 0)
                        <li>
                            <a href="{{$nav->router}}" title="{{$nav->title}}" class="not-box-open">
                                <span><img src="/images/icon{{$key}}.png" alt="{{$nav->title}}"></span> {{$nav->title}}
                            </a>
                        </li>
                       @else
                        <li>
                            <a href="javascript:void();" title="{{$nav->title}}" class="not-box-open">
                                <span><img src="/images/icon{{$key}}.png" alt="{{$nav->title}}"></span> {{$nav->title}}
                            </a>
                            <ul>
                                @foreach($nav->son_nav as $son)
                                <li><a href="{{$son->router}}/{{$son->id}}" title="{{$son->title}}">{{$son->title}}</a></li>
                                @endforeach 
                            </ul>
                        </li> 
                       @endif 
                    @endforeach
                    
                    <!--<li>
                        <a href="#" title="" class="not-box-open">
                            <span><img src="/images/icon7.png" alt=""></span> 通知
                        </a>
                        <div class="notification-box">
                            <div class="nt-title">
                                <h4>Setting</h4>
                                <a href="#" title="">Clear all</a>
                            </div>
                            <div class="nott-list">
                                <div class="notfication-details">
                                    <div class="noty-user-img">
                                        <img src="/images/resources/ny-img1.png" alt="">
                                    </div>
                                    <div class="notification-info">
                                        <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                        <span>2 min ago</span>
                                    </div>
                                </div>
                                <div class="notfication-details">
                                    <div class="noty-user-img">
                                        <img src="/images/resources/ny-img2.png" alt="">
                                    </div>
                                    <div class="notification-info">
                                        <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                        <span>2 min ago</span>
                                    </div>
                                </div>
                                <div class="view-all-nots">
                                    <a href="#" title="">View All Notification</a>
                                </div>
                            </div>
                        </div>
                    </li>-->
                </ul>
            </nav>
            <div class="menu-btn">
                <a href="#" title=""><i class="fa fa-bars"></i></a>
            </div>
            <div class="user-account">
                @guest
                <div class="user-info"> 
                    <a href="{{ route('login') }}"> <i class="la la-user"></i>登陆</a>
                </div>
                @else
                <div class="user-info">
                    <img src="/images/resources/user.png" alt="">
                    <a href="#" title=""> {{ Auth::user()->name }}</a>
                    <i class="la la-sort-down"></i>
                </div>
                <div class="user-account-settingss">
                    <h3>在线状态</h3>
                    <ul class="on-off-status">
                        <li>
                            <div class="fgt-sec">
                                <!-- <input type="radio" name="cc" id="c5"> -->
                                <label for="c5">
                                    <span></span>
                                </label>
                                <small>在线</small>
                            </div>
                        </li>
                        <!-- <li>
                                    <div class="fgt-sec">
                                        <input type="radio" name="cc" id="c6">
                                        <label for="c6">
                                            <span></span>
                                            </label>
                                        <small>办公</small>
                                    </div>
                                </li> -->
                    </ul>
                    <h3>设置</h3>
                    <ul class="us-links">
                        <li><a href="{{ route('home.setting') }}" title="账户设置">账户设置</a></li>
                        <!-- <li><a href="#" title="">Privacy</a></li>
                                <li><a href="#" title="">Faqs</a></li>
                                <li><a href="#" title="">Terms & Conditions</a></li> -->
                    </ul>
                    <h3 class="tc">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            退出
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </h3>
                </div>
                @endguest
            </div>
        </div>
    </div>
</header>