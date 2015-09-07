<?php
require 'init.php';
require 'controller/contactController.php';
require 'includes/header.php';
?>
<div class="content">
    <div class="infoWrap">
        <div class="infoContainer" style="width: 790px;">
            <?php if (!empty($contactInformation)) { ?>
                <h4 style="border:none;">
                    <i class="fa fa-phone-square glyphiconOverride"></i>
                    <?php echo ucfirst($contactInformation['title']); ?>
                </h4>
                <div class="panel panel-default suggestedPnl">
                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
                    <div style='overflow:hidden;height:450px;width:780px;'>
                        <div id='gmap_canvas' style='height:450px;width:780px;'></div>
                        <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
                    </div>
                    <a href='http://www.maps-generator.com'>maps-generator.com</a>
                    <script type='text/javascript' src='http://embedmaps.com/google-maps-authorization/script.js?id=f69e4aa3efac729006213e498dee9e12960143a0'></script>
                    <script type='text/javascript'>
                        function init_map() {
                            var myOptions = {
                                zoom: 12, center: new google.maps.LatLng(28.205302099999997, 83.96163639999997),
                                mapTypeId: google.maps.MapTypeId.ROADMAP};
                            map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                            marker = new google.maps.Marker({map: map, position: new google.maps.LatLng(28.205302099999997, 83.96163639999997)});
                            infowindow = new google.maps.InfoWindow({
                                content: '<strong>Ever Green Trekking</strong><br>' +
                                        ' Lakeside-6<br>' +
                                        ' Pokhara<br>'
                            });
                            google.maps.event.addListener(marker, 'click', function () {
                                infowindow.open(map, marker);
                            });
                            infowindow.open(map, marker);
                        }
                        google.maps.event.addDomListener(window, 'load', init_map);
                    </script>                    
                    <?php echo $contactInformation['content']; ?>
                <?php } ?>
            </div>
        </div>
        <div class="infoContainer" style="width: 390px;">
            <?php require 'includes/searchSiteOnly.php'; ?>
        </div>
    </div>
</div>

<?php require 'includes/otherInfo.php'; ?>
<script type="text/javascript">
//    $(function () {
//        (function (e, t, n) {
//            var r, i = e.getElementsByTagName(t)[0];
//            if (e.getElementById(n))
//                return;
//            r = e.createElement(t);
//            r.id = n;
//            r.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
//            i.parentNode.insertBefore(r, i)
//        })(document, "script", "facebook-jssdk")
//    });
</script>
<?php
require 'includes/footer.php';