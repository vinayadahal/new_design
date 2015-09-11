<?php

if (isset($_SESSION['alert'])) {
    $alert = $_SESSION['alert'];
    unset($_SESSION['alert']);
}

$aboutInformation = $obj_query->select_single(array('title', 'content', 'desc', 'keyword'), 'content', 'keyword', 'about');
$shortSweet = $obj_query->select_all_order('trip', 'added', 'DESC', '3', 'category', 'short and sweet');
$titleController = ucfirst($aboutInformation['title']);
