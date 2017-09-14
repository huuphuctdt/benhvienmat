<div id="div-promotion">
    <span id="close-div-promotion">x</span>
    @if(strpos($promotion->content , 'iframe' ) !== false)
        {!! $promotion->content !!}
    @else
        <img src="{{ url('images/'.$promotion->content) }}" alt="{{ $promotion->content }}" title="{{ $promotion->content }}" >
    @endif
</div>