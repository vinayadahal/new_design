<?php

$titleController = 'Details';
if (!empty($_GET['target'])) {
    if ($_GET['target'] == 'getDetails') {
        $col = array('id', 'title', 'category', 'desc', 'imgPath', 'area', 'duration', 'featured', 'offer');
        $table = 'trip';
        $id = 'id';
        $val = $_GET['id'];
        $res = $obj_query->select_single($col, $table, $id, $val);
        if (checkVisited($obj_query, $val)) {
            updateVisited($obj_query, $val);
        } else {
            insertVisited($obj_query, $val);
        }
    }
}

function checkVisited($obj_query, $tripId) {
    $col = array('id', 'tripId', 'visited', 'session_id');
    $table = 'visited';
    $id = 'tripId';
    $val = $tripId;
    $res = $obj_query->select_one($col, $table, $id, $val);
    if (!empty($res)) {
        return true;
    } else {
        return FALSE;
    }
}

function updateVisited($obj_query, $val) {
    $session = $obj_query->select_single(array('visited', 'session_id'), 'visited', 'tripId', $val);
    if ($session['session_id'] != $_SESSION['normalUser']) {
        $col = 'visited,session_id';
        $info = array(($session['visited'] + 1), $_SESSION['normalUser']);
        $table = 'visited';
        $pk = 'tripId';
        $id = $val;
        $obj_query->update($col, $info, $table, $pk, $id);
    }
}

function insertVisited($obj_query, $val) {
    $obj_query->insert(array('tripId', 'visited', 'session_id'), array($val, 1, $_SESSION['normalUser']), 'visited');
}

$shortSweet = $obj_query->select_all_order('trip', 'added', 'DESC', '3', 'category', 'short and sweet');
