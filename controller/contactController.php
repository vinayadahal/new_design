<?php

if (isset($_SESSION['alert'])) {
    $alert = $_SESSION['alert'];
    unset($_SESSION['alert']);
}
$shortSweet = $obj_query->select_all_order('trip', 'added', 'DESC', '3', 'category', 'short and sweet');
$contactInformation = $obj_query->select_single(array('title', 'content', 'desc'), 'content', 'keyword', 'contact');
$titleController = ucfirst($contactInformation['title']);
