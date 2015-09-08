<?php
require 'init.php';
require 'controller/searchController.php';
require 'includes/header.php';
?>
<div class="content">
    <div class="infoContainer" style="width: 1200px;margin: 0px;">
        <h4 style="border: none;"><i class="glyphicon glyphicon-globe glyphiconOverride"></i> Result For: <?php echo ucfirst($keyword); ?></h4>
        <?php
        if (!empty($searchCategory)) {
            foreach ($searchCategory as $categoryResult) {
                ?>
                <div class="panel panel-default highlightPnl">
                    <div class="suggestedPnlTitle"><a href="<?php echo baseUrl . 'details/' . $categoryResult['id']; ?>/"><?php echo ucfirst($categoryResult['title']); ?></a></div>
                    <div class="thumbnail" style="display:table">
                        <a href="<?php echo baseUrl . 'details/' . $categoryResult['id']; ?>/">
                            <div class="suggestedPnlIcon" style="background-image:url('<?php echo baseUrl . 'images/thumb/' . basename($categoryResult['imgPath']); ?>');"></div>
                        </a>
                    </div>
                    <b style="color: #1475A1;">
                        <i class="fa fa-clock-o fa-custom"></i> Duration: <?php echo $categoryResult['duration']; ?>
                        |
                        <i class="fa fa-map-marker fa-custom"></i> Area: <?php echo $categoryResult['area']; ?>
                    </b>
                    <br/>
                    <br/>
                    <p>
                        <?php
                        if (strlen($categoryResult['desc']) < 400) {
                            echo $categoryResultop['desc'];
                        } else {
                            echo strip_tags(substr($categoryResult['desc'], 0, 400)) . '...';
                        }
                        ?>
                        <span style="color: #1475A1"><a href="<?php echo baseUrl . 'details/' . $categoryResult['id']; ?>">Read More</a> &raquo;</span>
                    </p>
                </div>
                <?php
            }
        }
        if (!empty($resultSearch)) {
            foreach ($resultSearch as $search) {
                ?>
                <div class="panel panel-default highlightPnl">
                    <div class="suggestedPnlTitle"><a href="<?php echo baseUrl . 'details/' . $search['id']; ?>/"><?php echo ucfirst($search['title']); ?></a></div>
                    <div class="thumbnail" style="display:table">
                        <a href="<?php echo baseUrl . 'details/' . $search['id']; ?>/">
                            <div class="suggestedPnlIcon" style="background-image:url('<?php echo baseUrl . 'images/thumb/' . basename($search['imgPath']); ?>');"></div>
                        </a>
                    </div>
                    <b style="color: #1475A1;">
                        <i class="fa fa-clock-o fa-custom"></i> Duration: <?php echo $search['duration']; ?>
                        |
                        <i class="fa fa-map-marker fa-custom"></i> Area: <?php echo $search['area']; ?>
                    </b>
                    <br/>
                    <br/>
                    <p>
                        <?php
                        if (strlen($search['desc']) < 400) {
                            echo $search['desc'];
                        } else {
                            echo strip_tags(substr($search['desc'], 0, 400)) . '...';
                        }
                        ?>
                        <span style="color: #1475A1"><a href="<?php echo baseUrl . 'details/' . $search['id']; ?>">Read More</a> &raquo;</span>
                    </p>
                </div>
                <?php
            }
        }
        if (empty($resultSearch) && empty($searchCategory)) {
            echo '<p>No result to display</p>';
            
        }
        ?>
    </div>
</div>
<?php require 'includes/otherInfo.php'; ?>
<?php
require 'includes/footer.php';
