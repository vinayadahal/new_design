<?php

if (!empty($_GET['target'])) {
    if ($_GET['target'] == 'showSingle') {
        $reviews = $obj_query->select_one(array('name', 'email', 'country', 'visited', 'title', 'description', 'addedOn'), 'review', array('publish', 'id'), array('yes', $_GET['id']));
    }
} else {
    $reviews = $obj_query->select_all_order('review', 'addedOn', 'DESC', 'NULL', 'publish', 'yes');
}
$shortSweet = $obj_query->select_all_order('trip', 'added', 'DESC', '3', 'category', 'short and sweet');
$titleController = 'Recommended';
