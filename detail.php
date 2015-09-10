<?php
require 'init.php';
require 'controller/detailController.php';
require 'includes/header.php';
?>

<div class="content">
    <div class="infoWrap">
        <div class="infoContainer" style="width: 790px;">
            <h4 style="padding: 5px 0px 10px 0px;border: none;">
                <i class="fa fa-globe glyphiconOverride"></i>
                <?php echo ucfirst($res['title']); ?>
            </h4>
            <div class="panel panel-default suggestedPnl">
                <div class="thumbnail thumbnailOverride">
                    <div class="suggestedPnlIcon" style="width: 500px; height:250px; background-image:url('<?php echo baseUrl . 'images/thumb/' . basename($res['imgPath']); ?>');"></div>
                </div>
                <div class="detail">
                    <?php echo $res['desc']; ?>
                    <table>
                        <tr>
                            <th colspan="2">Summary:</th>
                        </tr>
                        <tr>
                            <td>Area</td>
                            <td>Duration</td>
                        </tr>
                        <tr>
                            <td><?php echo ucfirst($res['area']); ?></td>
                            <td><?php echo $res['duration']; ?></td>
                        </tr>
                    </table>
                    <?php if ($res['featured'] == 'Yes' && $res['offer'] != NULL) { ?>
                        <br/>
                        <b>Special offer: <span style="color: #e00;"><?php echo $res['offer']; ?></span></b>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="infoContainer" style="width: 390px;">
            <?php require 'includes/searchSiteOnly.php'; ?>
            <?php require 'includes/accordain.php'; ?>
        </div>
    </div>
</div>
<?php require 'includes/otherInfo.php'; ?>
<?php
require 'includes/footer.php';
