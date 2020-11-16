@extends('layouts.app')
@section('title',$info->title)
@section('content')
<div class="main-section">
    <div class="container">
        <div class="main-section-data">
            <div class="row">
                <div class="col-lg-3 col-md-4 pd-left-none no-pd">
                    @include('layouts.main-left-sidebar')
                </div>
                <div class="col-lg-9 col-md-8 no-pd">
                    <div class="main-ws-sec">
                        <div class="posts-section">

                            <div class="posty">
                                <div class="post-bar no-margin">
                                    <div class="post_topbar">
                                        <div class="usy-dt">
                                            <img src="/images/resources/us-pic-1.png" alt="" width="50px" height="50px">
                                            <div class="usy-name">
                                                <h3>{{$info->author}}</h3>
                                                <span><img src="/images/clock.png" alt="">{{$info->created_at->diffForHumans()}}</span>
                                            </div>
                                        </div>
                                        <div class="ed-opts">
                                            <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                        </div>
                                    </div>
                                    <div class="epi-sec">
                                        <ul class="descp">
                                               <li><span><i class="la la-folder"></i>{{$info->nav_name->title}}</span></li>
											   <li><img src="/images/icon9.png" alt=""><span>wuhan</span></li>
                                        </ul>
                                        <ul class="bk-links">
                                            <li><a href="#" title="书签"><i class="la la-bookmark"></i></a></li>
                                            <li><a href="#" title="分享"><i class="la la-share-square"></i></a></li>
                                            <li><a href="#" title="留言"><i class="la la-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="job_descp">
                                        <h3>{{$info->title}}</h3>
                                        <p>
                                            {!! $info->content !!}
                                        </p>
                                        <ul class="skill-tags">
                                             @if(count($info->tag))
													@foreach($info->tag as $k=>$v)
														<li><a href="#" title="">{{$v}}</a></li>
													@endforeach
											  @endif
                                        </ul>
                                    </div>
                                    <div class="job-status-bar">
                                        <ul class="like-com">
                                            <li>
                                                   <a href="#"><i class="la la-heart"></i> 喜欢</a>
													<img src="/images/liked-img.png" alt="">
													<span>{{$info->like}}</span>
                                            </li>
                                            <li>
                                                <a href="#" title="" class="com"><img src="/images/com.png" alt=""> 评论 {{$info->comments->count()}}</a>
                                            </li>
                                        </ul>
                                        <a><i class="la la-eye"></i>浏览{{$info->reade_num}}</a>
                                    </div>
                                </div>
                                <div class="comment-section">  
                                    @if(Auth::check()) 
                                       <livewire:add-comment :postId="$info->id" key="'add'.$info->id"/>     
                                    @else
                                      <div class="plus-ic">
                                           <a class="text-indigo-600 hover:text-indigo-900" href="{{route('login')}}">登陆后方可评论！</a>
                                        </div> 
                                    @endif 
                                       <livewire:show-comment :post="$info" :key="'show'.$info->id"/>  
                                  </div>
                                </div>
                            </div> 
                           
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection