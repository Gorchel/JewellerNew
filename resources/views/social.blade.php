<div class="container">
    <div class="row" id="social-panel">
        <a href="http://vk.com/jeweller_studio" target="_blank" class="hidden-xs">
            <div class="col-xs-4">
                <span class="fa-stack fa-3x"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-vk fa-stack-1x"></i></span>
            </div>
        </a>
        <a href="http://vk.com/jeweller_studio" target="_blank" class="hidden-sm hidden-md hidden-lg">
            <div class="col-xs-4">
                <span class="fa-stack fa-2x"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-vk fa-stack-1x"></i></span>
            </div>
        </a>
        <div class="col-xs-4">
            <a href="https://www.instagram.com/shapovalov_alexander/" target="_blank" class="hidden-xs">
                <span class="fa-stack fa-3x"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x"></i></span>
            </a>
            <a href="https://www.instagram.com/shapovalov_alexander/" target="_blank" class="hidden-sm hidden-md hidden-lg">
                <span class="fa-stack fa-2x"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x"></i></span>
            </a>
        </div>
        <div class="col-xs-4">
            <a href="https://www.facebook.com/al.shapovalov" target="_blank" class="hidden-xs">
                <span class="fa-stack fa-3x"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x"></i></span>
            </a>
            <a href="https://www.facebook.com/al.shapovalov" target="_blank" class="hidden-sm hidden-md hidden-lg">
                <span class="fa-stack fa-2x"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x"></i></span>
            </a>
        </div>
    </div>
</div>
<div class="container" id="social-wrapper">
    <div class="row">
        @foreach ($photoArray as $photo)
            <a href="{{$photo[1]}}" target="_blank">
                <div style="background: url({{$photo[0]}})"class="social-img-wrapper col-xs-6 col-sm-4 col-md-3 col-lg-3"></div>
            </a>
        @endforeach
    </div>
</div>
