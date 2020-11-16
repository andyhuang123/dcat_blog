<div class="comment_box" style="width:100%">
    <form wire:submit.prevent="submit"> 
        <div class="@if($parent_id === 0) shadow-lg mt-5 py-5 @endif bg-white flex flex-wrap justify-center px-3 lg:px-5">
                <div class="w-2/12 sm:w-1/12 flex justify-start">
                    <img class="h-10 w-10 rounded-full" src="{{ user_img() }}">
                </div>
                <div class="w-10/12 sm:w-11/12">
                    <div>
                        <input x-on:input="convert()" wire:model.defer="content" id="{{ $comment_composing_box_id }}" class="w-full  @if($parent_id === 0) h-24 @else h-18 @endif resize-none focus:shadow-outline-indigo focus:text-indigo-600 leading-tight form-input" />
                        @error('content')
                        <div class="mt-3"><span class="text-red-500">{{ $message }}</span></div>
                        @enderror
                        <button type="submit">
                            @if($parent_id === 0) 提交 @else 回复 @endif
                        </button>
                    </div> 
                    <div id="{{ $preview_box_id }}"></div>
                        @if (session()->has('message'))
                        <div class="alert alert-success px-4 py-2 leading-6 text-indigo-500">
                            {{ session('message') }}
                        </div>
                        @endif 
                </div>
            </div>
        </div> 
    </form>
</div>
 
@section('js')
    <script src="{{ asset('js/showdown.js') }}"></script>
    <script type="text/javascript">
        function convert() {
            var text = document.getElementById("{{ $comment_composing_box_id }}").value;
            var converter = new showdown.Converter();
            var html = converter.makeHtml(text);
            var err = document.getElementById("{{ $comment_composing_box_id }}").nextElementSibling
            err ? err.style = 'display:none' : '';
            document.getElementById("{{ $preview_box_id }}").style = text ? "display:block" : "display:none";
            document.getElementById("{{ $preview_box_id }}").innerHTML = html;
        }
    </script>
@endsection
 