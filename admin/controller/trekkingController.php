<?php

if (!empty($_GET['target'])) {
    $target = $_GET['target'];
    if ($target == 'showAll') {
        $title = "Trekking";
        $allData = $obj_query->select_all('trekking');
        $totalData = count($allData);
        $dataPerPage = 5;
        $num_pages = ceil($totalData / $dataPerPage);
        if ($_GET['page'] > $num_pages && $_GET['page'] != 1) {
            header('location:' . baseUrl . 'error');
            exit();
        }
        if (!empty($_GET['page']) && $_GET['page'] > 1) {
            $page = $_GET['page'] - 1;
            $start = ($dataPerPage * $page);
        } else {
            $start = 0;
        }
        $sn = $start + 1;
        $catInfo = $obj_query->select_all('trekking', $start, $dataPerPage);
    }

    if ($target == 'insertTrekking') {
        require '../../init.php';
        $category = $_POST['category'];
        $desc = $_POST['description'];
        $col = array('type', 'description');
        $info = array($category, $desc);
        if ($obj_query->insert($col, $info, 'trekking')) {
            $_SESSION['status'] = 'ok';
            $_SESSION['flashData'] = 'Record Inserted';
            header('location:' . baseUrl . 'admin/trekking/1/');
        } else {
            $_SESSION['status'] = 'error';
            $_SESSION['flashData'] = 'Record cannot be inserted';
            header('location:' . baseUrl . 'admin/trekking/1/');
        }
    }
    if ($target == 'editTrekking') {
        require '../../init.php';
        $col1 = array('id', 'type', 'description');
        $id1 = 'id';
        $val1 = $_GET['id'];
        $editData = $obj_query->select_single($col1, 'trekking', $id1, $val1);
        if (!empty($editData)) {
            $title = 'EditCategory';
            require '../editTrekking.php';
        } else {
            require 'expired.php';
        }
    }

    if ($target == 'updateTrekking') {
        require '../../init.php';
        $pk = 'id';
        $id = $_POST['cateId'];
        $old_data = $_POST['oldData'];
        $category = $_POST['category'];
        $desc = $_POST['description'];
        $col = 'type,description';
        $info = array($category, $desc);
        if ($obj_query->update($col, $info, 'trekking', $pk, $id)) {
            $_SESSION['status'] = 'ok';
            $_SESSION['flashData'] = 'Record Updated';
            $res = $obj_query->select_one(array('category'), 'trip', 'category', $old_data);
            if (!empty($res)) {
                $obj_query->update('category', array($category), 'trip', 'category', $old_data);
            }
            header('location:' . baseUrl . 'admin/trekking/1/');
        } else {
            $_SESSION['status'] = 'error';
            $_SESSION['flashData'] = 'Record cannot be updated';
            header('location:' . baseUrl . 'admin/trekking/1/');
        }
    }
    if ($target == 'deleteTrekking') {
        require '../../init.php';
        $id1 = 'id';
        $val1 = $_GET['id'];
        if ($obj_query->delete_one('trekking', $id1, $val1)) {
            $_SESSION['status'] = 'ok';
            $_SESSION['flashData'] = 'Record Deleted';
            header('location:' . baseUrl . 'admin/trekking/1/');
        } else {
            $_SESSION['status'] = 'error';
            $_SESSION['flashData'] = 'Record cannot be deleted';
            header('location:' . baseUrl . 'admin/trekking/1/');
        }
    }
}

