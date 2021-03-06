<?php
require '../init.php';
require 'controller/expeditionController.php';
require 'includes/header.php';
?>
<div class = "admin_edit_center">
    <h3>Add Expedition Type</h3>
    <a href = "<?php echo baseUrl ?>admin/expedition/1/" style = "outline: 0px;" title = "Back"><i class = "glyphicon glyphicon-circle-arrow-left back_btn"></i></a>
    <form method = "POST" action = "<?php echo baseUrl ?>admin/insertExpedition/"  onsubmit="return validate(['category', 'description'])">
        <label for="category"><h5>Expedition Type:</h5></label> <input id="category" type="text" class="form-control admin_editBox_override" name="category" />
        <label for="description"><h5>Description:</h5></label> <input id="description" type="text" class="form-control admin_editBox_override" name="description" />
        <input type="submit" value="Add" class="admin_edit_btn" />
    </form>
    <a href="<?php echo baseUrl ?>admin/expedition/1/"><button class="admin_edit_btn">Cancel</button></a>
</div>
<?php
require 'includes/footer.php';
