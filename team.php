<?php
require 'init.php';
require 'controller/ourTeamController.php';
require 'includes/header.php';
?>

<div class="content">
    <div class="infoWrap">
        <div class="infoContainer" style="width: 790px;">
            <h4 style="border: none;"><i class="fa fa-user glyphiconOverride"></i> Our Team Members</h4>
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
                        <p><?php echo $team['desc']; ?></p>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
        <div class="infoContainer" style="width: 390px;">
            <?php require 'includes/searchSiteOnly.php'; ?>
        </div>
    </div>
</div>
<?php require 'includes/otherInfo.php'; ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#show1').css({display: 'block'});
        $('#plus1').css({display: 'none'});
        $('#plus2').css({display: 'block'});
        $('#plus3').css({display: 'block'});
        $('#minus1').css({display: 'block'});
        $('#minus2').css({display: 'none'});
        $('#minus3').css({display: 'none'});
        $('#click1').click(function () {
            $('#show1').slideToggle();
            $('#show2').slideUp();
            $('#show3').slideUp();
            $('#click1 span').toggle();
            $('#plus2').css({display: 'block'});
            $('#plus3').css({display: 'block'});
            $('#minus2').css({display: 'none'});
            $('#minus3').css({display: 'none'});
        });
        $('#click2').click(function () {
            $('#show2').slideToggle();
            $('#show1').slideUp();
            $('#show3').slideUp();
            $('#click2 span').toggle();
            $('#plus1').css({display: 'block'});
            $('#plus3').css({display: 'block'});
            $('#minus1').css({display: 'none'});
            $('#minus3').css({display: 'none'});
        });
        $('#click3').click(function () {
            $('#show3').slideToggle();
            $('#show2').slideUp();
            $('#show1').slideUp();
            $('#click3 span').toggle();
            $('#plus1').css({display: 'block'});
            $('#plus2').css({display: 'block'});
            $('#minus1').css({display: 'none'});
            $('#minus2').css({display: 'none'});
        });
    });
</script>
<?php
require 'includes/footer.php';
