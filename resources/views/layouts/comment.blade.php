
@foreach($comments as $key => $comment)
    @php
        $key_add_comment = \Illuminate\Support\Str::random(10);
        $show_reply = 'show_reply' . $time;
    @endphp  
    <ul>
        <li>
            <div class="comment-list">
                <div class="bg-img">
                    <img src="{{ $comment->user->image ?? '/images/resources/bg-img1.png' }}" alt="">
                </div>
                <div class="comment">
                    <h3>{{ $comment->user->name ?? '' }}</h3>
                    <span><img src="/images/clock.png" alt=""> {{ $comment->created_at->diffForHumans() }}</span>
                    <p> {!! $comment->content_str !!}</p>
                    <!-- @if(Auth::check())
                        <span class="ml-1 bg-gray-100 px-3 transition ease-in-out duration-150 hover:bg-indigo-500 hover:text-white leading-6 rounded-md text-gray-500 whitespace-no-wrap inline-flex text-sm items-center"
                             @click="{{ $show_reply }} = !{{ $show_reply }}">
                        回复
                    </span>
                    @endif -->
                </div>
            </div>  
            <div class="ml-10"> 
                @include('layouts.comment',['comments' => $comment->replys,'time' => $time + 1])
           </div> 
        </li>
    </ul>
@endforeach

 
 
 


    
