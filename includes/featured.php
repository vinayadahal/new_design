<div class="divider"></div>
<div class="content">
    <div class="infoContainer" style="width: 1200px;margin: 0px">
        <h4 style="border: none;"><i class="glyphicon glyphicon-globe glyphiconOverride"></i> Featured Trips</h4>
        <?php
        foreach ($allFeatured as $featured) {
            ?>
            <div class="panel panel-default highlightPnl">
                <div class="suggestedPnlTitle"><a href="<?php echo baseUrl . 'details/' . $featured['id']; ?>/"><?php echo ucfirst($featured['title']); ?></a></div>
                <div class="thumbnail" style="display:table">
                    <a href="<?php echo baseUrl . 'details/' . $featured['id']; ?>/">
                        <div class="suggestedPnlIcon" style="background-image:url('<?php echo baseUrl . 'images/thumb/' . basename($featured['imgPath']); ?>');"></div>
                    </a>
                </div>
                <b style="color: #1475A1;">
                    <i class="fa fa-clock-o fa-custom"></i> Duration: <?php echo $featured['duration']; ?>
                    |
                    <i class="fa fa-map-marker fa-custom"></i> Area: <?php echo $featured['area']; ?>
                </b>
                <br/>
                <br/>
                <p>
                    <?php
                    if (strlen($featured['desc']) < 400) {
                        echo $featured['desc'];
                    } else {
                        echo strip_tags(substr($featured['desc'], 0, 400)) . '...';
                    }
                    ?>
                    <span style="color: #1475A1"><a href="<?php echo baseUrl . 'details/' . $featured['id']; ?>">Read More</a> &raquo;</span>
                </p>
            </div>
        <?php } ?>
    </div>
</div>