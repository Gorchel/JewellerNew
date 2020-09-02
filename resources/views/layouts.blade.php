<!DOCTYPE html>
<html>
<head>
    <title>Jeweller STUDIO Al'Shapovalov</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="/css/main.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&load=Map,Placemark" type="text/javascript"></script>
    <meta property="og:image" content="/images/header_vk.jpg"/>
</head>
<body>
    <audio src="/audios/audio.mp3" autoplay="autoplay" loop="loop" id="background-audio"></audio>
    <input type="hidden" id="_locale" value="{{\Request::get('locale')}}">
    <div class="container-fluid" id="wrapper">
        <div class="container" id="header">
            <div class="row" id="translatePanelRow">
                <div class="col-xs-6">
                    <div id="siteMusic" class='row activeMusic'>
                        <i class="fa fa-music"></i>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div id="translatePanel" class='row'>
                        <div class="col-xs-3 borderRight {{!Request::has('locale') ? 'activeTranslate' : ''}}">
                            <a href="/">рус</a>
                        </div>
                        <div class="col-xs-3 borderRight {{Request::get('locale') == 'en' ? 'activeTranslate' : ''}}">
                            <a href="/?locale=en">eng</a>
                        </div>
                        <div class="col-xs-3 borderRight {{Request::get('locale') == 'de' ? 'activeTranslate' : ''}}">
                            <a href="/?locale=de">de</a>
                        </div>
                        <div class="col-xs-3 {{Request::get('locale') == 'es' ? 'activeTranslate' : ''}}">
                            <a href="/?locale=es">es</a>
                        </div>
                    </div>
                </div>
            </div>
            <p><img src="/images/header.jpg" alt=""></p>
            <nav class="row">
                <div class="col-xs-4" id="production-btn">
                    <i class="fa fa-diamond fa-1x visible-xs"></i>
                    <p class="hidden-xs">@lang('lang.navigation.navProduction')</p>
                </div>
                <div class="col-xs-4" id="social-btn">
                    <i class="fa fa-vk fa-1x visible-xs"></i>
                    <p class="hidden-xs">@lang('lang.navigation.navSocial')</p>
                </div>
                <div class="col-xs-4" id="about-btn">
                    <i class="fa fa-map-marker fa-1x visible-xs"></i>
                    <p class="hidden-xs">@lang('lang.navigation.navAbout')</p>
                </div>
            </nav>
        </div>
        <div id="wrapper-content">
            @section("content")
            @show
        </div>
        <div class="container" id="footer">
            <p><img src="/images/line.jpg" alt=""></p>
            <p><img src="/images/footer.jpg" alt=""></p>
        </div>
    </div>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>
