<?php
require 'init.php';
require 'controller/aboutController.php';
require 'includes/header.php';
?>

<div class="content">
    <div class="infoWrap">
        <div class="infoContainer" style="width: 790px;">
            <?php if (!empty($aboutInformation)) { ?>
                <h4 style="padding: 5px 0px 10px 0px;border: none;">
                    <i class="fa fa-book glyphiconOverride"></i>
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
<script type="text/javascript">
//    $(function () {
//        (function (e, t, n) {
//            var r, i = e.getElementsByTagName(t)[0];
//            if (e.getElementById(n))
//                return;
//            r = e.createElement(t);
//            r.id = n;
//            r.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
//            i.parentNode.insertBefore(r, i)
//        })(document, "script", "facebook-jssdk")
//    });
</script>
<?php
require 'includes/footer.php';
