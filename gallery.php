<?php
require 'init.php';
require 'controller/galController.php';
require 'includes/header.php';
?>
<div class="content">
    <div class="infoContainer" style="width: 1200px;">
        <h4 style="border: none;"><i class="glyphicon glyphicon-globe glyphiconOverride"></i> Gallery</h4>
        <?php
        if (!empty($imageNames)) {
            for ($i = 0; $i < count($imageNames); $i++) {
                ?>
                <div class="thumbnail gallery_preview">
                    <div class="gallery_icon" style="background-image:url('<?php echo baseUrl; ?>images/gallery/<?php echo $imageNames[$i]; ?>');" onclick="loadImage('<?php echo baseUrl . 'images/gallery/' . $imageNames[$i]; ?>')"></div> 
                </div>
                <?php
            }
        } else {
            echo 'No images are uploaded yet.';
        }
        ?>
        <div class="fullImageWrap" id="fullImageWrap">
            <div class="fullImage" >
                <a href="javascript:void(0)"><span class="closeImage" id="closeImage"></span></a>
                <img src="" class="fullImageCtrl" id="imageFull" alt=""/>
            </div>
        </div>
        <div class="popupBackground" id="background"></div>
    </div>
</div>
<?php require 'includes/otherInfo.php'; ?>
<?php
require 'includes/footer.php';
