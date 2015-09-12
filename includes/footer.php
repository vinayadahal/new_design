<?php
$col = array('content');
$id = 'keyword';
$val = 'copyright';
$res = $obj_query->select_single($col, 'content', $id, $val);
if (empty($res)) {
    $copyright = 'No data can be recieved.';
} else {
    $copyright = $res['content'];
}
?>
<div class="popupBackground" id="background">
    <div class="panel panel-default feedsBg" id="feedsBg">
        <a href="javascript:void(0)"><span class="closeForm" id="closeForm"></span></a>
        <div class="panel-heading" style="background-color: #1475A1;color: #fff;font-weight: bold;" id="popHead"></div>
        <div class="wrapForm" id="formWrap">
            <form method="POST" id="reviewForm" url="<?php echo baseUrl; ?>sendReview/" ></form>
        </div>
    </div>
</div>
<div class="panel panel-default footer">
    <div class="panel-body footerBody">
        <div class="footerLinkWrap">
            <div class="footerLink">
                <img src="<?php echo baseUrl; ?>images/logo.png" width="200" />
                <br />
                <br />
                <?php
                if (!empty($copyright)) {
                    echo $copyright;
                }
                ?>
            </div>
            <div class="footerLink">
                <ul>
                    <li><h4>This Site</h4></li>
                    <li><a href="<?php echo baseUrl ?>">Home</a></li>
                    <li><a href="<?php echo baseUrl ?>team">Our Team</a></li>
                    <li><a href="<?php echo baseUrl ?>about">About us</a></li>
                    <li><a href="<?php echo baseUrl ?>policies">Policies</a></li>
                    <li><a href="<?php echo baseUrl ?>recommended">Recommended</a></li>
                </ul>
            </div>
            <div class="footerLink">
                <ul>
                    <li><h4>Contact Method</h4></li>
                    <li><a href="javascript:void(0)" onclick="loadForm('Recommend Trip', '<?php echo baseUrl ?>feedback');">Recommend Trip</a></li>
                    <li><a href="javascript:void(0)" onclick="loadForm('Suggestion', '<?php echo baseUrl ?>feedback');">Suggestion</a></li>
                    <li><a href="javascript:void(0)" onclick="loadForm('Feedback', '<?php echo baseUrl ?>feedback');">Feedback</a></li>
                </ul>
            </div>
            <div class="footerLink">
                <ul>
                    <li><h4>Association with</h4></li>
                    <li><a href="http://www.nepal.gov.np/"><span class="footerIcon ng">Nepal Government</span></a></li>
                    <li><a href="http://welcomenepal.com/promotional/"><span class="footerIcon ntb">NTB</span></a></li>
                    <li><a href="http://www.taan.org.np/"><span class="footerIcon ta">TAAN</span></a></li>
                    <li><a href="http://www.nepalmountaineering.org/"><span class="footerIcon nma">NMA</span></a></li>
                </ul>
            </div>
            <div class="footerLink">
                <ul>
                    <li><h4>Follow us</h4></li>
                    <li><a href="https://www.facebook.com/"><span class="footerIcon fb">Facebook</span></a></li>
                    <li><a href="https://twitter.com/"><span class="footerIcon tw">Twitter</span></a></li>
                    <li><a href="https://plus.google.com/"><span class="footerIcon gp">Google +</span></a></li>
                    <li><a href="https://www.linkedin.com/"><span class="footerIcon in">Linked In</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo baseUrl; ?>js/styler.js"></script>
<script type="text/javascript" src="<?php echo baseUrl; ?>js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo baseUrl; ?>js/scripts.js"></script>
<script type="text/javascript">
//    (function (e, t, n) {
//        var r, i = e.getElementsByTagName(t)[0];
//        if (e.getElementById(n))
//            return;
//        r = e.createElement(t);
//        r.id = n;
//        r.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
//        i.parentNode.insertBefore(r, i);
//    })(document, "script", "facebook-jssdk");
                        
<?php if (!empty($shortSweet)) { ?>
                            $(document).ready(function () {
                                $('#show1').css({display: 'block'});
                                $('#plus1').css({display: 'none'});
                                $('#minus1').css({display: 'block'});
    <?php for ($i = 1; $i <= count($shortSweet); $i++) { ?>
        <?php if ($i != 1) { ?>
                                        $('#plus<?php echo $i; ?>').css({display: 'block'});
                                        $('#minus<?php echo $i; ?>').css({display: 'none'});
        <?php } ?>
                                    $('#click<?php echo $i; ?>').click(function () {
                                        $('#show<?php echo $i; ?>').slideToggle();
                                        $('#click<?php echo $i; ?> span').toggle();
        <?php for ($j = count($shortSweet); $j >= 1; $j--) { ?>
            <?php
            if ($i == $j) {
                continue;
            } else {
                ?>
                                                $('#show<?php echo $j; ?>').slideUp();
                                                $('#plus<?php echo $j; ?>').css({display: 'block'});
                                                $('#minus<?php echo $j; ?>').css({display: 'none'});
                <?php
            }
            ?>
        <?php } ?>
                                    });
    <?php } ?>
                            });
<?php } ?>
</script>
</body> 
</html>


