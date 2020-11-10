var mouseX, mouseY;

addEventListener('mousemove', function(e){
    mouseX = e.clientX;
    mouseY = e.clientY;
});

function initMap() {
    var point = {lat: 32, lng: 53};
    var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 5,
        center: point,
    });
    point = {lat: 35.715298, lng: 51.404343};
    var tehran = new google.maps.Marker({
        position: point,
        map: map,
    });

    var content;

    map.addListener('click', function(){
        content.hidden = true;
    });

    tehran.addListener("click", function(){
        content = document.getElementById('tehran');
        content.hidden = false;
        content.style.right = mouseX + 'px';
        content.style.top = mouseY + 'px';
    });

    /*
    point = {lat: , lng: };
    var marker = new google.maps.Marker({
        position: point,
        map: map,
    });
    */

    // https://www.latlong.net/category/cities-104-15.html

}