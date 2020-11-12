@extends('layouts.app')
 
@section('content')
<div class="main-section">
                <div class="container">
                    <div class="main-section-data">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 pd-left-none no-pd">
                               @include('layouts.main-left-sidebar')
                            </div>
                            <div class="col-lg-6 col-md-8 no-pd">
                                <div class="main-ws-sec">  
                                    <div class="posts-section">

                                        @include('layouts.top-profiles')
                                        
                                        <div class="posty">
                                            <div class="post-bar no-margin">
                                                <div class="post_topbar">
                                                    <div class="usy-dt">
                                                        <img src="images/resources/us-pc2.png" alt="">
                                                        <div class="usy-name">
                                                            <h3>John Doe</h3>
                                                            <span><img src="images/clock.png" alt="">3 min ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="ed-opts">
                                                        <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a> 
                                                    </div>
                                                </div>
                                                <div class="epi-sec">
                                                    <ul class="descp">
                                                        <li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
                                                        <li><img src="images/icon9.png" alt=""><span>India</span></li>
                                                    </ul>
                                                    <ul class="bk-links">
                                                        <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                        <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="job_descp">
                                                    <h3>Senior Wordpress Developer</h3>
                                                    <ul class="job-dt">
                                                        <li><a href="#" title="">Full Time</a></li>
                                                        <li><span>$30 / hr</span></li>
                                                    </ul>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
                                                    <ul class="skill-tags">
                                                        <li><a href="#" title="">HTML</a></li>
                                                        <li><a href="#" title="">PHP</a></li>
                                                        <li><a href="#" title="">CSS</a></li>
                                                        <li><a href="#" title="">Javascript</a></li>
                                                        <li><a href="#" title="">Wordpress</a></li>
                                                    </ul>
                                                </div>
                                                <div class="job-status-bar">
                                                    <ul class="like-com">
                                                        <li>
                                                            <a href="#"><i class="la la-heart"></i> Like</a>
                                                            <img src="images/liked-img.png" alt="">
                                                            <span>25</span>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="" class="com"><img src="images/com.png" alt=""> Comment 15</a>
                                                        </li>
                                                    </ul>
                                                    <a><i class="la la-eye"></i>Views 50</a>
                                                </div>
                                            </div>
                                            <div class="comment-section">
                                                <div class="plus-ic">
                                                    <i class="la la-plus"></i>
                                                </div>
                                                <div class="comment-sec">
                                                    <ul>
                                                        <li>
                                                            <div class="comment-list">
                                                                <div class="bg-img">
                                                                    <img src="images/resources/bg-img1.png" alt="">
                                                                </div>
                                                                <div class="comment">
                                                                    <h3>John Doe</h3>
                                                                    <span><img src="images/clock.png" alt=""> 3 min ago</span>
                                                                    <p>Lorem ipsum dolor sit amet, </p>
                                                                    <a href="#" title="" class="active"><i class="fa fa-reply-all"></i>Reply</a>
                                                                </div>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <div class="comment-list">
                                                                        <div class="bg-img">
                                                                            <img src="images/resources/bg-img2.png" alt="">
                                                                        </div>
                                                                        <div class="comment">
                                                                            <h3>John Doe</h3>
                                                                            <span><img src="images/clock.png" alt=""> 3 min ago</span>
                                                                            <p>Hi John </p>
                                                                            <a href="#" title=""><i class="fa fa-reply-all"></i>Reply</a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <div class="comment-list">
                                                                <div class="bg-img">
                                                                    <img src="images/resources/bg-img3.png" alt="">
                                                                </div>
                                                                <div class="comment">
                                                                    <h3>John Doe</h3>
                                                                    <span><img src="images/clock.png" alt=""> 3 min ago</span>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at.</p>
                                                                    <a href="#" title=""><i class="fa fa-reply-all"></i>Reply</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="post-comment">
                                                    <div class="cm_img">
                                                        <img src="images/resources/bg-img4.png" alt="">
                                                    </div>
                                                    <div class="comment_box">
                                                        <form>
                                                            <input type="text" placeholder="Post a comment">
                                                            <button type="submit">Send</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="posty">
                                            <div class="post-bar no-margin">
                                                <div class="post_topbar">
                                                    <div class="usy-dt">
                                                        <img src="images/resources/us-pc2.png" alt="">
                                                        <div class="usy-name">
                                                            <h3>John Doe</h3>
                                                            <span><img src="images/clock.png" alt="">3 min ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="ed-opts">
                                                        <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                        <ul class="ed-options">
                                                            <li><a href="#" title="">Edit Post</a></li>
                                                            <li><a href="#" title="">Unsaved</a></li>
                                                            <li><a href="#" title="">Unbid</a></li>
                                                            <li><a href="#" title="">Close</a></li>
                                                            <li><a href="#" title="">Hide</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="epi-sec">
                                                    <ul class="descp">
                                                        <li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
                                                        <li><img src="images/icon9.png" alt=""><span>India</span></li>
                                                    </ul>
                                                    <ul class="bk-links">
                                                        <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                        <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="job_descp">
                                                    <h3>Senior Wordpress Developer</h3>
                                                    <ul class="job-dt">
                                                        <li><a href="#" title="">Full Time</a></li>
                                                        <li><span>$30 / hr</span></li>
                                                    </ul>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
                                                    <ul class="skill-tags">
                                                        <li><a href="#" title="">HTML</a></li>
                                                        <li><a href="#" title="">PHP</a></li>
                                                        <li><a href="#" title="">CSS</a></li>
                                                        <li><a href="#" title="">Javascript</a></li>
                                                        <li><a href="#" title="">Wordpress</a></li>
                                                    </ul>
                                                </div>
                                                <div class="job-status-bar">
                                                    <ul class="like-com">
                                                        <li>
                                                            <a href="#"><i class="la la-heart"></i> Like</a>
                                                            <img src="images/liked-img.png" alt="">
                                                            <span>25</span>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="" class="com"><img src="images/com.png" alt=""> Comment 15</a>
                                                        </li>
                                                    </ul>
                                                    <a><i class="la la-eye"></i>Views 50</a>
                                                </div>
                                            </div>
                                            <div class="comment-section">
                                                <div class="plus-ic">
                                                    <i class="la la-plus"></i>
                                                </div>
                                                <div class="comment-sec">
                                                    <ul>
                                                        <li>
                                                            <div class="comment-list">
                                                                <div class="bg-img">
                                                                    <img src="images/resources/bg-img1.png" alt="">
                                                                </div>
                                                                <div class="comment">
                                                                    <h3>John Doe</h3>
                                                                    <span><img src="images/clock.png" alt=""> 3 min ago</span>
                                                                    <p>Lorem ipsum dolor sit amet, </p>
                                                                    <a href="#" title="" class="active"><i class="fa fa-reply-all"></i>Reply</a>
                                                                </div>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <div class="comment-list">
                                                                        <div class="bg-img">
                                                                            <img src="images/resources/bg-img2.png" alt="">
                                                                        </div>
                                                                        <div class="comment">
                                                                            <h3>John Doe</h3>
                                                                            <span><img src="images/clock.png" alt=""> 3 min ago</span>
                                                                            <p>Hi John </p>
                                                                            <a href="#" title=""><i class="fa fa-reply-all"></i>Reply</a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <div class="comment-list">
                                                                <div class="bg-img">
                                                                    <img src="images/resources/bg-img3.png" alt="">
                                                                </div>
                                                                <div class="comment">
                                                                    <h3>John Doe</h3>
                                                                    <span><img src="images/clock.png" alt=""> 3 min ago</span>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at.</p>
                                                                    <a href="#" title=""><i class="fa fa-reply-all"></i>Reply</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="post-comment">
                                                    <div class="cm_img">
                                                        <img src="images/resources/bg-img4.png" alt="">
                                                    </div>
                                                    <div class="comment_box">
                                                        <form>
                                                            <input type="text" placeholder="Post a comment">
                                                            <button type="submit">Send</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="process-comm">
                                            <a href="#" title=""><img src="images/process-icon.png" alt=""></a>
                                        </div>
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

@endsection