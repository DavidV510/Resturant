
let map;

function initMap() {
    var latLang={
        lat:parseInt(options.latitude),
        lng:parseInt(options.longitude)
    }
    map = new google.maps.Map(document.getElementById("map"), {
        center: latLang,
        zoom: parseInt(options.zoom),    
    });

    var marker=new google.maps.Marker({
        position:latLang,
        map:map,
        title:'La Pizza'
    })
}

jQuery(document).ready(function($){
    $('#menu-social li:nth-of-type(1) a').addClass('fab fa-facebook-f');
    $('#menu-social li:nth-of-type(2) a').addClass('fab fa-instagram');
    $('#menu-social li:nth-of-type(3) a').addClass('fab fa-twitter');
    $('#menu-social li:nth-of-type(4) a').addClass('fab fa-pinterest-p');


    $('.mobile-menu a').on('click',function(){
        $('#menu-head').toggle('slow')
    });


    jQuery('.gallery a').each(function(){
        jQuery(this).attr({'data-fluidbox':''});
    });

    if(jQuery('[data-fluidbox]').length>0){
        jQuery('[data-fluidbox]').fluidbox();
    }
    initMap()
})
