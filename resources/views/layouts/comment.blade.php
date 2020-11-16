
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
                    <span><img src="images/clock.png" alt=""> {{ $comment->created_at->diffForHumans() }}</span>
                    <p> {!! $comment->content_str !!}</p>
                   
                </div>
            </div>   
        </li>
    </ul>
@endforeach
 
 
 


    
