<?php ?>
<!DOCTYPE html>
<!--
Projet: MINISITE
JUIN 2017
HILLEWAERT Daniel
-->

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/general.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <main>
            <nav>
                <div class="nav_1">A</div>
                <div class="nav_2">B</div>
                <div class="nav_3">C</div>
                <div class="nav_4">D</div>
            </nav>
            <header>
                <div class="logo_img"><img src="img/logoA.png" alt="logo"/></div>
                <div class="logo_txt"></div>
                <ul>
                    <li>L1</li>
                    <li>L2</li>
                    <li>L3</li>
                    <li>L4</li>
                </ul>
            </header>
            <section>
                Section
            </section>
            <div class="localisation">
                <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:450px;width:700px;'><div id='gmap_canvas' style='height:450px;width:700px;'></div><div><small><a href="http://embedgooglemaps.com">google maps carte</a></small></div><div><small><a href="http://youtubeembedcode.com">embed youtube code</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(50.6432505,5.560698600000023),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(50.6432505,5.560698600000023)});infowindow = new google.maps.InfoWindow({content:'<strong>liege Saint Laurent</strong><br> Rue St Laurent 29, 4000 Liège<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
            </div>
        </main>
    </body>
</html>
