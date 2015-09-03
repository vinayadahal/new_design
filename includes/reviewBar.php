<div class="infoContainer" style="width: 390px;">
    <h3 style="border: none;"><i class="fa fa-comments glyphiconOverride"></i> Recommendation</h3>
    <?php foreach ($reviews as $review) { ?>
        <div class="panel panel-default reviewPnl">
            <h5><?php echo ucfirst($review['name']); ?></h5>
            <p><?php echo ucfirst($review['title']); ?></p>
            <p>
                <?php
                if (strlen($review['description']) < 480) {
                    echo $review['description'];
                } else {
                    echo substr($review['description'], 0, 480) . '... <span style="color: #1475A1"><a href="#">Read More</a> &raquo;</span>';
                }
                ?>
            </p>
        </div>
    <?php } ?>
    <a href="<?php echo baseUrl; ?>recommended">
        <button class="btn btn-default"><i class="fa fa-comments glyphiconOverride"></i> All Recommendations</button>
    </a>
</div>