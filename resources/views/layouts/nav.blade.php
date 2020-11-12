<header>
    <div class="container">
                <div class="header-data">
                    <div class="logo">
                        <a href="/" title="">
                            <img src="images/logo.png" alt=""> 
                        </a>
                      
                    </div>
                    <div class="search-bar">
                        <form>
                            <input type="text" name="search" placeholder="Search...">
                            <button type="submit"><i class="la la-search"></i></button>
                        </form>
                    </div>
                    <nav>
                        <ul>
                            <li>
                                <a href="/" title="首页">
                                    <span><img src="images/icon1.png" alt=""></span> 首页
                                </a>
                            </li> 
                            <li>
                                <a href="/projects" title="项目">
                                    <span><img src="images/icon3.png" alt=""></span> 项目
                                </a>
                                <ul>
                                    <li><a href="user-profile.html" title="">项目一</a></li>
                                    <li><a href="my-profile-feed.html" title="">项目二</a></li>
                                </ul>
                            </li> 
                            <li>
                                <a href="/jobs" title="">
                                    <span><img src="images/icon5.png" alt=""></span> 小程序
                                </a>
                            </li>
                            <li>
                                <a href="/massages" title="" class="not-box-open">
                                    <span><img src="images/icon6.png" alt=""></span> 留言
                                </a>
                                <div class="notification-box msg">
                                    <div class="nt-title">
                                        <h4>Setting</h4>
                                        <a href="#" title="">Clear all</a>
                                    </div>
                                    <div class="nott-list">
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/ny-img1.png" alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="messages.html" title="">Jassica William</a> </h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                                                <span>2 min ago</span>
                                            </div>
                                        </div>
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/ny-img2.png" alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="messages.html" title="">Jassica William</a></h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                                <span>2 min ago</span>
                                            </div>
                                        </div>
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/ny-img3.png" alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="messages.html" title="">Jassica William</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
                                                <span>2 min ago</span>
                                            </div>
                                        </div>
                                        <div class="view-all-nots">
                                            <a href="messages.html" title="">View All Messsages</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                             <li>
                                <a href="/friends" title="">
                                    <span><img src="images/icon7.png" alt=""></span> 友链
                                </a>
                            </li>
                           
                            <li>
                                <a href="/about" title="">
                                    <span><img src="images/icon2.png" alt=""></span> 关于
                                </a>

                            </li>
                            <li>
                                <a href="#" title="" class="not-box-open">
                                    <span><img src="images/icon7.png" alt=""></span> 通知
                                </a>
                                <div class="notification-box">
                                    <div class="nt-title">
                                        <h4>Setting</h4>
                                        <a href="#" title="">Clear all</a>
                                    </div>
                                    <div class="nott-list">
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/ny-img1.png" alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                                <span>2 min ago</span>
                                            </div>
                                        </div>
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/ny-img2.png" alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                                <span>2 min ago</span>
                                            </div>
                                        </div>
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/ny-img3.png" alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                                <span>2 min ago</span>
                                            </div>
                                        </div>
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/ny-img2.png" alt="">
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
                            </li>
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
                            <img src="images/resources/user.png" alt="">
                            <a href="#" title="">  {{ Auth::user()->name }}</a>
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
                                <li><a href="/accountsetting" title="账户设置">账户设置</a></li>
                                <!-- <li><a href="#" title="">Privacy</a></li>
                                <li><a href="#" title="">Faqs</a></li>
                                <li><a href="#" title="">Terms & Conditions</a></li> -->
                            </ul>
                            <h3 class="tc"> 
                                 <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
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
 