<?php
if (!function_exists('loadall_binhluan')) {
    function loadall_binhluan($idsp)
    {
        $sql = "SELECT binhluan.*, user.hoten, sanpham.tensp 
                FROM binhluan 
                LEFT JOIN user ON binhluan.iduser = user.iduser 
                LEFT JOIN sanpham ON binhluan.idsp = sanpham.idsp 
                WHERE 1";
        if ($idsp > 0) $sql .= " AND binhluan.idsp='" . $idsp . "'";
        $sql .= " ORDER BY binhluan.iduser DESC";
        $listbl = pdo_query($sql);
        return $listbl;
    }
}

function delete_binhluan($idbl)
{
    $sql = "delete from binhluan where idbl=" . $idbl;
    pdo_execute($sql);
}
// function insert_binhluan($iduser,$idpro,$noidung,$ngaybinhluan){
//     $sql="INSERT INTO `binhluan`(`user_id`,`idsp`,`content`,`create_at`) VALUES('$iduser','$idpro','$noidung','$ngaybinhluan')";
//     pdo_execute($sql);
// }
function insert_binhluan($iduser, $idsp, $noidung, $ngaybl)
{
    $sql = "INSERT INTO binhluan(iduser, idsp, noidung, ngaybl) VALUES ('$iduser','$idsp','$noidung','$ngaybl')";
    pdo_execute($sql);
}
