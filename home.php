<?php
require 'init.php';
require 'controller/homeController.php';
require 'includes/header.php';
?>

<div class="panel panel-default content" style="padding: 10px;">
    <!-- Slider Begin -->
    <div id="slider1_container" class="slider1_container">
        <!-- Loading Screen --> 
        <div u="loading" class="loadingContainer">
            <div class="loadingIcon2"></div> 
            <div class="loadingIcon"></div> 
        </div> 
        <!-- Slides Container --> 
        <div u="slides" class="swipe">
            <?php
            if (!empty($data)) {
                foreach ($data as $slider) {
                    if ($slider['finalUrl'] != NULL) {
                        ?>
                        <div>
                            <img u="image" src="<?php echo baseUrl . $slider['finalUrl']; ?>" />
                            <div u=caption t="CLIP|LR" t2="B" du="2000" class="captionOrange"  style="position:absolute; left:20px; top: 10px;height:30px; width: 200px"> 
                                <?php echo $slider['caption']; ?>
                            </div>
                        </div>
                        <?php
                    }
                }
            } else {
                echo '<p>No images are uploaded</p>';
            }
            ?>
        </div> 
        <!-- bullet nav container -->
        <div u="navigator" class="jssorb03 bulletNav">
            <!-- bullet navigator item prototype -->
            <div u="prototype" style="POSITION: absolute; WIDTH: 21px; HEIGHT: 21px; text-align:center; line-height:21px; color:White; font-size:12px;"><div u="numbertemplate"></div></div>
        </div>
        <!-- Bullet Nav End -->
        <!-- Arrow Nav Begin -->
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora20l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora20r" style="width: 55px; height: 55px; top: 123px; right: 8px">
        </span>
        <!-- Arrow Nav End -->
        <!-- Trigger --> 
        <script>jssor_slider1_starter('slider1_container');</script> 
    </div> 
    <!-- Slider End --> 

    <div class="welcomeIntro">
        <h4 style="border-bottom: 1px solid #ccc;">Welcome to Evergreen Trekking</h4>
        <?php if (!empty($aboutInformation)) { ?>
            <p><?php
                if (strlen($aboutInformation['content']) < 1400) {
                    echo $aboutInformation['content'];
                } else {
                    echo substr($aboutInformation['content'], 0, 1400) . '...';
                }
                ?> <span style="color: #1475A1"><a href="<?php echo baseUrl . 'about/' ?>">Read More</a> &raquo;</span></p>
            <?php } ?>
    </div>

</div>
<div class="divider" style="margin-top: 20px;"></div>
<div class="content">
    <div class="infoWrap">
        <?php require 'includes/allTrip.php'; ?>
        <?php require 'includes/reviewBar.php'; ?>
    </div>
</div>
<?php require 'includes/popular.php'; ?>
<?php require 'includes/latest.php'; ?>
<?php require 'includes/featured.php'; ?>
<?php require 'includes/otherInfo.php'; ?>
<?php
require 'includes/footer.php';
