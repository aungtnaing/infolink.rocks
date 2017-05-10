<div class="slider">
    <div class="fullwidthbanner-container">
        <div class="fullwidthbanner">
            <ul>
                
                 @foreach($mainslides as $mainslide)
                <li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
                    <img src="{{ $mainslide->photourl1 }}" data-fullwidthcentering="on" alt="slide">
             		<div class="tp-caption first-line lfr tp-resizeme start" data-x="center" data-hoffset="0" data-y="center" data-speed="2500" data-start="500" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><span>Info-link project / {{ $mainslide->created_at }}</span><h2 style="color:black" class="mfbody">{{ $mainslide->mname }} <em class="mfbody">{{ $mainslide->msubtitle }}</em></h2><div class="slider-button"><a href="#">View Project</a></div></div>
                </li>
                @endforeach
            
            </ul>
        </div>
    </div>
</div>