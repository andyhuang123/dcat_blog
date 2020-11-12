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
                                      
                                        <div class="post-bar">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img src="images/resources/us-pic-1.png" alt="" width="50px" height="50px">
                                                    <div class="usy-name">
                                                        <h3>coding</h3>
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

                                        @include('layouts.ad-profiles')
                                         
                                       
                                        @include('layouts.top-profiles')

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
