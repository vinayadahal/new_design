<?php
$fullUrl = parse_url($_SERVER['REQUEST_URI']);
$ext = explode('.', $fullUrl['path']);
if (!empty($ext[1])) {
    header('location:' . baseUrl . 'error/');
}
$page = substr($fullUrl['path'], strrpos($fullUrl['path'], '/') + 1);
echo $page;
if (empty($page)) {
    $title = 'Home';
} else {
    $title = ucfirst($page);
}

if (!empty($titleController)) {
    $title = $titleController;
}
$categories = $obj_query->select_all('category');
$trekking = $obj_query->select_all('trekking');
$expedition = $obj_query->select_all('expedition');
$_SESSION['normalUser'] = session_id();
header('Cache-Control: Public');
header('Pragma: cache');
header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', time() + (60 * 60))); // 1 hour
?>
<!DOCTYPE html>
<html> 
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title><?php echo $title; ?> - Ever Green Trekking</title>
        <link rel="icon" type="image/png" href="<?php echo baseUrl ?>images/favicon.png">
        <link href="<?php echo baseUrl; ?>css/baseStyle.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo baseUrl; ?>css/font-awesome.min.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo baseUrl; ?>css/supportStyle.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo baseUrl; ?>css/slideShow.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo baseUrl; ?>css/accordain.css" type="text/css" rel="stylesheet" />
        <script type="text/javascript" src="<?php echo baseUrl; ?>js/styler.js"></script>
        <script type="text/javascript" src="<?php echo baseUrl; ?>js/supportScript.js"></script>
        <script type="text/javascript" src="<?php echo baseUrl; ?>js/jssor.js"></script>
        <script type="text/javascript" src="<?php echo baseUrl; ?>js/jssor.slider.js"></script>
        <script type="text/javascript" src="<?php echo baseUrl; ?>js/slideShow.js"></script>
        <script type="text/javascript" src="<?php echo baseUrl; ?>js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo baseUrl; ?>js/scripts.js"></script>
        
    </head> 
    <body> 
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!--                <div class="navbar-header">
                                    <div class="logo"><img src="images/logo.jpg" width="150" height="50"></div>
                                    <a class="navbar-brand" href="#">Brand</a>
                                </div>-->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav" id="menuUl">
                        <li><a href="<?php echo baseUrl; ?>">Home</a></li>
                        <li id="company">
                            <a href="#">Company <i class="glyphicon glyphicon-triangle-bottom"></i></a>
                            <div class="menu_list" id="destinationList">
                                <div id="arrowUp"></div>
                                <div><a href="<?php echo baseUrl ?>about">About us</a></div>
                                <div><a href="<?php echo baseUrl ?>team">Our Team</a></div>
                                <div><a href="<?php echo baseUrl ?>policies">Policies</a></div>
                            </div>
                        </li>
                        <li><a href="#">Destination</a></li>
                        <li><a href="#">Activities</a></li>
                        <li><a href="#">Trekking</a></li>
                        <li><a href="#">Expedition</a></li>
                        <li><a href="<?php echo baseUrl ?>gallery">Gallery</a></li>
                        <li><a href="<?php echo baseUrl; ?>recommended">Recommended</a></li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search" id="searchSiteForm">
                        <div class="form-group inner-addon right-addon">
                            <input type="text" class="form-control" placeholder="Search..." />
                            <i class="glyphicon glyphicon-search iconProp"></i>
                        </div>
<!--                        <button type="submit" class="btn btn-default searchIcon" ><img src="images/searchIcon.png" alt="searchIcon" height="20" width="20"></button>-->
                    </form>
                </div>
            </div>
        </nav>