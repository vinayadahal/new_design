<?php if (!empty($shortSweet)) { ?>
    <h4 style="border: none;"><i class="fa fa-heart glyphiconOverride"></i> Short n Sweet Trips</h4>
    <div class="panel panel-default reviewPnl">
        <?php $i = 1; ?>
        <?php foreach ($shortSweet as $snsTrip) { ?>
            <div id="click<?php echo $i; ?>" class="accordainHeading">
                <?php echo $snsTrip['title']; ?>
                <span class="expand-close" id='plus<?php echo $i; ?>'></span>
                <span class="expand-open" id='minus<?php echo $i; ?>'></span>
            </div>
            <div id="show<?php echo $i; ?>" class="accordainBody">
                <span class="thumbnail" style="float:left;margin-right: 5px;">
                    <a href="<?php echo baseUrl . 'details/' . $snsTrip['id']; ?>/">
                        <div class="shortSweetIcon" style="background-image:url('<?php echo baseUrl . 'images/thumb/' . basename($snsTrip['imgPath']); ?>');"></div>
                    </a>
                </span>
                <p><?php
                    if (strlen($snsTrip['desc']) < 300) {
                        echo $snsTrip['desc'];
                    } else {
                        echo strip_tags(substr($snsTrip['desc'], 0, 300)) . '...';
                    }
                    ?>
                    <span style="color: #1475A1"><a href="<?php echo baseUrl . 'details/' . $snsTrip['id']; ?>">Read More</a> &raquo;</span>
                </p>
            </div>
            <?php $i++; ?>
        <?php } ?>
        <button class="btn btn-default"><i class="fa fa-eye glyphiconOverride"></i> All Short Trips</button>
    </div>
    <?php
}