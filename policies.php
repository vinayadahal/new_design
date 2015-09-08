<?php
require 'init.php';
require 'controller/policyController.php';
require 'includes/header.php';
?>

<div class="content">
    <div class="infoWrap">
        <div class="infoContainer" style="width: 790px;">
            <?php if (!empty($aboutInformation)) { ?>
                <h4 style="padding: 5px 0px 10px 0px;border: none;">
                    <i class="fa fa-file-text glyphiconOverride"></i>
                    <?php echo ucfirst($aboutInformation['title']); ?>
                </h4>
                <div class="panel panel-default suggestedPnl">

                    <div class="detail">
                        <?php echo $aboutInformation['content']; ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="infoContainer" style="width: 390px;">
            <?php require 'includes/searchSiteOnly.php'; ?>
        </div>
    </div>
</div>
<?php require 'includes/otherInfo.php'; ?>
<?php
require 'includes/footer.php';
