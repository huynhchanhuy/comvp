/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var VBDMap = (function() {
    return {
        init: function() {
            var js = document.createElement("script");
            js.type = "text/javascript";
            js.src = "http://www.vietbando.com/maps/API/VBDMapAPI.js?key=e7vjH+pgQHuSyV75dwG6hq0WQek+cVqm";
            document.body.appendChild(js);
            window.onload = function()
            {
                if (VBrowserIsCompatible())
                {
                    var map = new VMap(document.getElementById('gmap'));
                    var pt = new VLatLng(10.76218964051995, 106.69479042291641);
                    map.setCenter(pt, 18);
                    var marker = new VMarker(pt, new VIcon());
                    map.addOverlay(marker);
                    var content = "<ul class='nav'>"
                            + "<li><b>ĐẶT CƠM VĂN PHÒNG</b></li>"
                            + "<li><i class='fa fa-phone'></i> Phone: +2 95 01 88 821</li>"
                            + "<li><i class='fa fa-envelope'></i> Email: info@domain.com</li>"
                            + "</ul>";
                    map.openInfoWindow(map.getCenter(), content);
                }
            };
        }
    };
})();