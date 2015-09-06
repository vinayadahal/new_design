<div class="infoContainer" style="width: 790px;">
    <h4 style="border: none;"><i class="fa fa-globe glyphiconOverride"></i> All Trips</h4>
    <?php
    if (!empty($treks)) {
        foreach ($treks as $trek) {
            ?>
            <div class="panel panel-default suggestedPnl">
                <div class="thumbnail thumbnailOverride">
                    <a href="<?php echo baseUrl . 'details/' . $trek['id']; ?>/">
                        <div class="suggestedPnlIcon" style="background-image:url('<?php echo baseUrl . 'images/thumb/' . basename($trek['imgPath']); ?>');"></div>
                    </a>
                </div>
                <b class="suggestedPnlTitle"><a href="<?php echo baseUrl . 'details/' . $trek['id']; ?>/"><?php echo ucfirst($trek['title']); ?></a></b>
                <br/>
                <br/>
                <b style="color: #1475A1;">
                    <i class="fa fa-clock-o fa-custom"></i> Duration: <?php echo $trek['duration']; ?>
                    | 
                    <i class="fa fa-map-marker fa-custom"></i> Area: <?php echo $trek['area']; ?>
                </b> 
                <br/>
                <br/>
                <p>
                    <?php
                    if (strlen($trek['desc']) < 450) {
                        echo strip_tags($trek['desc']);
                    } else {
                        echo strip_tags(substr($trek['desc'], 0, 450)) . '...'
                        ?>
                        <span style="color: #1475A1"><a href="<?php echo baseUrl . 'details/' . $trek['id']; ?>">Read More</a> &raquo;</span>
                    <?php } ?>
                </p>
            </div>
            <?php
        }
    }
    ?>
    <nav>
        <ul class="pagination">
            <li>
                <a href="<?php echo baseUrl ?>page/<?php echo 1; ?>" aria-label="First">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php
            if (!empty($num_pages)) {
                for ($i = 1; $i <= $num_pages; $i++) {
                    if (empty($_GET['page'])) { // sets home page as page number 1.
                        $_GET['page'] = 1;
                    }
                    if ($_GET['page'] == 1 && $i >= 20) { // sets last page (page number 17) as '...'
                        echo '<li><a href="javascript:void(0);">...</a></li>';
                        break;
                    }
                    if ($i >= (20 + ($_GET['page'] - 1)) && $_GET['page'] > 1) { // renders new number at last and add '...'
                        echo '<li><a href="javascript:void(0);">...</a></li>';
                        break;
                    }
                    if ($i < ($_GET['page'] - 1) && $i < ($num_pages - 18)) { //skips page number rendering at first
                        if (($i + 2) == $_GET['page']) {
                            echo '<li><a href="javascript:void(0);">...</a></li>';
                            continue;
                        }
                        if ($i == ($num_pages - 19)) {
                            echo '<li><a href="javascript:void(0);">...</a></li>';
                        }
                        continue;
                    }
                    if ($i == ($_GET['page'] - 1) && $i < ($num_pages - 18)) { // sets '...' at first only.
                        if ($i == 1) {
                            echo '<li><a href="javascript:void(0);">...</a></li>';
                        }
                        continue;
                    }
                    if ($i == $_GET['page']) {
                        $style = ' class="active"';
                    } else {
                        $style = '';
                    }
                    ?>
                    <li<?php echo $style; ?>><a href="<?php echo baseUrl ?>page/<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php
                }
            }
            ?>
            <li>
                <a href="<?php echo baseUrl ?>page/<?php echo $num_pages; ?>" aria-label="Last">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
    <button class="btn btn-default" style="float:right;"><i class="fa fa-eye glyphiconOverride"></i> View All Trips</button>
</div>