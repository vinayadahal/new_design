<?php
require 'init.php';
require 'controller/ourTeamController.php';
require 'includes/header.php';
?>

<div class="content">
    <div class="infoWrap">
        <div class="infoContainer" style="width: 790px;">
            <h4 style="border: none;"><i class="fa fa-users glyphiconOverride"></i> Our Team Members</h4>
            <?php
            if (!empty($teamInfo)) {
                foreach ($teamInfo as $team) {
                    ?>
                    <div class="panel panel-default suggestedPnl">
                        <div class="thumbnail thumbnailOverride">
                            <div class="teamIcon">
                                <img src="<?php echo $team['photo']; ?>" alt="Team Member" title="Team Member"/>
                            </div>
                        </div>
                        <b class="suggestedPnlTitle"><?php echo ucfirst($team['name']); ?></b>
                        <br/>
                        <br/>
                        <b style="color: #1475A1;">Designation: <?php echo $team['designation']; ?></b> 
                        <br/>
                        <br/>
                        <p><?php echo strip_tags($team['desc']); ?></p>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
        <div class="infoContainer" style="width: 390px;">
            <?php require 'includes/searchSiteOnly.php'; ?>
            <?php require 'includes/accordain.php'; ?>
        </div>
    </div>
</div>
<?php require 'includes/otherInfo.php'; ?>
<script type="text/javascript">
    
</script>
<?php
require 'includes/footer.php';
