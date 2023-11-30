<?php 
    function insert_bl($binhluan, $iduser, $idpro, $ngaybinhluan){
        $sql = "INSERT INTO binhluan(id_nguoidung, id_hanghoa, noidung, ngaybinhluan) VALUES('$iduser', '$idpro', '$binhluan', '$ngaybinhluan')";
        pdo_execute($sql);
    }

    function loadall_bl($idpro){
        $sql = "select * from binhluan where 1";
        if($idpro > 0){
        $sql.= " and id_hanghoa= $idpro";
        }
        $sql.= " order by id desc";
        $listbl = pdo_query($sql);
        return $listbl;
    }

    function delete_bl($id){
        $sql = "delete from binhluan where id_bl = ".$id;
        pdo_execute($sql);
    }


?>