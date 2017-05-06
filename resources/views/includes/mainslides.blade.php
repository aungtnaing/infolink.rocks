<div class="slider">
    <div class="fullwidthbanner-container">
        <div class="fullwidthbanner">
            <ul>
                
                 @foreach($mainslides as $mainslide)
                <li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
                    <img src="{{ $mainslide->photourl1 }}" data-fullwidthcentering="on" alt="slide">
             	
                    <div class="tp-caption first-line lfr tp-resizeme start" data-x="center" data-hoffset="0" data-y="center" data-speed="2500" data-start="500" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><span class="mfbody">Info-link project / {{ $mainslide->created_at }}</span><h1 style="color:black">{{ $mainslide->name }} <em>{{ $mainslide->subtitle }}</em></h1><div class="btn btn-success"><a href="{{ $mainslide->caption1 }}">View Project</a></div></div>
                </li>
                @endforeach
            
            </ul>
        </div>
    </div>
</div>