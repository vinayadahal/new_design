<div class="divider"></div>
<div class="content">
    <div class="infoContainer" style="width: 1200px;">
        <h3 style="border: none;"><i class="glyphicon glyphicon-globe glyphiconOverride"></i> Popular Trips</h3>
        <?php
        foreach ($popTrip as $pop) {
            ?>
            <div class="panel panel-default highlightPnl">
                <b class="suggestedPnlTitle"><a href="<?php echo baseUrl . 'details/' . $pop['id']; ?>/"><?php echo $pop['title']; ?></a></b>
                <br/>
                <br/>
                <div class="thumbnail" style="display:table">
                    <a href="<?php echo baseUrl . 'details/' . $pop['id']; ?>/">
                        <div class="suggestedPnlIcon" style="background-image:url('<?php echo baseUrl . 'images/thumb/' . basename($pop['imgPath']); ?>');"></div>
                    </a>
                </div>
                <b style="color: #1475A1;">
                    <i class="fa fa-clock-o fa-custom"></i> Duration: <?php echo $pop['duration']; ?>
                    |
                    <i class="fa fa-map-marker fa-custom"></i> Area: <?php echo $pop['area']; ?>
                </b>
                <br/>
                <br/>
                <p>
                    <?php
                    if (strlen($pop['desc']) < 400) {
                        echo $pop['desc'];
                    } else {
                        echo strip_tags(substr($pop['desc'], 0, 400)) . '...';
                    }
                    ?>
                    <span style="color: #1475A1"><a href="<?php echo baseUrl . 'details/' . $pop['id']; ?>">Read More</a> &raquo;</span>
                </p>
            </div>
        <?php } ?>
    </div>
</div>