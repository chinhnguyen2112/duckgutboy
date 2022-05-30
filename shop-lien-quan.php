<?php
 
// Require database & th么ng tin chung
require_once 'core/init.php';
 $title="Duckgutboy Shop - Cửa hàng bán acc Liên Quân tự chọn";
// Require header
require_once 'includes/header-thu-van-may-9k.php';
// Danh sach account

$xss = new Anti_xss;

// $act = $xss->clean_up($_GET['act']);

require_once 'templates/products/lqm_list_new.php'; 

// Require footer
require_once 'includes/footer.php';
 
?>