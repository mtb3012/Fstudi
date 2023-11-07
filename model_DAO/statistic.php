<?php
    include 'pdo.php';
    function statistic_status_order(){
        $sql="SELECT TrangThai, COUNT(MaDonHang) as SoLuong
        FROM DonHang GROUP BY TrangThai";
        return pdo_query($sql);
    }
?>