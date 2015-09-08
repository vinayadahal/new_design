<div class="divider"></div>
<div class="content">
    <div class="infoContainer" style="width: 1200px; margin: 0px">
        <h4 style="border: none;"><i class="glyphicon glyphicon-globe glyphiconOverride"></i> Latest Trips</h4>
        <?php if (!empty($latestTrips)) { ?>
            <?php foreach ($latestTrips as $latestTrip) { ?>
                <div class="panel panel-default highlightPnl">
                    <div class="suggestedPnlTitle"><a href="<?php echo baseUrl . 'details/' . $latestTrip['id']; ?>/"><?php echo ucfirst($latestTrip['title']); ?></a></div>
                    <div class="thumbnail" style="display:table;">
                        <a href="<?php echo baseUrl . 'details/' . $latestTrip['id']; ?>/">
                            <div class="suggestedPnlIcon" style="background-image:url('<?php echo baseUrl . 'images/thumb/' . basename($latestTrip['imgPath']); ?>');"></div>
                        </a>
                    </div>
                    <b style="color: #1475A1;">
                        <i class="fa fa-clock-o fa-custom"></i> Duration: <?php echo $latestTrip['duration']; ?>
                        |
                        <i class="fa fa-map-marker fa-custom"></i> Area: <?php echo $latestTrip['area']; ?>
                    </b>
                    <br/>
                    <br/>
                    <p>
                        <?php
                        if (strlen($latestTrip['desc']) < 400) {
                            echo $latestTrip['desc'];
                        } else {
                            echo strip_tags(substr($latestTrip['desc'], 0, 400)) . '...';
                        }
                        ?>
                        <span style="color: #1475A1"><a href="<?php echo baseUrl . 'details/' . $latestTrip['id']; ?>">Read More</a> &raquo;</span>
                    </p>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
</div>

