<?php
    include_once '../model_DAO/statistic.php';
    extract($_REQUEST);
    if(isset($act)){
        switch($act) {
            case 'list':
                $tk_trangthai=statistic_status_order();
                // print_r($tk_trangthai);
                include_once 'view/template_header.php';
                include_once 'view/page_statistic.php';
                include_once 'view/template_footer.php';
        }

    }

?>