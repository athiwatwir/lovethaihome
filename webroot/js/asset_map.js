var map;
var i;
var markers = [];
var infowindow ;
var infowindows ;
var image;

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
            zoom: 14,
        center: new google.maps.LatLng(13.7442694, 100.5493561),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    infowindow = new google.maps.InfoWindow();
    infowindows = [];
    image = {
        url: 'https://www.lovethaihome.com/img/Home-icon.png',

        scaledSize: new google.maps.Size(25, 25)
    };

    map.addListener('dragend', function () {
        refreshlist();
    });
}

function refreshlist() {
    if ($("input[name='price']").is(":checked")) {
        var pricevalue = $("input[name='price']:checked").val();
    } else {
        var pricevalue = null;
    }
    var bathvalue = $("input[name='bath[]']:checked").map(function () {
        return this.value;
    }).get();
    if (bathvalue.length === 0) {
        bathvalue = null;
    }
    var zonevalue = $("input[name='zone[]']:checked").map(function () {
        return this.value;
    }).get();
    if (zonevalue.length === 0) {
        zonevalue = null;
    }
    var bedvalue = $("input[name='bed[]']:checked").map(function () {
        return this.value;
    }).get();
    if (bedvalue.length === 0) {
        bedvalue = null;
    }
    var typevalue = $("input[name='type[]']:checked").map(function () {
        return this.value;
    }).get();
    if (typevalue.length === 0) {
        typevalue = null;
    }

    var latlug = getposition();
    makemap(latlug[0], latlug[1], latlug[2], latlug[3], pricevalue, bathvalue, zonevalue, bedvalue, typevalue);
}


function getposition() {
    var bounds = map.getBounds();
    var NElat = bounds.getNorthEast().lat();
    var NElng = bounds.getNorthEast().lng();
    var SWlat = bounds.getSouthWest().lat();
    var SWlng = bounds.getSouthWest().lng();
    return [NElat, NElng, SWlat, SWlng];
}

function makemap(NElat, NElng, SWlat, SWlng, pricevalue, bathvalue, zonevalue, bedvalue, typevalue) {
    $('#page-load').show();
    $('#listasset').attr('src', site_url + 'maps/listasset/' + NElat + '/' + NElng + '/' + SWlat + '/' + SWlng + '/' + pricevalue + '/' + bathvalue + '/' + zonevalue + '/' + bedvalue + '/' + typevalue);

    $.get(site_url + 'maps/index/', {"NElat": NElat, "NElng": NElng, "SWlat": SWlat, "SWlng": SWlng, "pricevalue": pricevalue, "bathvalue": bathvalue, "zonevalue": zonevalue, "bedvalue": bedvalue, "typevalue": typevalue, "flag": true}, function (resp) {

        var jsonResp = JSON.parse(resp);

        deleteMarkers();
        console.log(jsonResp);

        //re-map marker
        for (i = 0; i < jsonResp.length; i++) {
            
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(jsonResp[i][1], jsonResp[i][2]),
                map: map,
                draggable: false,
                icon: image
            });
            markers.push(marker);


            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                hideAllInfoWindows();
            }));


            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    
                    var content = '<div id="iw-container">' +
                            '<div id="siteNotice">' +
                            '</div>' +
                            '<div class="iw-title"><a href="'+site_url+'assets/view/'+jsonResp[i][3]+'?title='+jsonResp[i][6] +'" target="_blank" style="color:#FFFFFF;">' + jsonResp[i][0] + '</a></div>' +
                            '<div class="iw-content">' +
                            '<div class="iw-subTitle f-color-red">' + Number(jsonResp[i][5]).toLocaleString('en') + ' บาท</div>' +
                            '<a href="'+site_url+'assets/view/'+jsonResp[i][3]+'?title='+jsonResp[i][6] +'" target="_blank""><img src="' + site_url + 'img/' + jsonResp[i][4] + '" alt="" height="83" width="115"></a>' +
                            '<a href="'+site_url+'assets/view/'+jsonResp[i][3]+'?title='+jsonResp[i][6] +'" target="_blank"><p>' + jsonResp[i][6] + '</p></a>' +
                            '<div class="iw-subTitle">ติดต่อ</div>' +
                            '<p>' + jsonResp[i][7] + '<br>' +
                            '<br>โทร. ' + jsonResp[i][8] + '<br>e-mail: ' + jsonResp[i][9] + '<br>LineId: ' + jsonResp[i][10] + '</p>' +
                            '</div>' +
                            '<div class="iw-bottom-gradient"></div>' +
                            '</div>';
                    infowindow.close();
                    infowindow.setContent(content);
                    //infowindow.setContent(jsonResp[i][0]);
                    infowindow.open(map, marker);
                    infowindows.push(infowindow);
                };
            })(marker, i));
        }
        $('#page-load').hide();

    });
}

function hideAllInfoWindows() {
    infowindows.forEach(function (infowindow) {
        infowindow.close();
    });
}

function deleteMarkers() {
    //Loop through all the markers and remove
    for (var i = 0; i < markers.length; i++) {
        markers[i].setMap(null);
    }
    markers = [];
}

function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
}

$('.dropdown-menu a').on('click', function () {
    refreshlist();
});


