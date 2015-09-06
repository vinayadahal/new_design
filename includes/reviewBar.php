<div class="infoContainer" style="width: 390px;">

    <?php require 'searchSiteOnly.php'; ?>
    <!--    <div class="panel panel-default reviewPnl">
            <div class="accordainHeading" id="click1"><a href="javascript:void(0);">Heading1</a></div>
            <div class="accordainBody" id="show1">one show</div>
            <div class="accordainHeading" id="click2">Heading2</div>
            <div class="accordainBody" id="show2">two show</div>
            <div class="accordainHeading" id="click3">Heading3</div>
            <div class="accordainBody" id="show3">three show</div>
        </div>-->
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
                        echo substr($review['description'], 0, 480) . '... <span style="color: #1475A1"><a href="#">Read More</a> &raquo;</span>';
                    }
                    ?>
                </p>
            </div>
        <?php } ?>
        <a href="<?php echo baseUrl; ?>recommended">
            <button class="btn btn-default"><i class="fa fa-comments glyphiconOverride"></i> All Recommendations</button>
        </a>
    <?php } ?>
</div>