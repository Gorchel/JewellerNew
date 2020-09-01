$(document).ready(function(){
    giveHtml('production',1);

    $('#production-btn').click(function(){
        giveHtml('production',1);
    })
    $('#social-btn').click(function(){
        giveHtml('social',2);
    })
    $('#about-btn').click(function(){
        giveHtml('about',3);
    })

    $('#siteMusic').click(function(){
        var oAudio = document.getElementById('background-audio');

        if ($(this).hasClass('activeMusic')){
            oAudio.pause();
            $(this).removeClass('activeMusic');
        }else{
            oAudio.play();
            $(this).addClass('activeMusic');
        }
    })
})

function giveHtml(handler,bool){
    var height;
    var preloader = '<div class="container" id="preloader"><i class="fa fa-spinner fa-pulse fa-3x"></i></div>';
    $('#wrapper-content').html(preloader);
    $.ajax({
        url: "/"+ handler + '?locale=' + $('#_locale').val(),
    }).done(function(html) {
        $('#wrapper-content').html(html);
        if (bool === 3){
            ymaps.ready(init());
        }
        if (bool === 2){
            height = $('.social-img-wrapper').width();
            $('.social-img-wrapper').height(height);
        }
    });
}

init = function() {
    var myMap, myPlacemark;
    myMap = new ymaps.Map("map", {
        center: [44.61660700178595,33.5251130000002],
        zoom: 15
    });
    myPlacemark = new ymaps.Placemark([44.61660700178595,33.5251130000002]);
    return myMap.geoObjects.add(myPlacemark);
};
