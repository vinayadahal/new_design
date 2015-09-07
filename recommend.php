<?php
require 'init.php';
require 'controller/recomController.php';
require 'includes/header.php';
?>

<div class="content">
    <div class="infoWrap">
        <div class="infoContainer" style="width: 790px;">
            <h4 style="border: none;"><i class="fa fa-comments glyphiconOverride"></i> Recommend us</h4>
            <?php
            if (!empty($reviews)) {
                foreach ($reviews as $review) {
                    ?>
                    <div class="panel panel-default suggestedPnl">
                        <h5 style="color: #095077;float:right;">Published on: <span style="color: #1475A1;"><?php echo date("M jS, Y", strtotime($review['addedOn'])); ?></span></h5>
                        <br />
                        <h4><i>"<?php echo ucfirst($review['title']); ?>"</i></h4><br>
                        <?php echo $review['description']; ?><br>
                        <span style="color: #095077;"><?php echo ucfirst($review['name']); ?></span> | <span style="color: #1475A1;"><?php echo $review['email']; ?></span> | <?php echo ucfirst($review['country']); ?>
                        <br>
                        <span style="color: #095077;">Visited on:</span> <span style="color: #1475A1;"><?php echo date("M, Y", strtotime($review['visited'])); ?></span>
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
