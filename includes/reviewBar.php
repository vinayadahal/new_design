<div class="infoContainer" style="width: 390px;">

    <?php require 'searchSiteOnly.php'; ?>
    <?php require 'accordain.php'; ?>
    <?php if (!empty($reviews)) { ?>
        <h4 style="border: none;"><i class="fa fa-comments glyphiconOverride"></i> Recommendation</h4>
        <?php foreach ($reviews as $review) { ?>
            <div class="panel panel-default reviewPnl">
                <h5><?php echo ucfirst($review['name']); ?></h5>
                <p><?php echo ucfirst($review['title']); ?></p>
                <p>
                    <?php
                    if (strlen($review['description']) < 480) {
                        echo $review['description'];
                    } else {
                        echo substr($review['description'], 0, 480) . '... <span style="color: #1475A1"><a href="' . baseUrl . 'showRecommend/' . $review['id'] . '">Read More</a> &raquo;</span>';
                    }
                    ?>
                </p>
            </div>
        <?php } ?>
        <a href="<?php echo baseUrl; ?>recommend">
            <button class="btn btn-default"><i class="fa fa-comments glyphiconOverride"></i> All Recommendations</button>
        </a>
    <?php } ?>
</div>